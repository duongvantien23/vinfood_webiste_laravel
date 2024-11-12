<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\NhaCungCap;
use App\Models\TinTuc;

class UserProductController extends Controller
{

    public function showHomePage()
    {
        $mostViewedProducts = SanPham::orderBy('LuotXem', 'desc')->take(8)->get();
        $products = SanPham::take(8)->get(); 
        $newArrivalProducts = SanPham::orderBy('NgaySanXuat', 'desc')->take(5)->get();
        $blogs = TinTuc::take(3)->get(); 
        
        return view('user.home', compact('mostViewedProducts', 'products','blogs','newArrivalProducts'));
    }
    
// Trong ProductController.php
public function showDetail($productId)
{
  
    $product = SanPham::findOrFail($productId);


    $relatedProducts = SanPham::where('MaDanhMuc', $product->MaDanhMuc)
                                ->where('MaSP', '!=', $productId) 
                                ->take(4) 
                                ->get();

    return view('user.detailt', ['product' => $product, 'relatedProducts' => $relatedProducts]);
}
public function showCategory($categoryId)
{
   
    $category = DanhMuc::findOrFail($categoryId);


    $products = SanPham::where('MaDanhMuc', $categoryId)->take(12)->get();

    return view('user.category', ['products' => $products, 'category' => $category]);
}

}