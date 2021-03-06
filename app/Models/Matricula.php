<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    public function turma(){
        return $this->belongsTo(Turma::class);
    }

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
