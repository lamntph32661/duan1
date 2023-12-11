<?php
function loadall_binhluan($id)
{
    $sql = "SELECT * FROM `binh_luan` WHERE id_san_pham = ".$id; $sql.=" order by id_binh_luan desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function loadall_binhluan_admin()
{
    $sql = "SELECT * FROM `binh_luan` ";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function insert_binhluan($id_san_pham, $loai_danh_gia, $noi_dung, $id_khach_hang, $ngay_binh_luan)
{
    $sql = "INSERT INTO `binh_luan`(`id_san_pham`, `loai_danh_gia`, `noi_dung`, `id_nguoi_dung`, `ngay_binh_luan`) 
    VALUES ('$id_san_pham','$loai_danh_gia','$noi_dung','$id_khach_hang','$ngay_binh_luan')";
    pdo_execute($sql);
}
function xoa_binhluan($id_binh_luan)
{
    $sql = "delete from binh_luan where id_binh_luan=".$id_binh_luan;
    pdo_execute($sql);
}
function check_binhluan()
{
    $sql = "SELECT ctdh.id_don_hang, ctdh.id_ctdh, don_hang.id_nguoi_dung
    FROM ctdh 
    JOIN don_hang ON don_hang.id_don_hang = ctdh.id_don_hang ";
    $checkbinhluan = pdo_query($sql);
    return $checkbinhluan;
}
?>