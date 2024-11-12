<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    
    protected $table = 'KhachHangs';
    protected $primaryKey = 'MaKH';
    protected $fillable = ['MaKH','TenKH', 'SDT', 'Email','DiaChi'];
}
