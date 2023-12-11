<?php
function checkuser($user, $pass)
{
    $sql = "select * from nguoi_dung where username='" . $user . "' and password ='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loaduser($id)
{
    $sql = "select * from nguoi_dung where id_nguoi_dung=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_roles_user()
{
    $sql = "select * from role where 1";
    $sp = pdo_query($sql);
    return $sp;
}