<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100"  style="height: 595px;">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách bình luận</h3>

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
          <form action="index.php?act=binhluan" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <td>Họ tên</td>
                  <td>email</td>
                  <td>Ảnh</td>
                  <td>Nội dung bình luận</td>
                  <td>Ngày đăng</td>
                  <td>Chức năng</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>quang</td>
                  <td>email@gmail.com</td>
                  <td><img src="https://picsum.photos/100" alt=""></td>
                  <td>Sản phẩm đẹp</td>
                  <td>5-11-2023</td>
                  <td><button class="btn btn-danger">Xóa</button></td>
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