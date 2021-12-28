<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Visitas;
use App\Models\Vendas;
use App\Models\PagamentoBoleto;
use App\Models\PagamentoCartao;
use App\Models\PagamentoCarne;

class PainelController extends Controller
{

    public function index(){
        $pagamentos = collect([]);
        $boletos = PagamentoBoleto::all();
        $boletos_pagos = $boletos->where("status", "paid");
        $cartoes = PagamentoCartao::all();
        $cartoes_pagos = $cartoes->where("status", 1);
        $carnes = PagamentoCarne::all();
        $parcelas_pagas = 0;
        
        foreach($boletos_pagos as $boleto){
            $pagamentos[] = (object)[
                "aluno_id" => $boleto->venda->aluno->id, 
                "aluno" => $boleto->venda->aluno->nome,
                "tipo" => 0,
                "valor" => $boleto->total,
                "data" => $boleto->updated_at
            ];
        }

        foreach($cartoes_pagos as $cartao){
            $pagamentos[] = (object)[
                "aluno_id" => $cartao->venda->aluno->id, 
                "aluno" => $cartao->venda->aluno->nome,
                "tipo" => 1,
                "valor" => $cartao->venda->total,
                "data" => $cartao->updated_at
            ];
        }
        
        foreach($carnes as $carne){
            $parcelas = $carne->parcelas->where("status", "paid");
            foreach($parcelas as $parcela){
                $pagamentos[] = (object)[
                    "aluno_id" => $parcela->carne->venda->aluno->id, 
                    "aluno" => $parcela->carne->venda->aluno->nome,
                    "tipo" => 2,
                    "parcela" => $parcela->parcela,
                    "total_parcelas" => $parcela->carne->venda->parcelas,
                    "valor" => $parcela->valor,
                    "data" => $parcela->updated_at
                ];
            }
            $parcelas_pagas += $parcelas->count(); 
        }
        
        return view("painel.index", [
            "boletos" => $boletos->count(),
            "boletos_pagos" => $boletos_pagos->count(),
            "cartoes" => $cartoes->count(),
            "cartoes_pagos" => $cartoes_pagos->count(),
            "carnes" => $carnes->count(),
            "parcelas_pagas" => $parcelas_pagas,
            "pagamentos" => $pagamentos->sortByDesc("data")
        ]);
    }

    public function indisponivel(){
        return view("painel.indisponivel");
    }

    public function login(){
        return view("painel.login");
    }

    public function logar(Request $request){
        $usuario = Usuario::where("usuario", $request->usuario)->first();
        if($usuario){
            if(!$usuario->ativo){
                Log::channel('acessos')->info('LOGIN: O usuario bloqueado ' . $usuario->usuario . ' tentou logar no sistema.');
                toastr()->error("O seu usuário está bloqueado no sistema!");
                return redirect()->route("painel.index");
            }
            if(Hash::check($request->senha, $usuario->senha)){
                session()->put(["usuario" => $usuario->toArray()]);
                Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario->usuario . ' logou no sistema.');
                return redirect()->route("painel.index");
            }else{
                toastr()->error("Informações de usuário incorretas!");
            }
        }else{
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();
    }

    public function sair(){
        Log::channel('acessos')->info('LOGIN: O usuario ' . session()->get("usuario")["usuario"] . ' saiu do sistema.');
        session()->forget("usuario");
        return redirect()->route("painel.login");
    }

    public function leads(){
        $visitas = Visitas::orderBy("created_at", "DESC")->get();
        return view("painel.leads", ['visitas' => $visitas]);
    }
}
