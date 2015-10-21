<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'markers';

    public function user(){
    	return $this->belongsTo(User::class);
    }

     protected $fillable =[

    	'address',
    	'description',
    	'lng',
    	'lat'
    ];
}
