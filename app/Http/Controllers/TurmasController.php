<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\TurmaConteudo;
use Illuminate\Support\Facades\Storage;

class TurmasController extends Controller
{
    //
    public function consultar(Curso $curso){
        $turmas = $curso->turmas;
        return view("painel.turmas.consultar", ['turmas' => $turmas, "curso" => $curso]);
    }

    public function getTurma(Turma $turma){
        return response()->json($turma->toJson());
    }

    public function cadastrar(Request $request){
        if($request->turma_id){
            $turma = Turma::find($request->turma_id);
            toastr()->success("Alterações salvas com sucesso!");
        }else{
            $turma = new Turma;
            $turma->curso_id = $request->curso_id;
            toastr()->success("Turma cadastrada com sucesso!");
        }
        $turma->nome = $request->nome;
        $turma->texto_turma = $request->texto_turma;
        $turma->local = $request->local;
        $turma->data = $request->data;
        $turma->horario = $request->horario;
        $turma->preco = $request->preco;
        $turma->parcelas = $request->parcelas;
        $turma->vagas = $request->vagas; 
        $turma->botao_comprar = $request->botao_comprar;
        $turma->periodo = $request->periodo;
        $turma->ativo = true;
        $turma->save();
        return redirect()->back();
    }

    public function ativo(Turma $turma){
        $turma->ativo = !$turma->ativo;
        $turma->save();
        return redirect()->back();
    }

    public function inscricao(Turma $turma){
        $turma->aberto = !$turma->aberto;
        $turma->save();
        return redirect()->back();
    }

    public function conteudo(Turma $turma){
        return view("painel.turmas.conteudo", ['turma' => $turma]);
    }

    public function cadastrar_conteudo(Request $request, Turma $turma){
        $conteudo = new TurmaConteudo;
        $conteudo->turma_id = $turma->id;
        $conteudo->descricao = $request->descricao;
        $conteudo->publicacao = $request->publicacao;
        if($request->file("arquivo")){
            $conteudo->arquivo = $request->file('arquivo')->store(
                'site/curso/'.$turma->curso->slug.'/'.$turma->id.'/conteudo', 'local'
            );
        }
        $conteudo->save();
        return redirect()->back();
    }

    public function salvar_conteudo(Request $request, TurmaConteudo $conteudo){
        $conteudo->descricao = $request->descricao;
        $conteudo->publicacao = $request->publicacao;
        if($request->file("arquivo")){
            Storage::delete($conteudo->arquivo);
            $conteudo->arquivo = $request->file('arquivo')->store(
                'site/curso/'.$turma->curso->slug.'/'.$turma->id.'/conteudo', 'local'
            );
        }
        $conteudo->save();
        return redirect()->back();
    }

    public function deletar_conteudo(TurmaConteudo $conteudo){
        Storage::delete($conteudo->arquivo);
        $conteudo->delete();
        return redirect()->back();
    }
}
