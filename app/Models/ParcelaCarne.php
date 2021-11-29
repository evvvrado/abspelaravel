<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelaCarne extends Model
{
    use HasFactory;

    public function carne(){
        return $this->belongsTo(PagamentoCarne::class, "pagamento_carne_id", "id");
    }
}
