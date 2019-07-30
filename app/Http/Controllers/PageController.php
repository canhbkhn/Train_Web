<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;

use Illuminate\Http\Request;


class PageController extends Controller
{
    /*view index*/
    public function getIndex(){
        $slide = Slide::all();
    	//return view('pages.homepage', ['slide'=>$slide]);
        $new_product = Product::where('new', 1)->paginate(4);
        $sale_product = Product::where('promotion_price','<>', 0)->paginate(8);

        //dd($sale_product);
        //exit;

        //dd($new_product);

        return view('pages.homepage', compact('slide', 'new_product', 'sale_product'));

    }

    /*get product type*/
    public function getProductType($type)
    {
        $sp_theo_loai = Product::where('id_type', $type)->get();

        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);

        $loai = ProductType::all();

        $loaiSP = ProductType::where('id', $type)->first();

    	return view('pages.product_type', compact('sp_theo_loai', 'sp_khac', 'loai', 'loaiSP'));
    }

    /*get product detail*/
    public function getProductDetail(Request $req){
        $sanpham = Product::where('id', $req->id)->first();
        /* lay san pham tuong tu de hien thi*/
        $sanpham_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);

        $new_product = Product::where('new',1)->get();

    	return view('pages.product_detail', compact('sanpham', 'sanpham_tuongtu', 'new_product'));
    }

    /*get contact page*/
    public function getContact(){
        return view('pages.contact');
    }

    /*get about page*/
    public function getAbout(){
        return view('pages.about');
    }
}
