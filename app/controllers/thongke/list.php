<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Thống kê</h3>
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
          
            <table class="table table-head-fixed text-nowrap">
            <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                    foreach ($listthongke as $tk) {
                        extract($tk);
                        echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxprice.'</td>
                    <td>'.$minprice.'</td>
                    <td>'.$avgprice.'</td>
                </tr>';
                    }
                ?> 
            </table>
            <div class="row">
         

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <a href="index.php?act=bieudo"><input class="btn btn-primary" type="button" value="Xem biểu đồ" style="margin-left: 6px;"></a>
  </div>
  <!-- /.row -->
</nav>

