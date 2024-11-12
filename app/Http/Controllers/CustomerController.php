<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $khachHangs = KhachHang::all();
    
        
        // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
        return view('admins.qlcustomer', [
            'khachHangs' => $khachHangs,
        ]);
       
    }
    public function index()
    {
            // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
    $khachHangs = KhachHang::all();
    
    // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
    return view('admins.qlcustomer', [
        'khachHangs' => $khachHangs,
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
    public function show(KhachHang $khachHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KhachHang $khachHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KhachHang $khachHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KhachHang $khachHang)
    {
        //
    }
}
