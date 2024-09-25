<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugestao extends Model
{
    use HasFactory;

    protected $table = 'sugestoes';

    protected $guarded = [];

    public function respostaEsp() {
        return $this->belongsTo(RespostaEsp::class, 'resposta_id');
    }

    public function respostaServ() {
        return $this->belongsTo(RespostaServ::class, 'resposta_serv_id');
    }

}
