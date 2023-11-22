<?php
if(is_array($dm)){
    extract($dm);
}
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100"  style="height: 585px;">
    <div class="card-header">
      <h3 class="card-title">Cập nhật danh mục</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form  class="ml-5" action="index.php?act=updatedm " method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tên danh mục</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục" name="tendm"  value="<?=$ten_danh_muc?>">
        </div>
        <div class="card-footer">
        <input type="hidden" name="id" value="<?php if(isset($id_danh_muc)&&($id_danh_muc!="")) echo $id_danh_muc?>">
          <input type="submit" value="Submit" class="btn btn-primary" name="capnhat">
          <input class="btn btn-secondary" type="reset" value="Nhập lại">
          <a href="index.php?act=danhsachdanhmuc" class="btn btn-success">Danh sách</a>
        </div>
      </div>
    </form>
  </div>
</nav>