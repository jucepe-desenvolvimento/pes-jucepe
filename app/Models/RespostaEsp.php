<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespostaEsp extends Model
{
    use HasFactory;

    protected $table = 'respostas_esp';

    protected $guarded = [];

    protected $primaryKey = 'id_resposta';

    public function pesquisa() {
        return $this->belongsTo(Pesquisa::class, 'pesquisa_id');
    }

    public function respondentes() {
        return $this->belongsTo(Respondente::class, 'respondente_id');
    }
}
