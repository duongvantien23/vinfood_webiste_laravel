<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Admin::class, 'index']);

Route::get('/admin', function () {
    return view('adminlayout.adminhome');
});
Route::get('/index', function () {
    return view('admins.index');
});
Route::get('/sanpham', function () {
    return view('admins.qlsanpham');
});
Route::get('/categorys', function () {
    return view('admins.qlcategory');
});
Route::get('/customers', function () {
    return view('admins.qlcustomer');
});
Route::get('/orders', function () {
    return view('admins.qlorder');
});
Route::get('/editproduct', function () {
    return view('admins.editproduct');
});

// Route cho danh sách sản phẩm
Route::get('/sanpham', [SanPhamController::class, 'getAll']);
Route::get('/categorys', [CategoryController::class, 'getAll']);
Route::get('/customers', [CustomerController::class, 'getAll']);
Route::get('/orders', [OrderController::class, 'getAll']);
Route::post('/sanpham', [SanPhamController::class, 'store'])->name('sanpham.store');
Route::get('/admins/{MaSP}/edit', [SanPhamController::class, 'edit'])->name('admin.editproduct');
Route::put('/sanpham/{MaSP}/update', [SanPhamController::class, 'update'])->name('sanpham.update');
Route::get('/sanpham/{MaSP}/delete', [SanPhamController::class, 'delete'])->name('sanpham.delete');




//Router User

Route::get('/home', function () {
    return view('user.home');
});
Route::get('/detailt', function () {
    return view('user.detailt');
});
Route::get('/category', function () {
    return view('user.category');
});
Route::get('/cart', function () {
    return view('user.cart');
});
Route::get('/intro', function () {
    return view('user.intro');
});
Route::get('/blog', function () {
    return view('user.blog');
});
Route::get('/checkout', function () {
    return view('user.checkout');
});
Route::get('/success', function () {
    return view('user.success');
});
// Route cho phương thức showHomePage
Route::get('/home', [UserProductController::class, 'showHomePage'])->name('home.showHomePage');
// Trong file web.php
Route::get('/detailt/{productId}', [UserProductController::class, 'showDetail'])->name('product.detailt');
Route::get('/category/{categoryId}', [UserProductController::class, 'showCategory'])->name('category.show');




















