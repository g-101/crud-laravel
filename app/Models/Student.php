<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // A propriedade fillable é usada dentro do model
    // e determina quais tipos de dados ou campos são atribuíveis na tabela do banco de dados.
    protected $fillable = [
        'name', 'email', 'phone', 'password',
    ];
}
