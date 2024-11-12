<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='SanPhams';
    protected $primaryKey = 'MaSP';
    protected $fillable = ['MaSP', 'TenSP','Gia','HinhAnh','MaDanhMuc','MaNhaCC','TenNhaCC','TenDanhMuc','DonViTinh','Mota','LuotXem'];
    public function danhMuc()
    {
        return $this->belongsTo(DanhMuc::class, 'MaDanhMuc', 'MaDanhMuc');
    }
    public function nhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'MaNhaCC', 'MaNhaCC');
    }
    public $timestamps = false; // Tắt tự động cập nhật thời gian
}
