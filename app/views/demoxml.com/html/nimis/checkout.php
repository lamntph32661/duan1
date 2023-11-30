	<section class="breadcumb_top_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="bread_top_box">
						<h2>Checkout</h2>
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
							<li><a href="index.html">home <span>|</span></a></li>
							<li><a href="category-1.html">Shop <span>|</span></a></li>
							<li><a href="cart.html">Cart <span>|</span></a></li>
							<li class="active"><a href="#">checkout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="checkout_area">
		<div class="container">
			<div class="row">
				<form action="index.php?act=checkout" method="post"><?php
																	if (is_array($onenguoidung)) extract($onenguoidung);
																	?>
					<input type="hidden" name="id_nguoi_dung" value="<?= $id_nguoi_dung ?>">

					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="checkout_left">
							<h2>Shiiping Address</h2>
							<div class="dotted_line"></div>
							<div class="shipping_form">
								<div class="company_name">
									<p>Name <span>*</span></p>
									<input type="text">
									<!-- none -->
								</div>
								<div class="company_name">
									<p>Name <span>*</span></p>
									<input type="text" name="hoten" value="<?= $ho_ten ?>">
								</div>
								<div class="c_address">
									<p>Address <span>*</span></p>
									<input type="text" placeholder="Address" name="diachi" value="<?= $dia_chi ?>">
								</div>
								<div class="s_town">
									<p>Tele <span>*</span></p>
									<input type="text" placeholder="Tele" name="sdt" value="<?= $sdt ?>">
								</div>
								<div class="s_order">
									<p>Order Notes <span>*</span></p>
									<textarea cols="300" rows="100" name="ghichu">None</textarea>
								</div>
								
							</div>

						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="checkout_right">
							<h4>Review of Your Order</h4>

							<div class="product_form_total">
								<div class="c_main_item">
									<p>Product</p>
									<span>Total<?=$err?></span>
								</div>
								<?php

								$tong = 0;
								$sl = 0;
								for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
									$tong +=  $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
									echo '<div class="c_single_item">
								<p>' . $_SESSION['giohang'][$i][1] . ' x ' . $_SESSION['giohang'][$i][5] . '</p>
								<span>$' . ($_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]) . '</span>
							</div>';
									$sl++;
								}
								?>
								<div class="c_total_item sp_single_item">
									<input type="hidden" name="id_nguoidung" value="<?=$onenguoidung['id_nguoi_dung']?>">
									<p>Order Total</p>
									<span>$<?= $tong ?></span>
								</div><input type="hidden" name="tongtien" value="<?= $tong ?>">
								<div class="c_payment">
									<p>Select Payment Method</p>
									<select class="selectpicker sel_state">
										<option>Direct Bank Transfer</option>
										<option>Wire Transfer</option>
										<option>VISA</option>
									</select>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> I have Read & Accept <span>Terms & Conditions</span>
									</label>
								</div>
								<input type="submit" value="Place order now" name="dathang" />
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</section>