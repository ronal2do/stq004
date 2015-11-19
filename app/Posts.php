<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =[
    	'category_id',
    	'name',
    	'description',
    	'image'
    	'date_old'
    ];
}
