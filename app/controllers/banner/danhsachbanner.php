<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100">
          <div class="col-12">
            <div class="card  card-primary">
              <div class="card-header">
                <h3 class="card-title">Danh sách Banner</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0"  style="height: 500px;">
                <form action="index.php?act=danhsachbanner" method="post">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên Banner</th>
                      <th>Hình ảnh</th>
                      <th>Link</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <?php
                    foreach ($listbanner as $banner) {
                     extract($banner);
                     echo '
                     <tr>
                      <td>'.$id_banner.'</td>
                      <td>'.$ten_banner.'</td>
                      <td><img src="/public/uploads/' . $hinh . '" alt="" height="80"></td>
                      <td>'.$link.'</td>
                      <td>
                      <a href="index.php?act=xoabanner&id_banner='.$id_banner.'">
                      <input  class="btn btn-danger" type="button" value="Xóa"  onclick="return confirm(\' Bạn có muốn xóa không\')"></a>
                <a href="index.php?act=capnhatbanner&id_banner='.$id_banner.'"><input  class="btn btn-success" type="button" value="cập nhật"></a>
            </td>
                    </tr>
                     ';
                    }
                  ?>
                    
                  </tbody>
                </table>

</form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div><a href="index.php?act=thembanner"><input  class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
        </div>
        <!-- /.row --></nav>