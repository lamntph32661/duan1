<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="row w-100">
        <div class="col-12">
            <div class="card  card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông tin tài khoản</h3>
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
                <?php
                if (is_array($onenguoidung))
                    extract($onenguoidung); ?>
                <div class="card-body table-responsive p-0" style="height: 500px;">
                    <form action="index.php?act=capnhatthongtin" method="post">
                        <ul>
                            <input type="hidden" name="id_nguoi_dung" value="<?= $id_nguoi_dung ?>">
                            <input type="text" name="username" value="<?= $username ?>">
                            <input type="text" name="password" value="<?= $password ?>">
                            <input type="text" name="ho_ten" value="<?= $ho_ten ?>">
                            <input type="text" name="email" value="<?= $email ?>">
                            <input type="text" name="sdt" value="<?= $sdt ?>">
                            <input type="text" name="dia_chi" value="<?= $dia_chi ?>">
                            <input type="hidden" name="role_id" value="<?= $role_id ?>">
                        </ul>
                        <input type="submit" value="Cập nhật" name="capnhat">
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- </div><a href="index.php?act=updatethongtin"><input class="btn btn-primary" type="button" value="Sửa thông tin" style="margin-left: 6px;"></a> -->
    </div>
    <!-- /.row -->
</nav>