<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';

    public $fillable=
    ['id','nome','email','assunto','mensagem','created_at','updated_at'];


}
