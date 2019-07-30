<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    //1 prodcut se thuoc ve 1 bill detail
    public function product(){
    	return $this->belongsTo('app\BillDetail','id_product', 'id');
    }

    //1 bill detail se thuoc ve 1 bill nao do
    public function bill(){
    	return $this->belongsTo('app\Bill','id_bill', 'id');
    }
}
