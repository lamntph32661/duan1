<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100">
          <div class="col-12">
            <div class="card  card-primary">
              <div class="card-header">
                <h3 class="card-title">Danh sách danh mục</h3>
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0"  style="height: 500px;">
                <form action="index.php?act=danhsachdanhmuc" method="post">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                  
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <?php
                    foreach ($list as $danhmuc) {
                     extract($danhmuc);
                     echo '
                     <tr>
                      <td>'.$id_danh_muc.'</td>
                      <td>'.$ten_danh_muc.'</td>
                      <td>
                      <a href="index.php?act=xoadanhmuc&id_danh_muc='.$id_danh_muc.'">
                      <input  class="btn btn-success" type="button" value="Xóa"></a>
                <a href="index.php?act=capnhatdanhmuc&id_danh_muc='.$id_danh_muc.'"><input  class="btn btn-success" type="button" value="cập nhật"></a>
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
          </div><a href="index.php?act=themdanhmuc"><input  class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
        </div>
        <!-- /.row --></nav>