<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = array();
}
include "C:/Users/PC TGDD/Desktop/duan1/app/models/connect.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/pdo.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/sanpham.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/danhmuc.php";
include "/Users/PC TGDD/Desktop/duan1/app/models/banner.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/taikhoan.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/donhang.php";
$dsdm = loadall_danhmuc();
$listbanner = loadall_banner();
$spnew = loadall_sanpham_home();
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietdonhang":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $load_ctdh = load_ctdh($_GET['id']);
            }
            $ttdh=load_trangthai_donhang($_GET['id']);
            include "chitietdonhang.php";
            break;
        case "trangthaidonhang":
            if (isset($_SESSION['id_nguoi_dung']) ) 
            $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
        
            include "trangthaidonhang.php";

            break;
            case "capnhatdonhang":
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $trangthai = $_POST['trangthai'];
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $ghichu = $_POST['ghichu'];
                    $id = $_POST['id'];
                    update_trangthai_donhang($id,$hoten,$trangthai,$ghichu,$diachi,$sdt);
                }
                $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
                include "trangthaidonhang.php";
                break;
        case "lichsumuahang":
            $loadall_donhang = loadall_donhang_danhan_dahuy($_SESSION['id_nguoi_dung']);
            include "lichsumuahang.php";

            break;
        case "danhsachsanpham":
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
            include "category-1_loc.php";
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
            include "category-1_loc.php";
            break;
        case "home":
            include "home.php";
            break;
        case "huydonhang":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }
            $loadall_donhang = loadall_donhang_chuanhan($_SESSION['id_nguoi_dung']);
            include "trangthaidonhang.php";
            break;
            case "mualai":
                if (isset($_POST['mualai']) && ($_POST['mualai'])) {
                    $id_san_pham = $_POST['id_san_pham'];
                    $ten_san_pham = $_POST['ten_san_pham'];
                    $hinh = $_POST['hinh'];
                    $linksp = $_POST['linksp'];
                    $giam_gia = $_POST['giam_gia'];
                    if (isset($_POST['sl']) && $_POST['sl'] > 0) {
                        $sl = $_POST['sl'];
                    } else {
                        $sl = 1;
                    }
    
                    $fg = 0;
    
                    $i = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        if ($item[1] == $ten_san_pham) {
                            $slnew = $sl + $item[5];
                            $_SESSION['giohang'][$i][5] = $slnew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }
                    if ($fg == 0) {
                        $item = array($id_san_pham, $ten_san_pham, $hinh, $linksp, $giam_gia, $sl);
                        array_unshift($_SESSION['giohang'], $item);
                    }
                }
                header("location:index.php?act=viewcart&thongbao=" . $thongbao);
                break;
        case "checkout":
            $err = "";
            if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $ten_nguoi_nhan = $_POST['hoten'];
                $_SESSION['id_nguoi_dung']=$_POST['id_nguoi_dung'];
                $ngay_dat_hang = date('d/m/Y');
                $trang_thai = "Chờ xác nhận";
                $diachi = $_POST['diachi'];
                $sdt_nhan_hang = $_POST['sdt'];
                $tong_tien = $_POST['tongtien'];
                $ghi_chu = $_POST['ghichu'];
                insert_donhang($id_nguoi_dung,$ten_nguoi_nhan, $ngay_dat_hang, $sdt_nhan_hang, $diachi, $tong_tien, $trang_thai, $ghi_chu);
                $idctdh = loadidmax_ctdh();
                $id_ctdh = $idctdh['id_ctdh'] + 1;
                $err = $idctdh['id_ctdh'] + 1;
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    $dh = loadidmax_donhang();
                    capnhat_sl_sanpham($_SESSION['giohang'][$i][0],$_SESSION['giohang'][$i][5]);
                    insert_ctdh($id_ctdh, $dh['id_don_hang'], $_SESSION['giohang'][$i][0], $_SESSION['giohang'][$i][5], $_SESSION['giohang'][$i][4], ($_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]));
                }
                unset($_SESSION['giohang']);
                header("location:index.php?act=trangthaidonhang");
            }
            $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include "checkout.php";
            break;
        case "del":
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                if (isset($_SESSION['giohang']))
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }

            if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                include "viewcart.php";
            } else
                include "home.php";
            break;
        case "addtocart":
            if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                $id_san_pham = $_POST['id_san_pham'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $hinh = $_POST['hinh'];
                $linksp = $_POST['linksp'];
                $giam_gia = $_POST['giam_gia'];
                if (isset($_POST['sl']) && $_POST['sl'] > 0) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }

                $fg = 0;

                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] == $ten_san_pham) {
                        $slnew = $sl + $item[5];
                        $_SESSION['giohang'][$i][5] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                if ($fg == 0) {
                    $item = array($id_san_pham, $ten_san_pham, $hinh, $linksp, $giam_gia, $sl);
                    array_unshift($_SESSION['giohang'], $item);
                }
            }
            header("location:index.php?act=viewcart&thongbao=" . $thongbao);

        case "viewcart":
            if (isset($_GET['thongbao'])) {
                $thongbao = $_GET['thongbao'];
            }
            include "viewcart.php";
            break;
        case "danhan":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $trangthai = "Đã nhận";
                nhanhang($id, $trangthai);
            }
            include "cart.php";
            break;
        case "cart":
            include "cart.php";
            break;
        case "category-1_loc":
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
            include "category-1_loc.php";
            break;
            // case "category-2":
            //     include "category-2.php";
            //     break;
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
                $sp_cung_loai = load_sanpham_cungloai($id, $id_danh_muc);
                include "product-detail.php";
            } else {
                //  include "view/home.php"; 
            }


            break;

        default:
            include 'home.php';

            break;
    }
} else {
    include 'home.php';
}
include "footer.php";
