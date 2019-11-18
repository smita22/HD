<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sub_sub_product extends Model
{
     protected $table = 'sub_sub_product';

     public function product()
	{
		$this->belongsTo('App\Models\sub_product');
		return $this->belongsTo('App\Models\Product');
	}
}