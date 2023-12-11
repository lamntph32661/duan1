<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="card card-primary w-100">
    <div class="card-header">
      <h3 class="card-title">Thêm tài khoản</h3>
    </div>
        <form class="ml-5" action="index.php?act=themtaikhoan" method="POST">
            <div class="mb-3">
                <label class="form-label">User name: </label>
                <input type="text" class="form-control w-50 p-3" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password: </label>
                <input type="text" class="form-control w-50 p-3" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Họ và tên: </label>
                <input type="text" class="form-control w-50 p-3" name="hoten" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control w-50 p-3" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control w-50 p-3" name="sdt" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control w-50 p-3" name="diachi" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phân quyền:</label>
                <select name="role_id" id="">
                    <?php foreach ($loadroles as $role) {
                        extract($role);
                        echo '<option value="' . $id_role . '">' . $role_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="button" class="btn btn-success"><a class="text-light" href="index.php?act=danhsachnguoidung">Danh sách tài Khoản</a></button>
            <input type="submit" class="btn btn-primary" value="Thêm mới" name="themmoi">


        </form>
    </div>
</nav>