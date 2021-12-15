<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Carrinho;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Classes\Email;
use Illuminate\Support\Str;

class AlunosController extends Controller
{
    //

    public function consultar(){
        $alunos = Aluno::all();
        return view("painel.alunos.consultar", ["alunos" => $alunos]);
    }

    public function cadastrar(Request $request){
        $aluno = Aluno::where("email", $request->email)->orWhere("cpf", $request->cpf)->first();
        if($aluno){
            session()->flash("erro", "O email ou CPF já pertence a um usuário cadastrado.");
            return redirect()->back();
        }
        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->senha = Hash::make($request->senha);
        $aluno->cpf = $request->cpf;
        $aluno->telefone = $request->telefone;
        $aluno->ultimo_acesso = date("Y-m-d");
        $aluno->save();
        session()->put(["aluno" => $aluno->toArray()]);
        if(session()->get("produto_adicionar")){
            return redirect(session()->get("produto_adicionar"));
        }else{
            return redirect()->route('site.minha-area');
        }
    }

    public function logar(Request $request){
        $aluno = Aluno::where("email", $request->email)->first();
        if($aluno && Hash::check($request->senha, $aluno->senha)){
            $aluno->ultimo_acesso = date("Y-m-d");
            $aluno->save();
            $carrinho = Carrinho::where([["aluno_id", $aluno->id], ["aberto", true]])->first();
            if($carrinho){
                session()->put(["carrinho" => $carrinho->id]);
            }
            session()->put(["aluno" => $aluno->toArray()]);
            Log::channel('acessos')->info('LOGIN: O aluno ' . $aluno->nome . ' logou no sistema.');
            if(session()->get("produto_adicionar")){
                return redirect(session()->get("produto_adicionar"));
            }else{
                return redirect()->route('site.minha-area');
            }
        }else{
            session()->flash("erro", "E-mail ou senha incorretos");
            return redirect()->back();
        }
    }

    public function deslogar(){
        session()->forget("aluno");
        return redirect()->route("site.index");
    }

    public function recuperar_senha(Request $request){
        $aluno = Aluno::where("email", $request->email)->first();
        if(!$aluno){
            session()->flash("erro", "Não existe uma conta com o e-mail informado");
            return redirect()->back();
        }else{
            $nova_senha = Str::random(6);
            $aluno->senha = Hash::make($nova_senha);
            $aluno->save();
            $file = "Olá <b>" . $aluno->nome . "</b><br>";
            $file .= "Estamos enviando uma senha para que consiga acessar nosso sistema !<br>";
            $file .= "Se tiver mais dúvidas, entre em contato pelo site !";
            $file .= "<br><br>Nova Senha: " . $nova_senha;
            if(Email::enviar($file, "Nova senha", $aluno->email)){
                session()->flash("sucesso", "Uma senha temporária foi enviada para o e-mail informado no seu cadastro.");
                return redirect()->route("site.minha-conta");
            }else{
                session()->flash("erro", "Não foi possível enviar um e-mail com sua nova senha temporária no momento. Por favor, tente mais tarde.");
                return redirect()->back();
            } 
        }
    }
}
