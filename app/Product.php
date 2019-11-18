<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = 'product';

    public function subproducts()
	{ 
		return $this->hasMany('App\Models\sub_product');
		 
	}
	public function subtosubproducts()
	{ 
		return $this->hasMany('App\Models\sub_sub_product');
		 
	}
}