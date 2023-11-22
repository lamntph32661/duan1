<?php
if(is_array($banner)){
    extract($banner);
}
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100"  style="height: 585px;">
    <div class="card-header">
      <h3 class="card-title">Cập nhật Banner</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form  class="ml-5" action="index.php?act=updatebanner " method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tên Banner</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên Banner" name="tenbanner"  value="<?=$ten_banner?>">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Hình Banner</label>
          <img src="/public/assets/uploads/<?=$hinh?>" alt="" height="80">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Link</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Thêm link" name="link" value="<?=$link?>">
        </div>
        <div class="card-footer">
        <input type="hidden" name="id" value="<?php if(isset($id_banner)&&($id_banner!="")) echo $id_banner?>">
          <input type="submit" value="Submit" class="btn btn-primary" name="capnhat">
          <input class="btn btn-secondary" type="reset" value="Nhập lại">
          <a href="index.php?act=danhsachbanner" class="btn btn-success">Danh sách</a>
        </div>
      </div>
    </form>
  </div>
</nav>