
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100" style="height: 585px;">
    <div class="card-header">
      <h3 class="card-title">Thêm Banner</h3>
    </div>
    <form class="ml-5" action="index.php?act=thembanner" method="POST">
    <div class="card-body">
        <div class="form-group">
          <label for="banner">Tên banner</label>
          <input type="text" class="form-control" id="" placeholder="Nhập tên Banner" name="tenbanner">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Hình Banner</label>
          
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
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Thêm link" name="link" >
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="themmoi" value="Submit">
          <input class="btn btn-secondary" type="reset" value="Nhập lại">
          <a href="index.php?act=danhsachbanner" class="btn btn-success">Danh sách</a>
        </div>
    </form>
  </div>
</nav>
