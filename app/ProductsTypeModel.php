<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsTypeModel extends Model
{
    protected $table = "type_products";

    public function products(){
    	return $this->hasMany('App\ProductsModel','id_type','id'); // id la id của bảng type_products
    }
}
