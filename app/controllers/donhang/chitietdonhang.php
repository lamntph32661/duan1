<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header">
          <h3 class="card-title">Chi tiết đơn hàng</h3>
          <div class="card-tools">
            
          </div>
        </div>
        <!-- /.card-header --><?php extract($loadtrangthai);
                              if ($trang_thai == "Chờ xác nhận") $s1 = "selected";
                              else $s1 = "";
                              if ($trang_thai == "Đang chuẩn bị hàng") $s2 = "selected";
                              else $s2 = "";
                              if ($trang_thai == "Đang giao") $s3 = "selected";
                              else $s3 = "";
                              if ($trang_thai == "Đã giao") $s4 = "selected";
                              else $s4 = "";

                              $th = ' <select name="trangthai"  class="form-control w-100">
            <option value="Chờ xác nhận" ' . $s1 . '>Chờ xác nhận</option>
              <option value="Đang chuẩn bị hàng" ' . $s2 . '>Đang chuẩn bị hàng</option>
              <option value="Đang giao" ' . $s3 . '>Đang giao</option>
              <option value="Đã giao" ' . $s4 . '>Đã giao</option>
              
          </select>'; ?>
        <div class="card-body table-responsive p-0" style="height: 500px;">



          <table class="table table-head-fixed text-nowrap">
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Giá</th>
              <th>Thành tiền</th>
            </tr>
            <tbody>
              <?php

              foreach ($load_ctdh as $donhang) {
                extract($donhang);
                echo '<tr>
                                <td>' . $id_san_pham . '</td>
                                <td>' . $ten_san_pham . '</td>
                                <td>' . $so_luong . '</td>
                                <td>$' . $gia . '</td>
                                <td>' . $thanh_tien . '</td>
                                
                                </tr>';
              }
              ?>


            </tbody>
          </table>
          <?php
          $capnhat1='
          <div class="form-group">
          <label for="exampleInputEmail1">Tên người nhận</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="' .$ten_nguoi_nhan .'" name="hoten">
        </div><div class="form-group">
              <label for="exampleInputEmail1">Số điện thoại nhận hàng</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="' .$sdt_nhan_hang .'" name="sdt">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Địa chỉ nhận hàng</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="'. $dia_chi_giao_hang .'" name="diachi">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Ghi chú</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="'. $ghi_chu .'" name="ghichu">
          </div><div class="form-group">
            <label for="">Trạng thái đơn hàng</label>
            '.$th.'   
            </div><input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">';
            $capnhat2='
            <input type="hidden" class="form-control" id="exampleInputEmail1" value="' .$ten_nguoi_nhan .'" name="hoten">
            <input type="hidden" class="form-control" id="exampleInputEmail1" value="' .$sdt_nhan_hang .'" name="sdt">
            <input type="hidden" class="form-control" id="exampleInputEmail1" value="'. $dia_chi_giao_hang .'" name="diachi">
            <input type="hidden" class="form-control" id="exampleInputEmail1" value="'. $ghi_chu .'" name="ghichu">
            <div class="form-group">
            <label for="exampleInputEmail1">Tên người nhận: ' .$ten_nguoi_nhan .'</label>
            
          </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại nhận hàng: ' .$sdt_nhan_hang .'</label>
            
          </div><div class="form-group">
          <label for="exampleInputEmail1">Địa chỉ nhận hàng: ' .$dia_chi_giao_hang .'</label>
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Ghi chú: ' .$ghi_chu .'</label>
          
        </div>
          <div class="form-group">
          <label for="">Trạng thái đơn hàng</label>
          '.$th.'   
          </div><input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">';
            $capnhat4='
            <div class="form-group">
            <label for="exampleInputEmail1">Tên người nhận: ' .$ten_nguoi_nhan .'</label>
            
          </div><div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại nhận hàng: ' .$sdt_nhan_hang .'</label>
            
          </div><div class="form-group">
          <label for="exampleInputEmail1">Địa chỉ nhận hàng: ' .$dia_chi_giao_hang .'</label>
          
        </div><div class="form-group">
        <label for="exampleInputEmail1">Trạng thái: ' .$trang_thai .'</label>
        
      </div>';
          ?>
          <form action="index.php?act=capnhatdonhang" method="post" class="ml-5">
            <br><input type="hidden" name="id" value="<?= $id_don_hang ?>">
            <?php
if($trang_thai=="Chờ xác nhận"||$trang_thai=="Đang chuẩn bị hàng") echo $capnhat1; else 
if($trang_thai=="Đang giao"||$trang_thai=="Đã nhận"||$trang_thai=="Đã hủy") echo $capnhat2; else echo $capnhat4;

            ?>

            
            
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</nav>