
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
            
            <!-- /.card -->
        <a href="index.php?act=updatethongtin&id_nguoi_dung=<?=$id_nguoi_dung?>"><input class="btn btn-primary" type="button" value="Sửa thông tin" style="margin-left: 6px;"></a>
    