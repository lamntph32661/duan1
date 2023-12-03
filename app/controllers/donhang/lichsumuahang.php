<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header">
          <h3 class="card-title">Lịch sử đơn hàng</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
            

            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <form action="index.php?act=danhsachdonhang" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <td>Mã đơn hàng</td>
                  <td>Người nhận</td>
                  <td>Ngày đặt hàng</td>
                  <td>Tổng tiền</td>
                  <td>Trạng thái</td>
                  <td>Chức năng</td>
                </tr>
              </thead>
              <tbody>
                <?php
                
                foreach (array_reverse($loadall_donhang) as $dh) {
                  extract($dh);
                  if ($trang_thai == "chờ xác nhận") $s1 = "selected";
                  else $s1 = "";
                  if ($trang_thai == "đang chuẩn bị hàng") $s2 = "selected";
                  else $s2 = "";
                  if ($trang_thai == "đang giao") $s3 = "selected";
                  else $s3 = "";
                  if ($trang_thai == "đã giao") $s4 = "selected";
                  else $s4 = "";
                  if ($trang_thai == "đã nhận") $s5 = "selected";
                  else $s5 = "";

                  echo '<tr>
                  <td>' . $id_don_hang . '</td>
                  <td>' . $ten_nguoi_nhan . '</td>
                  <td>' . $ngay_dat_hang . '</td>
                  <td>' . $tong_tien . '</td>
                  <td>
'.$trang_thai.'
  </td>
                  <td><a href="index.php?act=chitietdonhang&id='.$id_don_hang.'"><input class="btn btn-info" type="button" value="Chi tiết"></a></td>
                </tr>';
                }
                ?>

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