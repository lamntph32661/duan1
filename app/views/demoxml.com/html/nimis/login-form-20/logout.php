<?php
session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pass'])){
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    unset($_SESSION['id_nguoi_dung']);
    header("location:/app/views/demoxml.com/html/nimis/index.php");
}
?>