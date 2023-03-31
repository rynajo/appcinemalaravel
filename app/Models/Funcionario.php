<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'emailfun','nomefun','senhafun','whatsappfun','cpffun'
    ];
}