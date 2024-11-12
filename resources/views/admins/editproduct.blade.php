@extends('adminlayout.adminhome')
@section('content')
<div class="menu-right">
<div class="form-edit">
    <div class="modal-edit">
    <div class="app-title">
                    <ul class="app-header-title">
                        <li class="header-title-item header-common "><b>Sửa sản phẩm</b></li>
                     </ul>
                   
                </div>
        <form action="{{ route('sanpham.update', $sanPham->MaSP) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="productname">Mã sản phẩm</label>
                <input type="text" class="form-control" name="MaSP" id="productid" value="{{ $sanPham->MaSP }}">
            </div>
            <div class="form-group">
                <label for="productname">Tên sản phẩm</label>
                <input type="text" class="form-control" name="TenSP" id="productname" value="{{ $sanPham->TenSP }}">
            </div>
            <div class="form-group">
                <label for="producPrice">Giá tiền</label>
                <input type="number" class="form-control" name="Gia" id="producPrice" value="{{ $sanPham->Gia }}">
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <input type="text" class="form-control" name="MoTa" id="description" value="{{ $sanPham->MoTa }}">
            </div>
            <div class="form-group">
                <label for="donViTinh">Đơn vị tính</label>
                <input type="text" class="form-control" name="DonViTinh" id="donViTinh" value="{{ $sanPham->DonViTinh }}">
            </div>
            <div class="form-group">
                <label class="control-label">Danh mục</label>
                <select class="form-control" name="MaDanhMuc" id="danhMuc">
                    <option value="">-- Chọn danh mục --</option>
                    @foreach ($danhMucs as $danhMuc)
                        <option value="{{ $danhMuc->MaDanhMuc }}" {{ $danhMuc->MaDanhMuc == $sanPham->MaDanhMuc ? 'selected' : '' }}>{{ $danhMuc->TenDanhMuc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Nhà cung cấp</label>
                <select class="form-control" name="MaNhaCC" id="nhaCungCap">
                    <option value="">-- Chọn nhà cung cấp --</option>
                    @foreach ($nhaCungCaps as $nhaCungCap)
                        <option value="{{ $nhaCungCap->MaNhaCC }}" {{ $nhaCungCap->MaNhaCC == $sanPham->MaNhaCC ? 'selected' : '' }}>{{ $nhaCungCap->TenNhaCC }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group file-input-container">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt"></i> Chọn ảnh
                </label>
                <input type="file" name="HinhAnh" id="file-upload" onchange="previewImage(event)">
                <img id="preview" alt="Ảnh sản phẩm" src="{{ asset('Img/'.$sanPham->HinhAnh) }}" style="max-width: 50px; max-height: 50px;">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalBtn">Đóng</button>
                <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
            </div>
        </form>
    </div>
</div>
</div>
<script>
    document.getElementById("closeModalBtn").onclick = function () {
        window.location.href = "/sanpham";
    };
</script>
@endsection
