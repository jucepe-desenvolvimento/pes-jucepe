<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondente extends Model
{
    use HasFactory;

    protected $table = 'respondentes';

    protected $primaryKey = 'id_respondente';
    
    protected $guarded = [];
}
