<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesquisaServicos extends Model
{
    use HasFactory;

    protected $table = 'pesquisa_svcs';

    protected $guarded = ['#'];

}
