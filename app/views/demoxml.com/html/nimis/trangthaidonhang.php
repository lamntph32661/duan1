

<section class="breadcumb_top_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_top_box">
					<h2>Order</h2>
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
	<div class="container"><br>
		<div class="row"><a href="index.php?act=lichsumuahang"  class="btnfunction">Lịch sử mua hàng</a><br>
			<!-- <div class="col-md-9 col-sm-8 col-xs-12"> --> 
				<!-- <div class="main_cart_left">
					<div class="cart_heading"> -->
						<table>
							<tr>
								<th>
									<div class="h_item1">
										Mã đơn hàng 
									</div>
								</th>
								<th>
									<div class="h_item2">
										Người nhận 
									</div>
								</th>
								<th>
									<div class="h_item2">
										Ngày đặt 
									</div>
								</th>
								<th>
									<div class="h_item3">
										Tổng tiền 
									</div>
								</th>
								<th>
									<div class="h_item3">
										Trạng thái 
									</div>
								</th>
								<th>
									<div class="h_item4">
										Chức năng
										
									</div>
								</th>
							</tr>
							<tbody>
							<?php
		//array_reverse($loadall_donhang); trả về bản sao của mảng với các phần tử đảo ngược
		foreach (array_reverse($loadall_donhang) as $donhang) {
			extract($donhang);
			$trang_thai1 = "";
			if ($trang_thai == "Đã giao") $trang_thai1 = '  <a href="index.php?act=danhan&id=' . $id_don_hang . '" class="btnfunction">Đã nhận được hàng</a>';
			if ($trang_thai == "Chờ xác nhận") $trang_thai1 = '  <a href="index.php?act=huydonhang&id=' . $id_don_hang . '" class="btnfunction">Hủy đơn hàng</a>';
			
		
							echo '	<tr>
									<td>
										<div class="cart_item_img">
											
											' . $id_don_hang . '
										</div>
									</td>
									<td>
									<div class="cart_item_img">
											
											' . $ten_nguoi_nhan . '
										</div>
									</td>
									<td>
									<div class="cart_item_img">
											
											' . $ngay_dat_hang . '
										</div>
									</td>
									<td>
									<div class="cart_item_img">
											
											' . $tong_tien . '
										</div>
									</td>
									<td>
									<div class="cart_item_img">
											
											' . $trang_thai . '
										</div>
									</td>
									<td>
									<div class="cart_item_img">
											
									<a href="index.php?act=chitietdonhang&id=' . $id_don_hang . '" class="btnfunction">Xem chi tiết</a>' . $trang_thai1 . '
										</div>
									</td>
								</tr><span><i class="fa fa-close"></i></span>';
							}
							?>
							</tbody>
						</table>
					<!-- </div>
					
				</div> -->
				
			</div>
		</div>
</section>