<?php

include "../models/connect.php";
include "../models/pdo.php";
include "../models/taikhoan.php";
include "../models/nguoidung.php";
include "../models/danhmuc.php";
include "../models/sanpham.php";
include "../models/banner.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
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
                $err="";
                function checkinput($data) {
                    $data=trim($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $target_dir="uploads/";
                    $target_file= $target_dir.basename($_FILES['url_image']['name']);
                
                    if(empty($_POST['acc'])||empty($_POST['pas'])||empty($_FILES['url_image']['name']))
                    $err='vui long nhap';
                    else{
                        $ten_banner= checkinput($_POST['acc']);
                        $pas= checkinput($_POST['pas']);
                        $url_image=$_FILES['url_image']['name'];
                        move_uploaded_file($_FILES['url_image']['tmp_name'],$target_file);
                        insert_banner($ten_banner, $url_image, $pas);
                       
                    }
                }
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
                        $banner = loadone_banner($_GET['id_banner']);
                    }
                    include "banner/capnhatbanner.php";
                    break;
                case 'updatebanner':
                    // if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    //     $ten_banner = $_POST['tenbanner'];
                    //     $hinh = $_FILES['hinh']['name'];
                    //     $target_dir = "uploads/";
                    //     $target_file = $target_dir . basename($hinh = $_FILES['hinh']['name']);
                    //     if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //     } else {
                    //     }
                    //     $link = $_POST['link'];
                    //     update_banner($id_banner, $ten_banner, $hinh, $link);
                    //     $thongbao = "cập nhật thành công";
                    // }
                    
                    include "banner/danhsachbanner.php";
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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danh_muc = $_POST['iddm'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['giasp'];
                $giam_gia = $_POST['giamgiasp'];
                $so_luong = $_POST['soluong'];
                $mo_ta = $_POST['motasp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($hinh = $_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/themsanpham.php";
            break;
        case "danhsachsanpham":
            $listsanpham = loadall_sanpham();
            include "sanpham/danhsachsanpham.php";
            break;
        case "xoasp":
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                delete_sanpham($_GET['id_san_pham']);
            }

            $sql = "select * from san_pham order by ten_san_pham";
            $listsanpham = pdo_query($sql);

            include "sanpham/danhsachsanpham.php";
            break;
        case "capnhatsp":
            if (isset($_GET['id_san_pham']) && ($_GET['id_san_pham'] > 0)) {
                $listdanhmuc = loadall_danhmuc();
                $sanpham = loadone_sanpham($_GET['id_san_pham']);
            }
            include "sanpham/capnhatsanpham.php";break;
        case 'capnhatsanpham':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_danh_muc = $_POST['iddm'];
                $id_san_pham = $_POST['id'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['giasp'];
                $giam_gia = $_POST['giamgiasp'];
                $mo_ta = $_POST['motasp'];
                $so_luong = $_POST['soluong'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($hinh = $_FILES['hinh']['name']);
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                update_sanpham($ten_san_pham, $hinh, $gia, $giam_gia, $mo_ta, $so_luong, $id_danh_muc, $id_san_pham);
                $thongbao = "cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/danhsachsanpham.php";
            
            break;
        case "danhsachtaikhoan":
            include "taikhoan/danhsachtaikhoan.php";
            break;
        case "themtaikhoan":
            include "taikhoan/themtaikhoan.php";
            break;
        case "danhsachdonhang":
            include "donhang/danhsachdonhang.php";
            break;
        case "thongke":
            $listthongke = loadall_thongke();
            $sldm=soluong_danhmuc();
            $slsp=soluong_sanpham();
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
        case "binhluan":
            include "binhluan/binhluan.php";
            break;
            
        case "thongtinadmin":
            include "thongtinadmin/info.php";
            break;

        default:
        $listthongke = loadall_thongke();
            $sldm=soluong_danhmuc();
            $slsp=soluong_sanpham();
            include 'home.php';
           
            break;
    }
} else {
    $listthongke = loadall_thongke();
            $sldm=soluong_danhmuc();
            $slsp=soluong_sanpham();
    include 'home.php';
}
include "footer.php";
