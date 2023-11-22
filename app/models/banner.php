<?php
function insert_banner($ten_banner, $hinh, $link){
    $sql="insert into banner(`ten_banner`, `hinh`, `link`) 
    values('$ten_banner','$hinh','$link')";
pdo_execute($sql);
}
function loadall_banner() {
    $sql="SELECT * FROM `banner` WHERE 1";
    $listbanner=pdo_query($sql);
    return $listbanner;
}
function delete_banner($tenloai){
    $sql="delete from banner where id_banner=".$tenloai;
    pdo_execute($sql);
}
function loadone_banner($id) {
    $sql="select * from banner where id_banner=".$id;
                       $banner= pdo_query_one($sql);
                       return $banner;
}
function update_banner($ten_banner, $hinh, $link, $id_banner){
    if($hinh!="")
    $sql="update banner set ten_banner='".$ten_banner."', hinh='".$hinh."', link='".$link."' where id_banner=".$id_banner;
    else 
    $sql="update banner set ten_banner='".$ten_banner."', hinh='".$hinh."', link='".$link."' where id_banner=".$id_banner;
                                pdo_execute($sql);
}
?>