<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    
    protected $table = 'DanhMucs';
    protected $primaryKey = 'MaDanhMuc';
    protected $fillable = ['MaDanhMuc','TenDanhMuc'];
}

