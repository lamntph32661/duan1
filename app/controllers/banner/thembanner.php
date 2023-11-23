
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100" style="height: 585px;">
    <div class="card-header">
      <h3 class="card-title">Thêm Banner</h3>
    </div>

        <form action="" method="post" enctype="multipart/form-data">
            <p><?php echo $err ?></p>
    <input type="text" name="acc" id="">
    <input type="text" name="pas" id="">
    <input type="file" name="url_image" id="">
    <button type="submit">gửi</button>
    <input class="btn btn-secondary" type="reset" value="Nhập lại">
        <a href="index.php?act=danhsachbanner" class="btn btn-success">Danh sách</a>
        </form>
  </div>
</nav>
