<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="row w-100"  style="height: 595px;">
    <div class="col-12">
      <div class="card  card-primary">
        <div class="card-header"><?php
    if (is_array($onenguoidung)) {
        extract($onenguoidung);
    }
?>
<div class="main-content">
    <h1 class="fw-bolder">Sửa Người Dùng</h1>
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
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Role</label>
            <select class="form-select" name="role">
                <option value="0" <?php echo ($role_id == 0) ? "selected" : ""?>>Admin</option>
                <option value="1" <?php echo ($role_id == 1) ? "selected" : ""?>>User</option>
                
            </select>
        </div><br>
        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
        <a href="index.php?act=danhsachnguoidung"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </form>