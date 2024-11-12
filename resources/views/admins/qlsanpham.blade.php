@extends('adminlayout.adminhome')
@section('content')
<div class="menu-right">
                <div class="app-title">
                    <ul class="app-header-title">
                        <li class="header-title-item header-common "><b>Danh sách sản phẩm</b></li>
                     </ul>
                   
                </div>
                <div class="row-element-button">
                  <div class="row-button">
                    <div class="button-elemet">
                    <button type="button"  id="AddSanPham"><i class="fa-solid fa-plus"></i> Tạo mới sản phẩm</button>
                    </div>
                    <div class="button-elemet-delete">
                      <button type="button"  id="DeleteSanPham"><i class="fa-solid fa-trash"></i> Xóa nhiều</button>
                      </div>
                  </div>
                  <div class="row-search-element">
                    <label for="">Tìm kiếm:</label>
                    <input type="search" class="from-control-search" ng-model="productNameSearch">
                    <button ng-click ="searchProduct()"><i class="fa-solid fa-magnifying-glass icon-search"></i></button>
                  </div>
                </div>
                <div id="overlay" class="overlay"></div>
                <div class="modal-container" id="myModal">
    <div class="modal-body">
        <div class="modal-header">
            <h5 class="modal-title">Thêm sản phẩm</h5>
        </div>
        <form id="myModalForm" action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="productname">Tên sản phẩm</label>
                <input type="text" class="form-control" name="productname" id="productname" value="{{ old('productname') }}">
            </div>
            <div class="form-group">
                <label for="producPrice">Giá tiền</label>
                <input type="number" class="form-control" name="producPrice" id="producPrice" value="{{ old('producPrice') }}">
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="donViTinh">Đơn vị tính</label>
                <input type="text" class="form-control" name="donViTinh" id="donViTinh" value="{{ old('donViTinh') }}">
            </div>
            <div class="form-group">
              <label class="control-label">Danh mục</label>
              <select class="form-control" name="danhMuc" id="danhMuc">
                  <option value="">-- Chọn danh mục --</option>
                  @foreach ($danhMucs as $danhMuc)
                      <option value="{{ $danhMuc->MaDanhMuc}}">{{ $danhMuc->TenDanhMuc }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label class="control-label">Nhà cung cấp</label>
              <select class="form-control" name="nhaCungCap" id="nhaCungCap">
                  <option value="">-- Chọn nhà cung cấp --</option>
                  @foreach ($nhaCungCaps as $nhaCungCap)
                      <option value="{{ $nhaCungCap->MaNhaCC }}">{{ $nhaCungCap->TenNhaCC }}</option>
                  @endforeach
              </select>
          </div>

            <div class="form-group file-input-container">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt"></i> Chọn ảnh
                </label>
                <input type="file" name="file-upload" id="file-upload" onchange="previewImage(event)">
                <img id="preview" alt="Ảnh sản phẩm" style="max-width: 50px; max-height: 50px;">
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalBtn">Đóng</button>
        <button type="submit" class="btn btn-primary" form="myModalForm">Thêm sản phẩm</button>
    </div>
</div>
<input type="hidden" id="successMessage" value="{{ session('success') }}">
<div class="product-right-element">
    <form action="{{ route('sanpham.store') }}" method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá</th>
                    <th>Danh mục</th>
                    <th>Nhà cung cấp</th>
                    <th>Chức năng</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sanPhams as $sanPham)
                <tr>
                    <td>{{ $sanPham->MaSP }}</td>
                    <td>{{ $sanPham->TenSP }}</td>
                    <td>
                        <img style="width: 70px; height: 60px" src="{{ asset('Img/' . $sanPham->HinhAnh) }}" alt="">
                    </td>
                    <td>{{ number_format($sanPham->Gia, 0, ',', ',') }}đ</td>
                    <td>{{ $sanPham->danhMuc ? $sanPham->danhMuc->TenDanhMuc : 'Không có danh mục' }}</td>
                    <td>{{ $sanPham->nhaCungCap ? $sanPham->nhaCungCap->TenNhaCC : 'Không có nhà cung cấp' }}</td>
                    <td>
                    <a href="{{ route('admin.editproduct', ['MaSP' => $sanPham->MaSP]) }}" class="edit-button" title="Sửa">Sửa</a>
                    <a href="{{ route('sanpham.delete', ['MaSP' => $sanPham->MaSP]) }}" class="delete-button" title="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">Xóa</a>
                    </td>
                    <td><input type="checkbox" name="productCheckbox"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

                   <!-- Modal sửa -->
<div id="overlay-update" class="overlay-update"></div>
<div class="modal-container-Update" id="my-update">
    <div class="modal-body">
        <div class="modal-header">
            <h5 class="modal-title">
                Sửa sản phẩm
            </h5>
        </div>
        <form>
            <div class="form-group">
                <input id="maSP_update" ng-model="maSP" type="hidden" />
                <label for="">Tên sản phẩm</label>
                <input ng-model="tenSP" id="tenSP_update" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Giá tiền</label>
                <input ng-model="gia" id="gia_update" type="number" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input ng-model="mota" type="text" class="form-control" id="mota_update" />
            </div>
            <div class="form-group">
              <label for="">Đơn vị tính</label>
              <input
                type="text"
                class="form-control"
                ng-model="donViTinh" 
                name="donViTinh" 
              />
            </div>
            <div class="form-group">
              <label for="">Lượt xem</label>
              <input ng-model="luotXem" type="text" class="form-control" id="luotXem_update" />
          </div>
            <div class="form-group">
              <input ng-model="ngaySanXuat" type="date" class="form-control" id="nsx_update" />
          </div>
            <div class="form-group">
                <label class="control-label">Danh mục</label>
                <select ng-model="maDanhMuc">
                    <option>-- Chọn danh mục --</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Nhà cung cấp</label>
                <select ng-model="maNhaCC">
                    <option>-- Chọn nhà cung cấp --</option>
                </select>
            </div>
            <div class="form-group file-input-container">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt"></i> Chọn ảnh
                </label>
                <input type="file" name="file-upload" id="file-upload" />
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalBtn-update">
            Đóng
        </button>
        <button ng-click="updateProduct()" type="button" class="btn btn-primary">
            Lưu lại
        </button>
    </div>
</div>
                  <!-- <div id="confirmDelete" class="confirmation">
                    <p>Bạn có chắc muốn xóa sản phẩm này?</p>
                    <button id="confirmButton" class="confirm-button" ng-click="deleteProduct(x.maSanPham)">Xác nhận</button>
                    <button id="cancelButton" class="cancel-button">Hủy bỏ</button>
                </div> -->
                <ul class = "pageul">
                  <!-- <li  class = "pageli"><a href=""><i class="fa-solid fa-chevron-left"></i></a></li> -->
                  <div class="pageElement">
                      <li class="page-item" ><a href="">1</a></li>
                  </div>
                  <li  class = "pageli"><a href=""><i class="fa-solid fa-chevron-right"></i></a></li>
              </ul>
            </div>
            <script>
    function deleteProduct(productId) {
        if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
            $.ajax({
                type: 'DELETE',
                url: '/sanpham/' + productId + '/delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    alert(data.message); // Hiển thị thông báo thành công
                    // Xóa sản phẩm khỏi DOM
                    $('#product-' + productId).remove();
                },
                error: function (data) {
                    console.log('Error:', data);
                    alert("Đã xảy ra lỗi! Vui lòng thử lại sau."); // Hiển thị thông báo lỗi
                }
            });
        }
    }
</script>

@endsection
