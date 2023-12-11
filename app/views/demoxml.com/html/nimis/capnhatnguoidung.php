<section class="breadcumb_top_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_top_box">
					<h2>information</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="breadcumb_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_box">
					<ul class="breadcumb">
						<li><a href="index.php">home <span>|</span></a></li>
						<li><a href="index.php?act=danhsachsanpham">Shop <span>|</span></a></li>
						<li class="active"><a href="#">information</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="main_cart_area">
	<div class="container">

<br><div class="d_table"><?php
    if (is_array($onenguoidung)) {
        extract($onenguoidung);
    }
?>

    <form action="index.php?act=updatenguoidung" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php if (isset($id_nguoi_dung) && ($id_nguoi_dung != "")) echo $id_nguoi_dung ;?>">
        <div class="mb-3">
            <label class="form-label">User name:</label>
            <input type="text" class="form-control" name="username" value="<?php if (isset($username) && ($username != "")) echo $username ;?>" >
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="text" class="form-control" name="password" value="<?php if (isset($password) && ($password != "")) echo $password ;?>" >
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Họ Tên:</label>
            <input type="text" class="form-control" name="hoten" value="<?php if (isset($ho_ten) && ($ho_ten != "")) echo $ho_ten ;?>" >
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php if (isset($email) && ($email != "")) echo $email ;?>" >
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Số điện thoại:</label>
            <input type="text" class="form-control" name="sdt" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ;?>" >
        </div><br>
        <div class="mb-3">
            <label class="form-label">Địa chỉ:</label>
            <input type="text" class="form-control" name="diachi" value="<?php if (isset($dia_chi) && ($dia_chi != "")) echo $dia_chi ;?>" >
        </div><br>
        
        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
        <a href="index.php?act=danhsachnguoidung"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </form>
    </div>

</div>
</section>