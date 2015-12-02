<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'markers';

    protected $fillable =[
    	'address',
    	'description',
    	'alert_type',
    	'lng',
    	'lat',
    	'name',
		'email'
    ];
}
