<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $products = Product::where('new',1)->paginate(4);
        $newProducts = Product::where('new',1)->paginate(6);
        $loaisp = ProductType::with("products")
            ->limit(3)
            ->get();
        return view('pages.TrangChu',compact('products','slide','newProducts','loaisp'));
    }
    public function listLoaiSp(){
        $products = Product::paginate(4);
        return view('pages.ChiTietLoaiSanPham',["products"=>$products]);
    }
}
