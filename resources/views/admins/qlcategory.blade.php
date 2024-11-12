@extends('adminlayout.adminhome')
@section('content')
<div class="menu-right">
                <div class="app-title">
                    <ul class="app-header-title">
                        <li class="header-title-item header-common "><b>Danh sách danh mục</b></li>
                     </ul>
                     <div id="clock" class="header-common"></div>
                </div>
                <div class="row-element-button">
                  <div class="row-button">
                    <div class="button-elemet">
                    <button type="button"  id="AddSanPham"><i class="fa-solid fa-plus"></i> Tạo mới danh mục</button>
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
                      <h5 class="modal-title">
                        Thêm danh mục
                      </h5>
                    </div>
                    <form>
                      <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input
                          type="text"
                          class="form-control"
                          ng-model="categoryname_val" 
                          name="categoryname" 
                        />
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                      id="closeModalBtn"
                    >
                      Đóng
                    </button>
                    <button
                      ng-click="addCategory()"
                      type="button"
                      class="btn btn-primary"
                    >
                      Thêm danh mục
                    </button>
                  </div>
                </div>                  
                <div class="product-right-element">
                    <form action="">
                      <table>
                        <thead>
                          <tr >
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Chức năng</th>
                            <th>Chọn</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach($danhMucs as $danhMuc)
                     <tr>
                    <td>{{ $danhMuc->MaDanhMuc }}</td>
                    <td>{{ $danhMuc->TenDanhMuc }}</td>
                    <td>
                        <button class="edit-button" title="Sửa" type="button">Sửa</button>
                        <button class="delete-button" title="Xóa" type="button">Xóa</button>
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
                Sửa danh mục
            </h5>
        </div>
        <form>
            <div class="form-group">
                <input id="maDanhMuc_update" ng-model="maDanhMuc" type="hidden" />
                <label for="">Tên danh mục</label>
                <input ng-model="tenDanhMuc" id="tenDanhMuc_update" type="text" class="form-control" />
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalBtn-update">
            Đóng
        </button>
        <button ng-click="updateCategory()" type="button" class="btn btn-primary">
            Lưu lại
        </button>
    </div>
</div>
                  <!-- <div id="confirmDelete" class="confirmation">
                    <p>Bạn có chắc muốn xóa sản phẩm này?</p>
                    <button id="confirmButton" class="confirm-button" ng-click="deleteProduct(x.maSanPham)">Xác nhận</button>
                    <button id="cancelButton" class="cancel-button">Hủy bỏ</button>
                </div> -->
                  <div class="pagination">
                    <span>Trang:</span>
                    <a href="#">1</a>
                    <a href="#">2</a>
                        <a style="font-size: 15px;" class="page-link" href="#">></a>
                    <a href="#">3</a>
                    <a style="font-size: 15px;" class="page-link" href="#">...</a>
                </div>
            </div>
  @endsection