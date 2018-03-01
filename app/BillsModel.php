<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillsModel extends Model
{
    protected $tasble = "bills";

    public function bill_detail(){
		return $this->hasMany('App\BillsDetailModel','id_bill','id');
	}
	public function customer(){
		return $this->belongsTo('App\CustomerModel','id_customer','id');
	}
}
