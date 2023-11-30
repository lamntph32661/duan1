<?php
function insert_danhmuc($tenloai)
{
    $sql = "insert into danh_muc(ten_danh_muc) values('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danh_muc where 1 order by ten_danh_muc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function count_danhmuc()
{
    $sql = "select count(id_danh_muc) from danh_muc order by ten_danh_muc";
    $listdanhmuc = pdo_query_one($sql);
    return $listdanhmuc;
}
function delete_danhmuc($tenloai)
{
    $sql = "DELETE danh_muc, san_pham FROM danh_muc 
    LEFT JOIN san_pham ON danh_muc.id_danh_muc = san_pham.id_danh_muc WHERE danh_muc.id_danh_muc= ".$tenloai;
   // $sql = "delete from danh_muc where id_danh_muc=" . $tenloai;
    pdo_execute($sql);
}
function loadone_danhmuc($id_danh_muc)
{
    $sql = "select * from danh_muc where id_danh_muc=" . $id_danh_muc;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "update danh_muc set ten_danh_muc='" . $tenloai . "' where id_danh_muc=" . $id;
    pdo_execute($sql);
}
function loadall_thongke()
{
    $sql = "select danh_muc.id_danh_muc as madm,danh_muc.ten_danh_muc as tendm, 
    count(san_pham.id_san_pham) as countsp,count(danh_muc.id_danh_muc) as countdm, min(san_pham.gia) as minprice, 
    max(san_pham.gia) as maxprice, avg(san_pham.gia) as avgprice 
    from san_pham left join danh_muc on danh_muc.id_danh_muc=san_pham.id_danh_muc 
    group by danh_muc.id_danh_muc order by danh_muc.id_danh_muc desc";
    $listtk = pdo_query($sql);
    return $listtk;
}

function soluong_danhmuc()
{
    $sql = "SELECT count(id_danh_muc) as sldm FROM `danh_muc` WHERE 1";
    $dm = pdo_query_one($sql);
    return $dm['sldm'];
}
?>