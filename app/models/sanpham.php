<?php
function updatesoluong($vitri)
{
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($i = $vitri) {
            $_SESSION['giohang'][$i]['soluong'] += 1;
        }
    }
}
function checktrungsp($id_san_pham)
{
    $vitri = -1;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i]['id_san_pham'] == $id_san_pham) {
            $vitri = $i;
        }
    }
    return $vitri;
}
function insert_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc)
{
    $sql = "insert into san_pham(`ten_san_pham`, `hinh`, `gia`, `giam_gia`, `mo_ta`, `so_luong`, `id_danh_muc`) 
    values('$ten_san_pham','$hinh','$gia','$giam_gia','$mo_ta','$so_luong','$id_danh_muc')";
    pdo_execute($sql);
}
function loadall_sanpham()
{
    $sql = "SELECT * FROM `san_pham` WHERE 1 order by id_san_pham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function capnhat_sl_sanpham($id,$sl)
{
    $sql = "update san_pham set so_luong= so_luong -'" . $sl . "' WHERE id_san_pham=".$id;
    pdo_execute($sql);
}
function loc_sanpham($kyw, $iddm)
{
    $sql = "select * from san_pham where 1";
    if ($kyw != "") {
        $sql .= " and ten_san_pham like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and id_danh_muc ='" . $iddm . "'";
    }
    $sql .= " order by id_san_pham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($tenloai)
{
    $sql = "delete from san_pham where id_san_pham=" . $tenloai;
    pdo_execute($sql);
}
function loadone_sanpham($id)
{
    $sql = "select * from san_pham where id_san_pham=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc, $id_san_pham)
{
    if ($hinh != "")
        $sql = "update san_pham set ten_san_pham='" . $ten_san_pham . "', hinh='" . $hinh . "', gia='" . $gia . "', giam_gia='" . $giam_gia . "', mo_ta='" . $mo_ta . "', so_luong='" . $so_luong . "' , id_danh_muc='" . $id_danh_muc . "' where id_san_pham=" . $id_san_pham;
    else
        $sql = "update san_pham set ten_san_pham='" . $ten_san_pham . "', gia='" . $gia . "', giam_gia='" . $giam_gia . "', mo_ta='" . $mo_ta . "', so_luong='" . $so_luong . "' , id_danh_muc='" . $id_danh_muc . "' where id_san_pham=" . $id_san_pham;
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql = "select * from san_pham where 1 order by id_san_pham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from san_pham where id_danh_muc=" . $iddm . " and id_san_pham <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function soluong_sanpham()
{
    $sql = "SELECT count(id_san_pham) as slsp FROM `san_pham` WHERE 1";
    $dm = pdo_query_one($sql);
    return $dm['slsp'];
}
