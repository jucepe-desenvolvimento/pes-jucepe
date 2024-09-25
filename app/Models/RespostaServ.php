<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespostaServ extends Model
{
    use HasFactory;

    protected $table = 'respostas_serv';

    protected $guarded = [];

    protected $primaryKey = 'id_resposta_serv';

    public function pesquisa() {
        return $this->belongsTo(Pesquisa::class, 'id_pesquisa');
    }

    public function respondentes() {
        return $this->belongsTo(Respondente::class, 'id_respondente');
    }

    public function servico() {
        return $this->belongsTo(Servicos::class, 'cod_servico');
    }
}
