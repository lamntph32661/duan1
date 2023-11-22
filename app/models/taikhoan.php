<?php
function checkuser($user, $pass)
{
    $sql = "select * from nguoi_dung where username='" . $user . "' and password ='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
