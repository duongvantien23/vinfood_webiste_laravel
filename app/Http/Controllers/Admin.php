<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //
    public function index()
    {
        return view('adminlayout.adminhome'); // Trả về view của trang admin
    }
}
