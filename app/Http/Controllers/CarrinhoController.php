<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Carrinho;
use App\Models\CarrinhoProduto;
use App\Models\Aluno;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Venda;
use App\Classes\Cartao;
use App\Models\Configuracao;

class CarrinhoController extends Controller
{
    //

    public function adicionar(Turma $turma)
    {
        if (!session()->get("aluno")) {
            session()->put(["produto_adicionar" => url()->current()]);
            return redirect()->route("site.carrinho-identificacao");
        } else {
            if (session()->get("produto_adicionar")) {
                session()->forget("produto_adicionar");
            }
            
            if($turma->inscritos >= $turma->vagas){
                return redirect()->back();
            }

            if (!session()->get("carrinho")) {
                $carrinho = new Carrinho();
                $carrinho->aluno_id = session()->get("aluno")["id"];
                $carrinho->ultima_notificacao = date("Y-m-d");
                $carrinho->save();
                session()->put(["carrinho" => $carrinho->id]);
            } else {
                $carrinho = Carrinho::find(session()->get("carrinho"));
            }

            if($carrinho->produtos->where("turma_id", $turma->id)->count() > 0){
                return redirect()->route("site.carrinho-efetuar");
            }

            $produto = new CarrinhoProduto;
            $produto->carrinho_id = $carrinho->id;
            $produto->turma_id = $turma->id;
            $produto->total = $turma->preco;
            $produto->save();

            $carrinho->total += $produto->total;
            $carrinho->save();

            return redirect()->route("site.carrinho-efetuar");
        }
    }

    public function remover(Turma $turma)
    {
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $produto = CarrinhoProduto::where([["carrinho_id", $carrinho->id], ["turma_id", $turma->id]]);
        $produto->delete();
        $carrinho->total -= $turma->preco;
        $carrinho->save();
        if ($carrinho->produtos->count() == 0) {
            $carrinho->delete();
            session()->forget("carrinho");
            return redirect()->route('site.index');
        }
        return redirect()->back();
    }

    public function identificar(Request $request)
    {
        $aluno = Aluno::where("email", $request->email)->first();
        if ($aluno && Hash::check($request->senha, $aluno->senha)) {
            $aluno->ultimo_acesso = date("Y-m-d");
            $aluno->save();
            session()->put(["aluno" => $aluno->toArray()]);
            Log::channel('acessos')->info('LOGIN: O aluno ' . $aluno->nome . ' logou no sistema.');
            if (session()->get("produto_adicionar")) {
                return redirect(session()->get("produto_adicionar"));
            } else {
                return redirect()->route('site.minha-area');
            }
        } else {
            session()->flash("erro", "E-mail ou senha incorretos");
            return redirect()->back();
        }
    }

    public function pagamento_cartao()
    {
        if (!session()->get("carrinho")) {
            return redirect()->route('site.index');
        }
        $configuracao = Configuracao::first();
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $aluno = $carrinho->aluno;
        return view("site.carrinho-pagamento", ["forma" => "cartao", "carrinho" => $carrinho, "aluno" => $aluno, "configuracao" => $configuracao]);
    }

    public function pagamento_boleto()
    {
        if (!session()->get("carrinho")) {
            return redirect()->route('site.index');
        }
        $configuracao = Configuracao::first();
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $aluno = $carrinho->aluno;
        return view("site.carrinho-pagamento", ["forma" => "boleto", "carrinho" => $carrinho, "aluno" => $aluno, "configuracao" => $configuracao]);
    }

    public function identificacao()
    {
        return view("site.carrinho-identificacao");
    }

    public function confirmacao()
    {
        if (session()->get("venda_finalizada")) {
            $venda = Venda::find(session()->get("venda_finalizada"));
            session()->forget("venda_finalizada");
            return view("site.carrinho-confirmacao", ["venda" => $venda]);
        } else {
            return redirect()->route("site.index");
        }
    }

    public function efetuar()
    {
        if (!session()->get("carrinho")) {
            return redirect()->route('site.index');
        }
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $aluno = $carrinho->aluno;
        return view("site.carrinho-efetuar", ["carrinho" => $carrinho, "aluno" => $aluno]);
    }

    public function finalizar_boleto(Request $request)
    {
        return redirect()->route("site.carrinho.finalizar.boleto.gerencianet", ["parcelas" => $request->parcelas]);
    }

    // public function finalizar_cartao(Request $request){
    //     $cartao = new Cartao
    // }
}
