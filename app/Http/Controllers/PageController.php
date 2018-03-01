<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlidesModel;
use App\ProductsModel;
use App\ProductsTypeModel;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = SlidesModel::all();
    	$new_product       = ProductsModel::where('new',1)->paginate(8);// Tim san pham moi tai cot new ==1
    	$promotion_product = ProductsModel::where('promotion_price','<>',0)->paginate(8);//Tim san pham khuyen mai tai cot promotion_price != 0
    	return view('pages.index',compact('slide','new_product','promotion_product'));//Hien thi slide
    	// return view('pages.index',['slide'=>$slide]);// Cach khac de hien thi slide
    }

    public function getProducts(Request $req){
    	$product      = ProductsModel::where('id',$req->id)->first();// tim chi tiet san pham 
    	$same_product = ProductsModel::where('id_type',$product->id_type)->paginate(3);// tim san pham tuong tu voi id_type bang san pham lay duoc($product) tro toi id_type
    	return view('pages.products', compact('product','same_product')); // hien thi du lieu ra view
    }

    public function getProductsType($type){
        $type_products  = ProductsModel::where('id_type',$type)->paginate(6);// lay san pham theo loai (trang loai san pham)
        $other_products = ProductsModel::where('id_type','<>',$type)->paginate(9); //lay san pham khac (trang loai san pham)
        $types          = ProductsTypeModel::all();//lay loai san pham (sidebar)
        $loai_sp        = ProductsTypeModel::where('id',$type)->first();// lay loai san pham(hien thi ra tieu de)
        return view('pages.products_type', compact('type_products','other_products','types','loai_sp'));
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getAbout(){
    	return view('pages.about');
    }
}
