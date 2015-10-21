<?php
	//vendor model
	class Vendor extends Eloquent{
		protected $table = 'markers';
		protected $fillable = ['title','lat','lng'];
	}
 ?>