<div class="breadcumb_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="bread_box">
					<ul class="breadcumb">
						<li><a href="index.php">home <span>|</span></a></li>
						<li><a href="index.php?act=cart">shop <span>|</span></a></li>
						<li><a href="index.php?act=cartcategory-1">mens <span>|</span></a></li>
						<li class="active"><a href="#">t-shirt</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
extract($onesp);
$linksp = "index.php?act=product-detail&id_san_pham=" . $id_san_pham;
?>
<section class="gray_tshirt_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="gray_tshirt">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_product_image_tab">
								<div role="tabpanel">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs product_detail_zoom_tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
												<div class="small_img">
													<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 70px; height: 75px;">
												</div>
											</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
												<div class="small_img">
													<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 70px; height: 75px;">
												</div>
											</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
												<div class="small_img">
													<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 70px; height: 75px;">
												</div>
											</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<div class="single_p_image">
												<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 271px; height: 351px; object-fit: cover;">
												<!-- <a href="images/single-large.jpg" data-lightbox="image-1" data-title="My caption"><img src="images/product-plus.png" alt="" /></a>
										<img id="zoom_02" src="images/Product-Details-04.jpg" data-zoom-image="images/single-large.jpg" alt=""/> -->
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											<div class="single_p_image">
												<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 271px; height: 351px; object-fit: cover;">
												<!-- <a href="images/single-large1.png" data-lightbox="image-1" data-title="My caption"><img src="images/product-plus.png" alt="" /></a>
										<img id="zoom_03" src="images/product_detail_05.png" data-zoom-image="images/single-large1.png" alt=""/> -->
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="messages">
											<div class="single_p_image">
												<img src="/public/uploads/<?= $hinh ?>" alt="" style="width: 271px; height: 351px; object-fit: cover;">
												<!-- <a href="images/single-large2.png" data-lightbox="image-1" data-title="My caption"><img src="images/product-plus.png" alt="" /></a>
										<img id="zoom_04" src="images/product_detail_06.png" data-zoom-image="images/single-large2.png" alt=""/> -->
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">

							<div class="product_detail_heading">
								<?php
								if ($gia > $giam_gia) {
									$a = '<p>Sale</p>';
									$b = '<div class="old_price_gray">
									<p> $'. $giam_gia .' </p>
								</div>
								<div class="new_price_gray"><del> $'. $gia .' </del></div>';
								} else {
									$b = '<p>$' . $giam_gia . '</p>';
								}
								?>
								<div class="detail_heading_left" style="width: 500px;">
									<h3><?= $ten_san_pham ?></h3>
									<?=$b?>
								</div>
								<!-- <div class="detail_heading_right">
									<ul id="detail_star">
										<li><a class="fa fa-star-o red" href="#"></a></li>
										<li><a class="fa fa-star-o red" href="#"></a></li>
										<li><a class="fa fa-star-o red" href="#"></a></li>
										<li><a class="fa fa-star-o" href="#"></a></li>
										<li><a class="fa fa-star-o" href="#"></a></li>
									</ul>
									<p>(5 Review)</p>
								</div> -->
							</div>

							<div class="panel-group product_accordion" id="home-accordion-single" role="tablist" aria-multiselectable="true">

								<div class="panel panel-default product_default">
									<!-- <div class="panel-heading product_accordion_heading" role="tab" id="headingTwoP">
										<h4 class="panel-title product_accordion_head">
											<a class="collapsed" data-toggle="collapse" data-parent="#home-accordion-single" href="#collapseTwoP" aria-expanded="false" aria-controls="collapseTwoP">
												size & fit
												<span class="floatright"><i class="fa fa-plus"></i></span>
											</a>
										</h4>
									</div>
									<div id="collapseTwoP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoP">
										<div class="panel-body fit">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div> -->
								</div>
								<div class="panel panel-default product_default">
									<div class="panel-heading product_accordion_heading" role="tab" id="headingThreeP">
										<h4 class="panel-title product_accordion_head">
											<a class="collapsed" data-toggle="collapse" data-parent="#home-accordion-single" href="#collapseThreeP" aria-expanded="false" aria-controls="collapseThreeP">
												delivery & returns
												<span class="floatright"><i class="fa fa-plus"></i></span>
											</a>
										</h4>
									</div>
									<div id="collapseThreeP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeP">
										<div class="panel-body product_accordion_head">
											<!-- <div class="single_color sp_single_col">
												<div class="color_heading">
													<h5>Colors</h5>
												</div>
												<div class="color_detail">
													<div class="panel-body colors_cat">
														<ul id="cat_color">
															<li><a class="col-7" href="#"></a></li>
															<li><a class="col-8" href="#"></a></li>
															<li><a class="col-9" href="#"></a></li>
															<li><a class="col-10" href="#"></a></li>
														</ul>
													</div>

												</div>
											</div>
											<div class="single_color">
												<div class="color_heading">
													<h5>Select size</h5>
												</div>
												<div class="color_detail">
													<div class="color_size_detail">
														<ul id="color_size">
															<li><a href="#">xs</a></li>
															<li><a href="#">s</a></li>
															<li><a href="#">m</a></li>
															<li><a href="#">l</a></li>
															<li><a href="#">xl</a></li>
														</ul>
													</div>
												</div>
											</div> -->
											<div class="single_color">
												<div class="color_heading">
													<h5>Quantity</h5>
												</div>
												<?php
												$ktdn = "";
												if (!isset($_SESSION['user']))
													$ktdn = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class=""><input type="button" name="btnaddcart" value="ADD TO CART"  onclick="return confirm(\' Vui lòng đăng nhập\')"  style="background-color: rgb(253,253,253,0.6); border: none;"></a>';
												else $ktdn = '<input type="submit" name="btnaddcart" value="ADD TO CART"  style="background-color: rgb(253,253,253,0.6); border: none;" >
    '; ?>
												<form action="index.php?act=addtocart" method="post">
													<input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">
													<input type="hidden" name="ten_san_pham" value="<?= $ten_san_pham ?>">
													<input type="hidden" name="hinh" value="<?= $hinh ?>">
													<input type="hidden" name="linksp" value="<?= $linksp ?>">
													<input type="hidden" name="giam_gia" value="<?= $giam_gia ?>">
													<div class="color_detail">
														<div class="size_down">
															<input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="sl" max="<?= $so_luong ?>" min="0" step="1">
														</div>
														<div class="size_cart">
															<a href=""><?= $ktdn ?></a>
														</div>
														<div class="size_heart">
															<a href="#"><img src="images/Product-Details-heart.png" alt="" /></a>
														</div>
														<div class="size_heart">
															<a href="#"><img src="images/Product-Details-arrow.png" alt="" /></a>
														</div>

													</div>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product_page_tab_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product_page_tab">
					<div role="tabpanel">
						<ul class="nav nav-tabs tab-product" role="tablist">
							<li role="presentation" class="active"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">Description</a></li>

							<li role="presentation"><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab">Review (2)</a></li>
						</ul>

						<div class="tab-content tab-p-details">
							<div role="tabpanel" class="tab-pane active" id="home2">
								<h2>Description</h2>
								<div class="multi_line"></div>
								<p><?= $mo_ta ?></p>
								</p>
							</div>

							<div role="tabpanel" class="tab-pane" id="messages2">
								<div class="review_comments">
									<div class="review_heading">
										<div class="review_heading_left">
											<h2><span>Review for </span> "<?= $ten_san_pham ?>"</h2>
											<div class="multi_line"></div>
										</div>
										<div class="review_heading_right">
											<!-- <ul id="review_heading_star">
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
											</ul> -->
										</div>
									</div><?php
											foreach ($listbinhluan as $binhluan) :
											?>
										<div class="single_review_comment">
											<div class="single_review_img">
												<img src="images/single_rv1.png" alt="" />
											</div>
											<div class="single_review_text">
												<?php
													foreach ($listnguoidung as $nguoidung) {
														if($nguoidung['id_nguoi_dung']==$binhluan['id_nguoi_dung'])
														$loadten='<h4>'.$nguoidung['ho_ten'].'</h4>';
													}
												?>
												<h4><?= $loadten?></h4>
												<?php
												$a = "";
												if ($binhluan['loai_danh_gia'] == 1) $a = "Rất tệ";
												if ($binhluan['loai_danh_gia'] == 2) $a = "Tệ";
												if ($binhluan['loai_danh_gia'] == 3) $a = "Không hài lòng";
												if ($binhluan['loai_danh_gia'] == 4) $a = "Hài lòng";
												if ($binhluan['loai_danh_gia'] == 5) $a = "Rất hài lòng";
												if ($binhluan['loai_danh_gia'] == 6) $a = "Chưa mua";
												?>
												<p><?= $a ?></p>
												<p><?= $binhluan['noi_dung'] ?></p>
												<div class="review_italic">
													<p> <?= $binhluan['ngay_binh_luan'] ?></p>
												</div>
											</div>
										</div>
									<?php
											endforeach
									?>

									<!-- <div class="single_review_comment last">
										<div class="single_review_img">
											<img src="images/single_rv2.png" alt="" />
										</div>
										<div class="single_review_text last">
											<h4>A Stunning Beauty!</h4>
											<ul id="single_review_star">
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
												<li><a href="#" class="fa fa-star"></a></li>
											</ul>
											<p>Semper orci etiam ac ultricies ante. Donec lobortis variusjusto et. Curabitur egestas aliquet massa non elementum. Quisque at risus nisl. Aliquam erat volutpat. Suspendisse potenti. Nullam porta faucibus elit.</p>
											<div class="review_italic">
												<p><span>Nicole Bailey,</span> 12.05.2013</p>
											</div>
										</div>
									</div> -->
								</div>
								<div class="Review_input">
									<div class="review_input_heading">
										<h3>Write your review</h3>
										<div class="multi_line"></div>
									</div>
									<div class="review_comment_input">
										<?php
$guibinhluan='';
											if(isset($_SESSION['user']))
											$guibinhluan='<input type="submit" value="Submit Review" name="themmoi" />';
										else $guibinhluan='<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class=""   onclick="return confirm(\' Vui lòng đăng nhập\')"><input type="button" value="Submit Review" /></a>'
										?>
										<form action="index.php?act=binhluan" method="post">
											<?php
											if(isset($_SESSION['user']))if (is_array($onenguoidung)) extract($onenguoidung);
											?>
											<input type="hidden" name="id_nguoi_dung" value="<?= $id_nguoi_dung ?>">
											<input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">
											<select name="loai_danh_gia" id="" style="border: 1px solid #d3d3d3;
    color: #333;
    font-size: 12px;
    height: 30px;
    margin-bottom: 10px;
	background: transparent none repeat scroll 0 0;
    padding: 0 10px;
    text-transform: uppercase;
    width: 100%;">
												<option value="1">Rất tệ</option>
												<option value="2">Tệ</option>
												<option value="3">Không hài lòng</option>
												<option value="4">Hài lòng</option>
												<option value="5">Rất hài lòng</option>
												<option value="6">Chưa mua</option>
											</select><br>

											<textarea name="noidung" id="" cols="30" rows="10" placeholder="Write your review"></textarea><br>
											<!-- <input type="submit" value="Submit Review" name="themmoi" /> -->
											<?=$guibinhluan?>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="main_category_area product_page_caro">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="main_category_right product-box">
					<h3 class="product">related products</h3>
					<div class="multi_line"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="owl-example-single" class="owl-carousel">

								<?php
								
								$i = 0;
								$a = '';
								$b = '';
								foreach ($sp_cung_loai as $sp) {
									extract($sp);
									if ($gia > $giam_gia) {
										$a = '<p>Sale</p>';
										$b = '<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>';
									}else{
										$b='<p>$' . $giam_gia . '</p>';
									}
									$linksp = "index.php?act=sanphamct&id_san_pham=" . $id_san_pham;
									echo '
						
								<div class="item">
									<div class="item-img">
									<form action="index.php?act=addtocart" method="post">
						<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
						<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
						<input type="hidden" name="hinh" value="' . $hinh . '">
						<input type="hidden" name="linksp" value="' . $linksp . '">	
						<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
									<a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 220px; height: 263px;"></a>
										<div class="tr-add-cart">
											<ul>
												
												<li>' . $ktdn . '</li>
												<li><a class="fa fa-heart tr_heart" href="#"></a></li>
												<li><a class="fa fa-search tr_search"
														href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
											</ul>
										</div>
									</div>
									<div class="item-new">
										' . $a . '
									</div>
									<div class="item-sub">
										<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
											<h5>' . substr($ten_san_pham, 0, 30) . '...</h5>
										</a>
										'.$b.'
									</div>
								</form>
						</div>';
									$i++;
								}
								?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>