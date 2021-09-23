<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Models\GaleriaFoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriaController extends Controller
{
    //
    public function index(){
        $galerias = Galeria::all();
        return view("painel.galerias.index", ["galerias" => $galerias]);
    }

    public function cadastrar(Request $request){
        $galeria = new Galeria;
        $galeria->nome = $request->nome;
        $galeria->slug = Str::slug($galeria->nome);
        $galeria->ativo = $request->ativo;
        $galeria->save();
        toastr()->success("Galeria criada com sucesso!");
        return redirect()->back();
    }

    public function salvar(Request $request, Galeria $galeria){
        $galeria->nome = $request->nome;
        $galeria->slug = Str::slug($galeria->nome);
        $galeria->ativo = $request->ativo;
        $galeria->save();
        toastr()->success("Galeria salva com sucesso!");
        return redirect()->back();
    }

    public function deletar(Galeria $galeria){
        foreach($galeria->fotos as $foto){
            Storage::delete($foto->imagem);
            $foto->delete();
        }
        $galeria->delete();
        toastr()->success("Galeria excluida com sucesso!");
        return redirect()->back();
    }

    public function fotos(Galeria $galeria){
        return view("painel.galerias.fotos", ["galeria" => $galeria]);
    }

    public function adicionar_foto(Request $request, Galeria $galeria){
        if($request->file("imagem")){
            $foto = new GaleriaFoto;
            $foto->galeria_id = $galeria->id;
            $foto->imagem = $request->file('imagem')->store(
                'site/imagens/galerias/' . $galeria->id, 'local'
            );
            $foto->save();
            toastr()->success("Foto adicionada a galeria");
            return redirect()->back();
        }
        toastr()->error("Erro ao adicionar a foto");
        return redirect()->back();
    }

    public function deletar_foto(GaleriaFoto $foto){
        Storage::delete($foto->imagem);
        $foto->delete();
        toastr()->success("Foto removida!");
        return redirect()->back();
    }
}
