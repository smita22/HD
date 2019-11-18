<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sub_product extends Model
{
     protected $table = 'sub_product';

     protected $fillable = [ 'product_id', 'name', 'url', 'created_at', 'updated_at'];
}