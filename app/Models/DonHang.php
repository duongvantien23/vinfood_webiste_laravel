<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    
    protected $table = 'DonHangs';
    protected $primaryKey = 'MaDonHang';
    protected $fillable = ['MaDonHang','MaKH', 'MaTrangThai', 'MaPhuongThuc','NgayDatHang', 'DiaChiGiaoHang'];
}
