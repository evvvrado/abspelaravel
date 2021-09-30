<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function conteudos(){
        return $this->hasMany(TurmaConteudo::class);
    }
}
