<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    //1 bill se co nhieu bill detail
    public function bill_detail(){
    	return $this->hasMany('app\BillDetail', 'id_bill', 'id');
    }

    /*1 bill se thuoc ve 1 KH*/
    public function bill(){
    	return $this->belongsTo('app\Customer','id_customer','id');
    }
}
