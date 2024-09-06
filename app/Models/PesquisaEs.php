<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesquisaEs extends Model
{
    use HasFactory;

    protected $table = 'pesquisa_es';

    protected $guard = [];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'lgpdConsent',
        'anonymous',
        'produto',
        'orientacao',
        'tempoResposta',
        'ambienteFisico',
        'duvidasEsclarecimentos',
        'tempoAnalise',
        'prazoEntrega',
        'integracaoOrgaos',
        'facilidadeUso',
        'avaliacaoGeral',
        'qualidadeAtendimento',
        'textoAdicional',
    ];
}
