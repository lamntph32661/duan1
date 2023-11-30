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
                if(is_array($onenguoidung))
                extract($onenguoidung); ?>
                <div class="card-body table-responsive p-0" style="height: 500px;">
                    <form action="index.php?act=thongtincanhan" method="post">
                        <ul>
                            <li>Username: <?=$username?></li>
                            <li>Password: <?=$password?></li>
                            <li>Họ Tên: <?=$ho_ten?></li>
                            <li>Email: <?=$email?></li>
                            <li>Số điện thoại: <?=$sdt?></li>
                            <li>Địa chỉ: <?=$dia_chi?></li>
                        </ul>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><a href="index.php?act=updatethongtin&id_nguoi_dung=<?=$id_nguoi_dung?>"><input class="btn btn-primary" type="button" value="Sửa thông tin" style="margin-left: 6px;"></a>
    </div>
    <!-- /.row -->
</nav>