<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $table = 'voluntarios';

    protected $fillable =[
    	'name',
		'email',
		'nascimento',
		'bairro',
		'endereco',
		'tel',
		'ocupacao',
		'dias',
		'periodo',
		'horas',
		'message'
    ];
}
