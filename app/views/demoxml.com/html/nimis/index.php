<?php
include "C:\Users\PC TGDD\Desktop\duan1\app\models\connect.php";
include "C:\Users\PC TGDD\Desktop\duan1\app\models\pdo.php";
include "C:\Users\PC TGDD\Desktop\duan1\app\models\sanpham.php";
include "C:\Users\PC TGDD\Desktop\duan1\app\models\danhmuc.php";
include "\Users\PC TGDD\Desktop\duan1\app\models\banner.php";
$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home();
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "danhsachsanpham":
            include "sanpham.php";
            break;
        case "home":
            include "home.php";
        case "cart":
            include "cart.php";
            break;
        case "category-1":
            include "category-1";
            break;
        case "category-2":
            include "category-2.php";
            break;
        case "product-detail":
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                $id = $_GET['id_san_pham'];
                if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                    $id_danh_muc = $_GET['id_danh_muc'];
                } else {
                    $id_danh_muc = 0;
                }
                $onesp = loadone_sanpham($id);
                extract($onesp);
                  $sp_cung_loai=load_sanpham_cungloai($id,$id_danh_muc);
                include "product-detail.php";
            } else {
                //  include "view/home.php"; 
            }


            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                $id_danh_muc = $_GET['id_danh_muc'];
            } else {
                $id_danh_muc = 0;
            }
            $dssp = loc_sanpham($kyw, $id_danh_muc);
            //  $tendm = load_ten_dm($id_danh_muc);
            include "sanpham_loc.php";
            break;
        default:
            include 'home.php';

            break;
    }
} else {
    include 'home.php';
}
include "footer.php";
