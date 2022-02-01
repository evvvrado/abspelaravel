<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;

class MatriculasController extends Controller
{
    //

    public function consultar(){
        $matriculas = Matricula::all();
        return view("painel.matriculas.consultar", ["matriculas" => $matriculas]);
    }

    public function matricular(Request $request){
        foreach($request->alunos as $aluno){
            $matricula = new Matricula;
            $matricula->aluno_id = $aluno;
            $matricula->turma_id = $request->turma;
            $matricula->save();
        }

        toastr()->success("Matrículas criadas com sucesso!");
        return redirect()->back();
    }
}
