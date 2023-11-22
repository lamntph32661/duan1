<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách tài khoản</h3>

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
          <form action="index.php?act=danhsachtaikhoan" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>

    <td>HỌ tên</td>
    <td>email</td>
    <td>Số điện thoại</td>
    <td>mật Khẩu</td>
    <td>Chức năng</td>

                </tr>
              </thead>
              <tbody>
              <tr>
    <td>quang</td>
    <td>email@gmail.com</td>
    <td>0499999944</td>
    <td>123445</td>
    <td><a href="index.php?act=themsanpham"><input class="btn btn-danger" type="button" value="Xóa" style="margin-left: 6px;"></a></td>
  </tr>
              </tbody>
            </table>

          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</nav>
