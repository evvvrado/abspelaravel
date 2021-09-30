<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Str;

class CursosController extends Controller
{
    //

    public function getCurso(Curso $curso){
        return response()->json($curso->toJson());
    }

    public function consultar(){
        $cursos = Curso::all();
        return view("painel.cursos.consultar", ["cursos" => $cursos]);
    }

    public function cadastrar(Request $request){
        if($request->curso_id){
            $curso = Curso::find($request->curso_id);
            $curso->titulo = $request->titulo;
            $curso->slug = Str::slug($request->titulo);
            toastr()->success("Curso salvo com sucesso");
        }else{
            $curso = new Curso;
            $curso->titulo = $request->titulo;
            $curso->slug = Str::slug($request->titulo);
            $curso->preco = 0;
            $curso->tipo = 0;
            $curso->save();
            toastr()->success("Curso criado com sucesso!");
        }

        $curso->detalhes_resumo = $this->processa_editor($curso->id, $request->detalhes_resumo);
        $curso->detalhes_conteudo = $this->processa_editor($curso->id, $request->detalhes_conteudo);
        $curso->programacao_resumo = $this->processa_editor($curso->id, $request->programacao_resumo);
        $curso->programacao_conteudo = $this->processa_editor($curso->id, $request->programacao_conteudo);
        $curso->instrutores_resumo = $this->processa_editor($curso->id, $request->instrutores_resumo);
        $curso->instrutores_conteudo = $this->processa_editor($curso->id, $request->instrutores_conteudo);
        $curso->local_resumo = $this->processa_editor($curso->id, $request->local_resumo);
        $curso->local_conteudo = $this->processa_editor($curso->id, $request->local_conteudo);
        if($curso->modalidade != $request->modalidade){
            foreach($curso->turmas as $turma){
                $turma->modalidade = $request->modalidade;
                $turma->save();
            }
        }
        $curso->modalidade = $request->modalidade;

        // MINIATURA
        if($request->file("miniatura")){
            Storage::delete($curso->miniatura);
            $image = $request->file('miniatura');
            $input['imagename'] = time().'.'.$image->extension();
            $destinationPath = public_path('site/imagens/cursos/' . $curso->id);
            if(!is_dir($destinationPath)){
                mkdir($destinationPath);
            }
            $img = Image::make($image->path());
            $img->resize(360, 200)->save($destinationPath.'/'.$input['imagename']);
            $curso->miniatura = 'site/imagens/cursos/' . $curso->id . "/" . $input['imagename'];
        }
        
        // BANNER
        if($request->file("banner")){
            Storage::delete($curso->banner);
            $image = $request->file('banner');
            $input['imagename'] = time().'.'.$image->extension();
            $destinationPath = public_path('site/imagens/cursos/' . $curso->id);
            if(!is_dir($destinationPath)){
                mkdir($destinationPath);
            }
            $img = Image::make($image->path());
            $img->resize(1200, 546)->save($destinationPath.'/'.$input['imagename']);
            $curso->banner = 'site/imagens/cursos/' . $curso->id . "/" . $input['imagename'];
        }
        $curso->preco = 0;
        $curso->tipo = 0;
        $curso->save();
        return redirect()->back();
    }

    public function ativo(Curso $curso){
        if($curso->ativo){
            $curso->ativo = false;
            toastr()->success("Curso desativado");
        }else{
            $curso->ativo = true;
            toastr()->success("Curso ativado");
        }
        $curso->save();
        return redirect()->back();
    }

    public function processa_editor($id, $conteudo){
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML(
            mb_convert_encoding($conteudo, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                if(!is_dir('site/imagens/cursos/')){
                    mkdir('site/imagens/cursos/');
                }
                if(!is_dir('site/imagens/cursos/' . $id . "/")){
                    mkdir('site/imagens/cursos/' . $id . "/");
                }
                $mimeType = $groups['mime'];
                if(!is_dir('site/imagens/cursos/' . $id . "/")){
                    mkdir('site/imagens/cursos/' . $id . "/");
                }
                $path = 'site/imagens/cursos/' . $id . "/" . uniqid('', true) . '.' . $mimeType;

                Image::make($src)
                    ->encode($mimeType, 80)
                    ->save(public_path($path));

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }

        return $dom->saveHTML();
    }
}
