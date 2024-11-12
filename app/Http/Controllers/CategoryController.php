<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        
        // Lấy tất cả các danh mục
        $danhMucs = DanhMuc::all();
        // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
        return view('admins.qlcategory', [
            'danhMucs' => $danhMucs
        ]);
       
    }
    public function index()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
    $danhMucs = DanhMuc::all();
    
    // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
    return view('admins.qlcategory', [
        'danhMucs' => $danhMucs,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DanhMuc $danhMuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DanhMuc $danhMuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DanhMuc $danhMuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DanhMuc $danhMuc)
    {
        //
    }
}
