<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách sản phẩm</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <form action="index.php?act=danhsachsanpham" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Hình</th>
                  <th>Giá</th>
                  <th>Giảm giá</th>
                  <th>Mô tả</th>
                  <th>Số lượng</th>
                  <th>Danh mục</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($listsanpham as $sanpham) {
                  extract($sanpham);
                  $suasp = "index.php?act=capnhatsp&id_san_pham=" . $id_san_pham;
                  $xoasp = "index.php?act=xoasp&id_san_pham=" . $id_san_pham;
                  $hinhpath = "/public/assets/uploads/" . $hinh;
                  if (is_file($hinhpath)) {
                    $img = "<img src='" . $hinhpath . "' height='80'>";
                  } else {
                    $img = "no photo";
                  }
                  echo '<tr>
    <td>' . $id_san_pham . '</td>
    <td>' . $ten_san_pham . '</td>
    <td><img src="/public/assets/uploads/' . $hinh . '" alt="" height="80"></td>
    <td>' . $gia . '</td>
    <td>' . $giam_gia . '</td>
    <td>' . $mo_ta . '</td>
    <td>' . $so_luong . '</td>
    <td>' . $id_danh_muc . '</td>

    <td><a href="' . $suasp . '" ><input type="button" class="btn btn-success" value="Sửa"></a>
    <a href="' . $xoasp . '"><input type="button" class="btn btn-danger" value="Xóa"></a>
    </tr>';
                }
                ?>
                <img src="" alt="">
              </tbody>
            </table>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div><a href="index.php?act=themsanpham"><input class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
  </div>
  <!-- /.row -->
</nav>