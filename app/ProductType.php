<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";

    public function product(){
    	//Truyen vao 3 tham so: duong dan model, khoa ngoai(id_type), khoa chinh(id)
    	return $this->hasMany('app\Product',/*khoa ngoai*/'id_type',/*khoa chinh*/'id');
    }
}
