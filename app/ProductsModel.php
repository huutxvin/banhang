<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = "products";

	public function type_products(){
		return $this->belongsTo('App\ProductsTypeModel','id_type','id'); // id la id cua bang products
	}
	public function bill_detail(){
		return $this->hasMany('App\BillsDetailModel','id_product','id');
	}
}
