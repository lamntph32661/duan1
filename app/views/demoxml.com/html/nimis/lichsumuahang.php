<section class="breadcumb_top_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_top_box">
					<h2>histories</h2>
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

<br>
		<table style="border: 1; border-collapse: collapse;">
			<tr>
				<th>Mã đơn hàng</th>
				<th>Người nhận</th>
				<th>Ngày đặt</th>
				<th>Tổng tiền</th>

				<th>Trạng thái</th>
				<th>Chức năng</th>
			</tr>

			<tbody>
				<?php
				//array_reverse($loadall_donhang); trả về bản sao của mảng với các phần tử đảo ngược
		foreach (array_reverse($loadall_donhang) as $donhang) {
					extract($donhang);
					$trang_thai1 = "";

					if ($trang_thai == "Đã nhận") $trang_thai1 = ' / <a href="index.php?act=mualai&id=' . $id_don_hang . '">Mua lại</a>';
					echo '<tr>
                                <td>' . $id_don_hang . '</td>
								<td>' . $ten_nguoi_nhan . '</td>
                                <td>' . $ngay_dat_hang . '</td>
                                <td>$' . $tong_tien . '</td>
                                <td>' . $trang_thai . '</td>
                                <td><a href="index.php?act=chitietdonhang&id=' . $id_don_hang . '" class="btnfunction">Xem chi tiết</a></td>
                                </tr>';
				}
				?>
				<!-- <form action="index.php?act=mualai" method="post">$linksp = "index.php?act=product-detail&id_san_pham=" . $id_san_pham;
								<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
										<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
										<input type="hidden" name="hinh" value="' . $hinh . '">
										<input type="hidden" name="linksp" value="' . $linksp . '">	
										<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
										<input type="submit" value="Mua lại" name="Mualai">
								</form> -->

			</tbody>
		</table>
		
	
	</div>
</section>