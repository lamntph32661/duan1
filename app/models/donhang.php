<?php
function insert_donhang($id_nguoi_dung,$ten_nguoi_nhan, $ngay_dat_hang,$sdt_nhan_hang,$diachi,$tong_tien, $trang_thai, $ghi_chu)
{
    $sql = "INSERT INTO `don_hang`(`id_nguoi_dung`,`ten_nguoi_nhan`, `ngay_dat_hang`,`sdt_nhan_hang`,`dia_chi_giao_hang`, `tong_tien`, `trang_thai`, `ghi_chu`) 
    VALUES ('$id_nguoi_dung','$ten_nguoi_nhan','$ngay_dat_hang','$sdt_nhan_hang','$diachi','$tong_tien','$trang_thai','$ghi_chu')";
    pdo_execute($sql);
}
function loadall_donhang_chuanhan($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE trang_thai <> 'Đã nhận' <> trang_thai like 'Đã hủy' AND id_nguoi_dung =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function loadall_donhang_danhan_dahuy($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE trang_thai like 'Đã nhận' or trang_thai like 'Đã hủy' AND id_nguoi_dung =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function load_trangthai_donhang($id)
{
    $sql = "SELECT * FROM `don_hang` WHERE id_don_hang = ".$id;
    $dh = pdo_query_one($sql);
    return $dh;
}
function update_trangthai_donhang($id,$hoten,$trangthai,$ghichu,$diachi,$sdt)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='$trangthai' ,`ghi_chu`='$ghichu' ,`ten_nguoi_nhan`='$hoten' ,`sdt_nhan_hang`='$sdt', `dia_chi_giao_hang`='$diachi' where id_don_hang =".$id;
    pdo_execute($sql);
}
function nhanhang($id,$trangthai)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='$trangthai'  where id_don_hang =".$id;
    pdo_execute($sql);
}
function delete_donhang($id)
{
    $sql = "UPDATE `don_hang` SET `trang_thai`='Đã hủy' WHERE  id_don_hang =".$id;
    pdo_execute($sql);
}
function loadall_donhang_admin_chuanhan()
{
    $sql = "SELECT don_hang.id_don_hang,don_hang.ghi_chu,don_hang.ten_nguoi_nhan, nguoi_dung.ho_ten, don_hang.ngay_dat_hang, don_hang.tong_tien, don_hang.trang_thai
    FROM don_hang 
    JOIN nguoi_dung ON don_hang.id_nguoi_dung = nguoi_dung.id_nguoi_dung where don_hang.trang_thai <> 'Đã nhận' or don_hang.trang_thai <> 'Đã hủy'";
    $dh = pdo_query($sql);
    return $dh;
}
function loadall_donhang_admin_danhan()
{
    $sql = "SELECT don_hang.id_don_hang, nguoi_dung.ho_ten,don_hang.ten_nguoi_nhan, don_hang.ngay_dat_hang, don_hang.tong_tien, don_hang.trang_thai
    FROM don_hang 
    JOIN nguoi_dung ON don_hang.id_nguoi_dung = nguoi_dung.id_nguoi_dung where don_hang.trang_thai like 'Đã nhận' or don_hang.trang_thai like 'Đã hủy'";
    $dh = pdo_query($sql);
    return $dh;
}
function load_ctdh($id)
{
    $sql = "SELECT sp.id_san_pham, ctdh.so_luong, ctdh.id_don_hang, ctdh.gia, ctdh.thanh_tien, sp.ten_san_pham, sp.hinh, sp.giam_gia
    FROM ctdh
    JOIN san_pham sp ON ctdh.id_san_pham = sp.id_san_pham WHERE id_don_hang =".$id;
    $dh = pdo_query($sql);
    return $dh;
}
function insert_ctdh($id_ctdh, $id_don_hang, $id_san_pham, $so_luong, $gia, $thanh_tien)
{
    $sql = "INSERT INTO `ctdh`(`id_ctdh`,`id_don_hang`, `id_san_pham`, `so_luong`, `gia`, `thanh_tien`) 
    VALUES ('$id_ctdh','$id_don_hang','$id_san_pham','$so_luong','$gia','$thanh_tien')";
    pdo_execute($sql);
}
function loadidmax_donhang()
{
    $sql = "SELECT *
    FROM don_hang
    ORDER BY id_don_hang DESC
    LIMIT 1;";
    $dh = pdo_query_one($sql);
    return $dh;
}
function loadidmax_ctdh()
{
    $sql = "SELECT *
    FROM ctdh
    ORDER BY id_ctdh DESC
    LIMIT 1;";
    $dh = pdo_query_one($sql);
    return $dh;
}
