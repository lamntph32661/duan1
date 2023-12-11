<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = array();
}
include "../models/connect.php";
include "../models/pdo.php";
include "../models/taikhoan.php";
include "../models/nguoidung.php";
include "../models/danhmuc.php";
include "../models/sanpham.php";
include "../models/banner.php";
include "../models/donhang.php";
include "../models/binhluan.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'themtaikhoan':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $role_id = $_POST['role_id'];
                insert_nguoi_dung($username, $password, $hoten, $email, $sdt, $diachi, $role_id);
            }
            $loadroles = loadall_roles();
            include "nguoidung/themtaikhoan.php";
            break;
        case "themdanhmuc":
            include "danhmuc/themdanhmuc.php";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "thêm thành công";
            } else {
                $thongbao = "Lỗi";
            }
            break;
        case "thembanner":
            $err = "";
            function checkinput($data)
            {
                $data = trim($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $target_dir = "C:/Users/PC TGDD/Desktop/duan1/public/uploads/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (empty($_POST['tenbanner']) || empty($_POST['link']) || empty($_FILES['hinh']['name']))
                    $err = 'vui long nhap';
                else {
                    $ten_banner = checkinput($_POST['tenbanner']);
                    $pas = checkinput($_POST['link']);
                    $url_image = $_FILES['hinh']['name'];
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                    insert_banner($ten_banner, $url_image, $pas);
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "banner/thembanner.php";
            break;
        case "danhsachbanner":
            $listbanner = loadall_banner();
            include "banner/danhsachbanner.php";
            break;
        case "xoabanner":
            if (isset($_GET['id_banner']) && ($_GET['id_banner'] > 0)) {
                delete_banner($_GET['id_banner']);
            }
            $listbanner = loadall_banner();
            include "banner/danhsachbanner.php";
            break;
        case "capnhatbanner":
            if (isset($_GET['id_banner']) && ($_GET['id_banner'] > 0)) {
                $listdanhmuc = loadall_danhmuc();
                $banner = loadone_banner($_GET['id_banner']);
            }
            include "banner/capnhatbanner.php";
            break;
        case 'updatebanner':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $target_dir = "C:/Users/PC TGDD/Desktop/duan1/public/uploads/";
                $target_file = $target_dir . basename($_FILES['hinh_new']['name']);
                $id_banner = $_POST['id_banner'];
                $ten_banner = $_POST['tenbanner'];
                $hinh = $_FILES['hinh_new']['name'];
                move_uploaded_file($_FILES["hinh_new"]["tmp_name"], $target_file);
                $link = $_POST['link'];
                update_banner($id_banner, $ten_banner, $hinh, $link);
                $thongbao = "cập nhật thành công";
            }
            $listbanner = loadall_banner();
            include "banner/danhsachbanner.php";
            break;
        case 'thongtincanhan':
            if (isset($_SESSION['user']) && isset($_SESSION['pass']))
                $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include("nguoidung/thongtincanhan.php");
            break;
        case 'updatethongtin':
            if (isset($_GET["id_nguoi_dung"]) && ($_GET["id_nguoi_dung"]))
                $onenguoidung = loaduser($_GET["id_nguoi_dung"]);
            include "taikhoan/capnhatthongtin.php";
            break;
        case 'capnhatthongtin':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $role_id = $_POST['role_id'];
                update_nguoi_dung($id_nguoi_dung, $username, $password, $ho_ten, $email, $sdt, $dia_chi, $role_id);
            }
            $onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
            include("nguoidung/thongtincanhan.php");
            break;
        case 'danhsachnguoidung':
            $loadall_role=loadall_roles_user();
            $listnguoidung = loadall_nguoi_dung();
            include("nguoidung/danhsachnguoidung.php");
            break;
        case 'suanguoidung':
            if (isset($_GET["id"]) && ($_GET["id"]))
                $onenguoidung = loadone_nguoi_dung($_GET["id"]);
            include("nguoidung/capnhatnguoidung.php");
            break;
        case 'updatenguoidung':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id_nguoi_dung = $_POST['id'];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $ho_ten = $_POST["hoten"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $dia_chi = $_POST["diachi"];
                $role_id = $_POST["role"];
                update_nguoi_dung($id_nguoi_dung, $username, $password, $ho_ten, $email, $sdt, $dia_chi, $role_id);
            }
            $listnguoidung = loadall_nguoi_dung();
            include("nguoidung/danhsachnguoidung.php");
            break;
        case 'xoanguoidung':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idnguoidung = $_GET["id"];
                delete_nguoi_dung($idnguoidung);
            }
            $listnguoidung = loadall_nguoi_dung();
            include("nguoidung/danhsachnguoidung.php");
            break;
            // case "home":
            //     // include "home.php";
            //     $listthongke = loadall_thongke();
            //     include "home.php";
            //     break;
        case "danhsachdanhmuc":
            $list = loadall_danhmuc();
            include "danhmuc/danhsachdanhmuc.php";
            break;
        case "xoadanhmuc":
            if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                delete_danhmuc($_GET['id_danh_muc']);
            }
            $list = loadall_danhmuc();
            include "danhmuc/danhsachdanhmuc.php";
            break;
        case "capnhatdanhmuc":
            if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_danh_muc']);
            }
            include "danhmuc/capnhatdanhmuc.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tendm'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $list = loadall_danhmuc();
            include "danhmuc/danhsachdanhmuc.php";
            break;

            break;
        case "themsanpham":
            $errthemsp = "";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if ($_POST['giasp'] < $_POST['giamgiasp']) {
                    $errthemsp = "Giá đã không được lớn hơn giá gốc";
                } else {
                    $id_danh_muc = $_POST['iddm'];
                    $ten_san_pham = $_POST['tensp'];
                    $gia = $_POST['giasp'];
                    $giam_gia = $_POST['giamgiasp'];
                    $so_luong = $_POST['soluong'];
                    $mo_ta = $_POST['motasp'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "C:/Users/PC TGDD/Desktop/duan1/public/uploads/";
                    $target_file = $target_dir . basename($hinh = $_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc);
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/themsanpham.php";
            break;
            // case "danhsachsanpham":
            //     $listsanpham = loadall_sanpham();
            //     include "sanpham/danhsachsanpham.php";
            //     break;
        case 'danhsachsanpham':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loc_sanpham($kyw, $iddm);
            include "sanpham/danhsachsanpham.php";
            break;
        
        case "xoasp":
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                delete_sanpham($_GET['id_san_pham']);
            }

            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loc_sanpham($kyw, $iddm);
            include "sanpham/danhsachsanpham.php";
            break;
        case "capnhatsp":$errthemsp = "";
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                $listdanhmuc = loadall_danhmuc();
                $sanpham = loadone_sanpham($_GET['id_san_pham']);
            }
            include "sanpham/capnhatsanpham.php";
            break;
        case 'capnhatsanpham':
            
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                if ($_POST['giasp'] < $_POST['giamgiasp']) {
                    $errthemsp = "Giá đã giảm phải nhỏ hơn giá gốc";
                    
                } else {
                $id_danh_muc = $_POST['iddm'];
                $id_san_pham = $_POST['id'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['giasp'];
                $giam_gia = $_POST['giamgiasp'];
                $mo_ta = $_POST['motasp'];
                $so_luong = $_POST['soluong'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "C:/Users/PC TGDD/Desktop/duan1/public/uploads/";
                $target_file = $target_dir . basename($hinh = $_FILES['hinh']['name']);
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                update_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc, $id_san_pham);
                $thongbao = "cập nhật thành công";
            }}

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/danhsachsanpham.php";

            break;
        case "danhsachtaikhoan":
            
            include "taikhoan/danhsachtaikhoan.php";
            break;
            // case "updatetrangthai":
            //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            //         $id=$_POST['id'];
            //         $trangthai=$_POST['trangthai'];

            //         update_trangthai_donhang($id,$trangthai);
            //     }
            //     include "donhang/danhsachdonhang.php";
            //     break;
        case "chitietdonhang":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $load_ctdh = load_ctdh($_GET['id']);
                $loadtrangthai = load_trangthai_donhang($_GET['id']);
            }
            include "donhang/chitietdonhang.php";
            break;
        case "capnhatdonhang":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $trangthai = $_POST['trangthai'];
                $hoten = $_POST['hoten'];
                $ghichu = $_POST['ghichu'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $id = $_POST['id'];

                update_trangthai_donhang($id, $hoten, $trangthai, $ghichu, $diachi, $sdt);
                $loadall_donhang = loadall_donhang_admin_chuanhan();
            }

            include "donhang/danhsachdonhang.php";
            break;
        case "themtaikhoan":
            include "taikhoan/themtaikhoan.php";
            break;
        case "danhsachdonhang":
            $loadall_donhang = loadall_donhang_admin_chuanhan();
            include "donhang/danhsachdonhang.php";
            break;
        case "lichsumuahang":
            $loadall_donhang = loadall_donhang_admin_danhan();
            include "donhang/lichsumuahang.php";
            break;
        case "thongke":
            $listthongke = loadall_thongke();
            $sldm = soluong_danhmuc();
            $slsp = soluong_sanpham();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case "chitietdonhang":
            include "donhang/chitietdonhang.php";
            break;
        case "bieudo":
            include "thongke/bieudo.php";
            break;
        case "binhluansp":
            if(isset($_GET['id_san_pham'])&&($_GET['id_san_pham'])){
                $id=$_GET['id_san_pham'];
                $listbinhluan=loadall_binhluan($id);
            }
            
            include "binhluan/binhluan.php";
            break;
            case "xoabl":
                if(isset($_GET['id_binh_luan'])&&($_GET['id_binh_luan'])){
                    $id=$_GET['id_binh_luan'];
                    xoa_binhluan($id);
                }
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = "";
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loc_sanpham($kyw, $iddm);
                include "sanpham/danhsachsanpham.php";
                break;
        case "thongtinadmin":
            include "thongtinadmin/info.php";
            break;

        default:
            $listthongke = loadall_thongke();
            $sldm = soluong_danhmuc();
            $slsp = soluong_sanpham();
            include 'home.php';

            break;
    }
} else {
    $listthongke = loadall_thongke();
    $sldm = soluong_danhmuc();
    $slsp = soluong_sanpham();
    include 'home.php';
}
include "footer.php";
