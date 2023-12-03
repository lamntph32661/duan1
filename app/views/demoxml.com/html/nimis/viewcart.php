<section class="breadcumb_top_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_top_box">
					<h2>Carts</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="breadcumb_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_box">
					<ul class="breadcumb">
						<li><a href="index.php">home <span>|</span></a></li>
						<li><a href="#">Shop <span>|</span></a></li>
						<li class="active"><a href="#">cart</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="main_cart_area">
	<div class="container">

<br><div class="d_table">
<?php
// echo $_GET['thongbao'];
// var_dump($_SESSION['giohang']);
$kq = '<table >
<tr>
    <th>STT</th>
    <th>Tên sản phẩm</th>
    <th>Hình</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    <th>Chức năng</th>
</tr>
<tbody>';
$tong = 0;
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
   // $ttien = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
    $tong +=  $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
    $kq .= '<tr>
        <td>' . ($i + 1) . '</td>
        <td><a href="' . $_SESSION['giohang'][$i][3] . '">' . $_SESSION['giohang'][$i][1] . '</a></td>
        <td><img src="/public/uploads/' . $_SESSION['giohang'][$i][2] . '" alt="" style="height: 80px;"></td>
        <td>' . $_SESSION['giohang'][$i][4] . '</td>
        <td><span>' . $_SESSION['giohang'][$i][5] . '</span><input type="hidden" name="" value="' . $i . '"></td>
        <td>' . ( $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]) . '</td>
        <td><a href="index.php?act=del&i='.$i.'"  class="btnfunction">Xóa</a></td>
    </tr>';
}
$kq .= '<tr><td colspan="5"></td><td>' . $tong . '</td><td><a href="index.php?act=checkout"  class="btnfunction">Thanh Toán</a>    <a href="index.php?act=del"  class="btnfunction">Xóa giỏ hàng</a></td></tr>';

$kq .= '</tbody>
</table>';
echo $kq;
?></div>
<script>
    function tang(x) {
        // thay đổi số lượng trực tiếp với DOM HTML
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        var soluongmoi = parseInt(soluongcu.innerText) + 1;
        soluongcu.innerText = soluongmoi;

       // alert(soluongcu.innerText);
        //gọi hàm cập nhật session
        
        
    }

    function giam(x) {
        // thay đổi số lượng trực tiếp với DOM HTML
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        if (parseInt(soluongcu.innerText) > 1) {
            var soluongmoi = parseInt(soluongcu.innerText) - 1;
            soluongcu.innerText = soluongmoi;
        } else {
            alert("không thể trừ được nữa");
        }
        //alert(soluongcu);
        //gọi hàm cập nhật session
    }
</script>
</div>
</section>