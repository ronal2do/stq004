<?php

namespace App;

use Illuminate\Database\Eloquent;

class Vendor extends Eloquent
{
	protected $table = 'markers';
	 $custom = Request::except('_token'); // Exclude _token attribute
   
}
