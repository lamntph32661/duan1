<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách tài khoản</h3>
          <div class="card-tools">
          
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Người Dùng</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sđt</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listnguoidung as $nguoi_dung) {
                    extract($nguoi_dung);
                    $role1="";
                    foreach ($loadall_role as $role) {
                        if($role['id_role']==$nguoi_dung['role_id'])$role1=$role['role_name'];
                    }
                    $xoanguoidung = "index.php?act=xoanguoidung&id=" . $id_nguoi_dung;
                    echo '<tr>
                        <th scope="row">' . $id_nguoi_dung . '</th>
                        <td>' . $username . '</td>
                        <td>' . $password . '</td>
                        <td>' . $ho_ten . '</td>
                        <td>' . $email . '</td>
                        <td>' . $sdt . '</td>
                        <td>' . $dia_chi . '</td>
                        <td>' . $role1 . '</td>
                        <td>
                        
                        <a href="' . $xoanguoidung . '"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>        <a href="index.php?act=themtaikhoan"><button type="button" class="btn btn-primary">Thêm mới</button></a>
  </div>
  <!-- /.row -->
</nav>