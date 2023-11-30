
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100" style="height: 585px;">
    <div class="card-header">
      <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <form class="ml-5" action="index.php?act=themdanhmuc" method="POST">
    <div class="card-body">
        <div class="form-group">
          <label for="danhmuc">Tên danh mục</label>
          <input type="text" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục" name="tendm">
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="themmoi" value="Submit">
          <input class="btn btn-secondary" type="reset" value="Nhập lại">
          <a href="index.php?act=danhsachdanhmuc" class="btn btn-success">Danh sách</a>
        </div>
    </form>
    <?php

    ?>
  </div>
</nav>
