<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100">
    <div class="card-header">
      <h3 class="card-title">Thêm sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="ml-5" action="index.php?act=themsanpham " method="POST" enctype="multipart/form-data">
      <div class="card-body">
      <div class="form-group">
          <label for="exampleInputPassword1">Danh mục</label>
          <select name="iddm" id="" class="form-control w-100">
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              if ($sanpham['id_danh_muc']==$danhmuc['id_danh_muc']) $s = "selected";
              else $s = "";
              echo '<option value="' . $id_danh_muc . '" ' . $s . '>' . $ten_danh_muc . '</option>';
          }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tên sản phẩm</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm" name="tensp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Hình sản phẩm</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile" required>
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
          <!-- <input type="file" name="hinh" id=""> -->
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá gốc</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá gốc sản phẩm" name="giasp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá đã giảm</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá đã giảm sản phẩm" name="giamgiasp" required>
          <?=$errthemsp?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <textarea class="form-control" id="exampleInputPassword1" cols="10" rows="7" placeholder="Nhập mô tả sản phẩm" name="motasp" required></textarea>

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Số lượng</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập số lượng" name="soluong" required>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <input class="btn btn-success" type="submit" value="Thêm" name="themmoi">
        <input class="btn btn-danger" type="reset" value="Nhập lại">
        <a href="index.php?act=danhsachsanpham" class="btn btn-info">Danh sách</a>
      </div>
    </form>

  </div>
</nav>