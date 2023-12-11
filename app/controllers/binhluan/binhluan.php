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
          
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Sản phẩm</td>
                  <td>loại đánh giá</td>
                  <td>Nội dung</td>
                  <td>Ngày bình luận</td>
                  <td>Chức năng</td>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $a = "";
												if ($binhluan['loai_danh_gia'] == 1) $a = "Rất tệ";
												if ($binhluan['loai_danh_gia'] == 2) $a = "Tệ";
												if ($binhluan['loai_danh_gia'] == 3) $a = "Không hài lòng";
												if ($binhluan['loai_danh_gia'] == 4) $a = "Hài lòng";
												if ($binhluan['loai_danh_gia'] == 5) $a = "Rất hài lòng";
                    echo '<tr>
                  <td>'.$id_binh_luan.'</td>
                  <td>'.$id_san_pham.'</td>
                  <td>'.$a.'</td>
                  <td><span style="height: 300px;width: 90px;">'.$noi_dung.'</span></td>
                  <td>'.$ngay_binh_luan.'</td>
                  <td><a href="index.php?act=xoabl&id_binh_luan='.$id_binh_luan.'"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>';
                  }
                ?>
                
              </tbody>
            </table>

          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</nav>