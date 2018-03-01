<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = "customer";

    public function bills(){
		return $this->hasMany('App\BillsModel','id_customer','id');
	}
}
