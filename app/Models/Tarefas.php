<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $table = 'tarefa';

    public $fillable=
    ['id','nome','DataInicio','DataLimite','StatusTarefa','created_at','updated_at'];


}
