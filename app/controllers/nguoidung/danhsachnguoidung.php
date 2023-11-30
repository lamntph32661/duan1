<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100"  style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header"><div class="main-content">
    <div class="center">
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
                    
                    $xoanguoidung = "index.php?act=xoanguoidung&id=" . $id_nguoi_dung;
                    echo '<tr>
                        <th scope="row">' . $id_nguoi_dung . '</th>
                        <td>' . $username . '</td>
                        <td>' . $password . '</td>
                        <td>' . $ho_ten . '</td>
                        <td>' . $email . '</td>
                        <td>' . $sdt . '</td>
                        <td>' . $dia_chi . '</td>
                        <td>' . $role_id . '</td>
                        <td>
                        
                        <a href="' . $xoanguoidung . '"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="index.php?act=themtaikhoan"><button type="button" class="btn btn-primary">Thêm mới</button></a>
    </div>
