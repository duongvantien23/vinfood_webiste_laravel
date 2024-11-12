<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\NhaCungCap;

class SanPhamController extends Controller
{
   // Phương thức để lấy tất cả các sản phẩm
   public function getAll()
   {
       // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
       $sanPhams = SanPham::all();
       
       // Lấy tất cả các danh mục
       $danhMucs = DanhMuc::all();

       // Lấy tất cả các nhà cung cấp
       $nhaCungCaps = NhaCungCap::all();
       
       // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
       return view('admins.qlsanpham', [
           'sanPhams' => $sanPhams,
           'danhMucs' => $danhMucs,
           'nhaCungCaps' => $nhaCungCaps,
       ]);
      
   }
   // Thêm hàm index vào controller
public function index()
{
    // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
    $sanPhams = SanPham::all();
    
    // Trả về view hiển thị danh sách sản phẩm với dữ liệu được truyền vào
    return view('admins.qlsanpham', [
        'sanPhams' => $sanPhams,
    ]);
}
    // Phương thức để thêm sản phẩm

    public function create()
    {
        $danhMucs = DanhMuc::all();
        $nhaCungCaps = NhaCungCap::all();
        
        return view('admins.qlsanpham', ['danhMucs' => $danhMucs, 'nhaCungCaps' => $nhaCungCaps]);
    }

    public function store(Request $request)
    {
        $validator = SanPham::make($request->all(), [
            'productname' => 'required|string',
            'producPrice' => 'required|numeric',
            'description' => 'nullable|string',
            'donViTinh' => 'nullable|string',
            'luotXem' => 'nullable|string',
            'danhMuc' => 'required|exists:danh_mucs,id', 
            'nhaCungCap' => 'required|exists:nha_cung_caps,id', 
            'file-upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        // Kiểm tra xem validate có lỗi không
     
        // Xử lý và lưu ảnh đại diện
        if ($request->hasFile('file-upload')) {
            // Lấy đuôi mở rộng của tệp
            $extension = $request->file('file-upload')->extension();
    
            // Tạo tên tệp mới sử dụng thời gian hiện tại và đuôi mở rộng
            $imagePath = time().'.'.$extension;  
    
            // Di chuyển tệp vào thư mục công cộng
            $request->file('file-upload')->move(public_path('Img'), $imagePath);
        } else {
            // Nếu không có tệp được gửi, gán null cho đường dẫn ảnh
            $imagePath = null;
        }
    
        // Tạo sản phẩm mới và lưu vào cơ sở dữ liệu
        $product = new SanPham();
        $product->TenSP = $request->input('productname');
        $product->Gia = $request->input('producPrice');
        $product->Mota = $request->input('description');
        $product->DonViTinh = $request->input('donViTinh');
        $product->LuotXem = $request->input('luotXem');
        $product->MaDanhMuc = $request->input('danhMuc');
        $product->MaNhaCC = $request->input('nhaCungCap');
        $product->HinhAnh = $imagePath;
        $product->save();
        
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm thành công!');

    }
    public function edit($MaSP)
    {
        $sanPham = SanPham::findOrFail($MaSP);
        $danhMucs = DanhMuc::all();
        $nhaCungCaps = NhaCungCap::all();
        return view('admins.editproduct', compact('sanPham', 'danhMucs', 'nhaCungCaps'));
    }
    
    
    public function update(Request $request, $id)
    {
        $sanPham = SanPham::find($id);
    
        if (!$sanPham) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm!');
        }
    
        // Cập nhật tất cả các trường được gửi từ biểu mẫu
        $sanPham->fill($request->all());
    
        // Xử lý và lưu ảnh đại diện nếu có
        if ($request->hasFile('HinhAnh')) {
            $imagePath = $request->file('HinhAnh')->store('Img');
            $sanPham->HinhAnh = $imagePath;
        } elseif (!$sanPham->HinhAnh) {
            // Nếu không có tệp mới được tải lên và không có ảnh hiện tại, giữ nguyên ảnh cũ
            $sanPham->HinhAnh = $sanPham->getOriginal('HinhAnh');
        }
    
        // Lưu các thay đổi vào cơ sở dữ liệu
        $sanPham->save();
    
        // Chuyển hướng người dùng sau khi cập nhật sản phẩm
        return redirect('/sanpham')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }
    
    public function delete($MaSP)
{
    $sanPham = SanPham::findOrFail($MaSP);

    // Kiểm tra quyền truy cập ở đây nếu cần

    $sanPham->delete();

    return redirect()->back()->with('success', 'Sản phẩm đã được xóa thành công.');
}
}

