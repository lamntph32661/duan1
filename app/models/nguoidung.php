<?php
    function update_nguoi_dung($id_nguoi_dung,$username,$password,$ho_ten,$email,$sdt,$dia_chi,$role_id){
        $sql=  "UPDATE `nguoi_dung` SET `username` = '$username', `password` = '$password', 
        `ho_ten` = '$ho_ten', `email` = '$email', `sdt` = '$sdt', `dia_chi` = '$dia_chi', 
        `role_id` = '$role_id' WHERE `nguoi_dung`.`id_nguoi_dung` = $id_nguoi_dung";
        pdo_execute($sql);
    }
    function insert_nguoi_dung($username,$password,$ho_ten,$email,$sdt,$dia_chi,$role_id){
        $sql=  "INSERT INTO `nguoi_dung`(`username`, `password`, `ho_ten`, `email`, `sdt`, `dia_chi`, `role_id`) 
        VALUES ('$username','$password','$ho_ten','$email','$sdt','$dia_chi','$role_id')";
        pdo_execute($sql);
    }
    function loadall_nguoi_dung(){
        $sql="SELECT * FROM `nguoi_dung` WHERE 1";
        $listnguoidung=pdo_query($sql);
        return  $listnguoidung;
    }

    function loadone_nguoi_dung($id_nguoi_dung){
        $sql = "select * from nguoi_dung where id_nguoi_dung = $id_nguoi_dung";
        $nd = pdo_query_one($sql);
        return $nd;
    }

    function delete_nguoi_dung($id_nguoi_dung){
        $sql = "delete from nguoi_dung where id_nguoi_dung=".$id_nguoi_dung;
        pdo_execute($sql);
    }
    function loadall_roles(){
        $sql = "select * from role where 1";
        $loadroles=pdo_query($sql);
        return  $loadroles;
    }
?>