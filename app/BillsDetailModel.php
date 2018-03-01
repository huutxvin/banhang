<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillsDetailModel extends Model
{
    protected $table = "billdetail";

    public function products(){
		return $this->belongsTo('App\ProductsModel','id_product','id');
	}
	public function bills(){
		return $this->belongsTo('App\BillsModel','id_bill','id');
	}
}
