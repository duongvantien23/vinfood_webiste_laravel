<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $donHangs = DonHang::all();
    
        
        // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
        return view('admins.qlorder', [
            'donHangs' => $donHangs,
        ]);
       
    }
    public function index()
    {
         // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
    $donHangs = DonHang::all();
    
    // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
    return view('admins.qlorder', [
        'donHangs' => $donHangs,
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
    public function show(DonHang $donHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DonHang $donHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DonHang $donHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DonHang $donHang)
    {
        //
    }
}
