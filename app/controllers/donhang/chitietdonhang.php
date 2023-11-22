<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100"  style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách đơn hàng</h3>

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
          <form action="index.php?act=chitietdonhang" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <td>Tên sản phẩm</td>
                  <td>Khách hàng</td>
                  <td>Chi Tiết</td>
                  <td>Trạng thái</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>áo sơmi</td>
                  <td>Nguyễn Văn A</td>
                  <td><a href="index.php?act=xoadonhang"><button class="btn btn-danger">Xóa</button></a></td>
                  <td>Đang giao</td>
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
