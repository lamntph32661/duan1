<?php

?>

<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->

<!-- Mirrored from demoxml.com/html/nimis/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 12:52:34 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NIMIS | Home Page 1</title>

	<!-- fonts files -->
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	<!-- Font awesome css -->
	<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- Owl carousel css -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="stylesheet" href="css/owl.theme.css">

	<!-- bx-slider css -->
	<link rel="stylesheet" href="css/jquery.bxslider.css">

	<!-- bootstrap select css -->
	<link rel="stylesheet" href="css/bootstrap-select.min.css">

	<!-- lightbox css -->
	<link rel="stylesheet" href="css/lightbox.css">

	<!-- Revolution slider css -->
	<link href="js/rs-plugin/css/settings.css" rel="stylesheet" />

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Custom css -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- This Template Is Fully Coded By Shakhawat H. from codingcouples.com -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		
	</style>
</head>

<body>

	<div class="header_top">
		<div class="container">
			<div class="row"><a href=""></a>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="header_top_left">
						<img src="images/car.png" alt="Header Car Icon" />
						<p>get free! shipping on order over <span>$100</span></p>
					</div>
				</div>
				<?php
				if (!isset($_SESSION['user']) || !isset($_SESSION['pass']))
					echo '<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="header_top_right floatright">
						<p><a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php">login</a> / <a href="/app/views/demoxml.com/html/nimis/login-form-20/sigup.php">register</a></p>
						
					</div>
				</div>';
				else {
					$onenguoidung = checkuser($_SESSION['user'], $_SESSION['pass']);
					extract($onenguoidung);
					if ($role_id == 4 || $role_id == 5) {
						$logadmin = '<a href="/app/controllers/index.php">Login Admin</a> /';
					} else $logadmin = "";
					echo '<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="header_top_right floatright">
						<p><a href="#">' . $_SESSION['user'] . '</a> / ' . $logadmin . '
						<a href="/app/views/demoxml.com/html/nimis/login-form-20/logout.php">Log out</a></p>
						
					</div>
				</div>';
				}

				?>

				<?php
				// if (!isset($_SESSION['user'])) {
				// 	echo '<li>
				// 			<div class="dropdown dropdown-access">
				// 			<a href="index.php?act=dangnhap" class="access_link"><span>Account</span></a>
				// 			<div class="dropdown-menu">
				// 				<a href="index.php?act=dangky" class="btn_1">Sign Up</a>
				// 				<div class="divider"><span>OR</span></div>
				// 				<a href="index.php?act=dangnhap" class="btn_1">Sign In</a>

				// 			</div> 
				// 			</div>
				// 			</li>';
				// } else {
				// 	echo '<li>
				// 			<div class="dropdown dropdown-access">
				// 			<a href="index.php?act=account" class="access_link"><span>Account</span></a>
				// 			<div class="dropdown-menu">
				// 				<ul>
				// 					<li>
				// 						<a href=""><i class="ti-package"></i>My Orders</a>
				// 					</li>
				// 					<li>
				// 						<a href="index.php?act=taikhoan"><i class="ti-user"></i>My Profile</a>
				// 					</li>
				// 					<li>
				// 						<a href="logout.php"><i class="ti-help-alt"></i>Log Out</a>
				// 					</li>
				// 				</ul>
				// 			</div> 
				// 			</div>
				// 			</li>';
				// }

				?>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="header_left floatleft">
						<a class="fa fa-search" href="#"></a>
						<input type="text" placeholder="search" />
					</div>
				</div>
				<div class="col-md-6 col-sm-5 col-xs-12">
					<div class="header_center">
						<a href="index.php"><img src="images/logo.png" alt="Site Logo" /></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="header_right floatright">
						<ul class="checkout">
							<li class="mobi_right_li"><a href="#"><i class="fa fa-shopping-cart"></i>checklist</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="nav_area">
		<div class="container">
			<div class="nav_left floatleft">
				<a href="index.php?act=category-1_loc">category<i class="fa fa-bars"></i></a>
				<div class="cat_mega_menu">
					<div class="cat_left">
						
						<div class="cat_menu_line"></div>
						<ul class="cat_nav"><?php $i=0; foreach ($dsdm as $dm) {$i++;
                                            extract($dm);
											$linkdm = "index.php?act=sanpham&id_danh_muc=" . $id_danh_muc;
											if($i!=7&&$i!=13)
                                            
                                            echo '<li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
											else echo '</ul>
						
					</div>
					<div class="cat_left">
						
						<div class="cat_menu_line"></div>
						<ul class="cat_nav"><li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                                        }
                                        ?>
							
						
							
						</ul>
					</div>
					<!-- <div class="cat_middle">
						<h5>T Shirts</h5>
						<div class="cat_menu_line"></div>
						<ul class="cat_nav">
							<li><a href="#">plain T-shirt</a></li>
							<li><a href="#">printed T-shirt</a></li>
							<li><a href="#">sports T-shirt</a></li>
							<li><a href="#">striped T-shirt</a></li>
							<li><a href="#">V-Neck T-Shirt</a></li>
						</ul>
					</div>
					<div class="cat_middle_right">
						<h5>trousers fit</h5>
						<div class="cat_menu_line"></div>
						<ul class="cat_nav">
							<li><a href="#">flexible waist</a></li>
							<li><a href="#">regular fit</a></li>
							<li><a href="#">slim fit</a></li>
							<li><a href="#">tailored fit</a></li>
							<li><a href="#">tight fit</a></li>
						</ul>
					</div> -->
					<div class="cat_img">
						<img src="images/menu_cat.png" alt="" />
					</div>
				</div>
			</div>
			<div class="nav_center">
				<nav class="mainmenu">
					<ul id="nav">
						<li><a href="index.php">Home</a>
							
						</li>
						<li><a href="index.php?act=danhsachsanpham">Shop</a>
							<ul id="sub-menu7">
								<!-- <li><a href="index.php?act=danhsachsanpham">Sản phẩm</a></li>
								<?php
								// 					foreach ($dsdm as $dm) {
								//     extract($dm);
								//     $linkdm = "index.php?act=sanpham&id_danh_muc=" . $id_danh_muc;
								//     echo '<li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
								// }
								?> -->

							</ul>
						</li>
						<?php
								$ktdn=""; if(!isset($_SESSION['user'])) 
    $ktdn='<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class=""   onclick="return confirm(\' Vui lòng đăng nhập\')">order</a>';
    else $ktdn= '<a href="index.php?act=trangthaidonhang">order</a>
    '; ?>
						
						<li><?=$ktdn?>
							
						</li>
					</ul>
				</nav>
			</div>
			<div class="nav_right floatright">
			<?php
								$ktdn=""; if(!isset($_SESSION['user'])) 
    $ktdn='<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="" onclick="return confirm(\' Vui lòng đăng nhập\')"  ><img src="images/bag.png" alt="Bag" />cart: '.sizeof($_SESSION['giohang']).' items</a>';
    else $ktdn= '<a href="index.php?act=viewcart"><img src="images/bag.png" alt="Bag" />cart: '.sizeof($_SESSION['giohang']).' items</a>
    '; ?>
				<?=$ktdn?>
				<div class="cart_menu">
					<?php  $tong=0;
						foreach ($_SESSION['giohang'] as $dh) {
							echo '
							<div class="cart_items">
						<div class="c_item_img floatleft">
							<a href="'.$dh[3].'"><img src="/public/uploads/' . $dh[2] . '" alt="" style="height: 80px;"></a>
						</div>
						<div class="c_item_totals floatleft">
							<div class="c_item_totals_detail floatleft">
								<a href="'.$dh[3].'">
									<h5>'.$dh[1].'</h5>
								</a>
								<span>'.$dh[5].' x $ '.$dh[4].'</span>
							</div>
							<div class="close_icon_cart floatleft">
								<img src="images/close.png" alt="" />
							</div>
						</div>
					</div>
							';$tong+=$dh[5]*$dh[4];
						}
					?>
					
					
					<div class="cart_totals">
						<div class="c_totals_left floatleft">
							<p>Free shipping</p>
						</div>
						<div class="c_totals_right floatleft">
							<p>total $<?=$tong?></p>
						</div>
					</div>
					<div class="cart_view_bottom">
						<div class="c_totals_left floatleft">
							<a href="index.php?act=viewcart">View Cart</a>
						</div>
						<div class="c_totals_right floatleft">
							<a href="index.php?act=checkout">Check Out</a>
						</div>
					</div>
				</div>
			</div>


			<!-- MOBILE ONLY CONTENT -->
			<div class="only-for-mobile">
				<ul class="ofm">
					<li class="m_nav"><i class="fa fa-bars"></i> Navigation</li>
				</ul>

				<!-- MOBILE MENU -->
				<div class="mobi-menu">
					<div id='cssmenu'>
						<ul>
							<li class='has-sub'>
								<a href='index.php'><span>Home</span></a>
								
							</li>

							<li class='has-sub'>
								<a href='index.php?act=category-1_loc'><span>category</span></a>
								<ul>
									<li class='has-sub'>
										<a href='#'><span>Shirts</span></a>
										<ul>
											<li><a href="#"><span>check shirts</span></a></li>
											<li><a href="#"><span>denim shirts</span></a></li>
											<li><a href="#"><span>long sleeve shirts</span></a></li>
											<li><a href="#"><span>denim shirts</span></a></li>
											<li class="last"><a href="index-3.html#"><span>long sleeve shirts</span></a>
											</li>
										</ul>
									</li>
									<li class='has-sub'>
										<a href='#'><span>T Shirts</span></a>
										<ul>
											<li><a href="#"><span>plain T-shirt</span></a></li>
											<li><a href="#"><span>printed T-shirt</span></a></li>
											<li><a href="#"><span>sports T-shirt</span></a></li>
											<li><a href="#"><span>striped T-shirt</span></a></li>
											<li class='last'><a href="#"><span>V-Neck T-Shirt</span></a></li>
										</ul>
									</li>
									<li class='has-sub'>
										<a href='#'><span>trousers fit</span></a>
										<ul>
											<li><a href="#"><span>flexible waist</span></a></li>
											<li><a href="#"><span>regular fit</span></a></li>
											<li><a href="#"><span>slim fit</span></a></li>
											<li><a href="#"><span>tailored fit</span></a></li>
											<li class='last'><a href="#"><span>tight fit</span></a></li>
										</ul>
									</li>
									<li class="img-nav">
										<div class="container">
											<div class="clearfix"></div>
											<div class="space20"></div>
											<div class="clearfix"></div>
											<div class="row in1">
												<div class="col-md-6">
													<a href="#"><img src="images/menu_cat.png" class="img-responsive" alt="" /></a>
												</div>
												<div class="col-md-6">
												</div>
												<div class="clearfix"></div>
												<div class="space20"></div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div class="space20"></div>
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<a href='index.php?act=category-2'><span>shop</span></a>
							</li>
							<li class='has-sub'>
								<a href='index.php?act=category-1_loc'><span>accessories</span></a>
								<ul class="sub-nav">
									<li><a href="#"><span>check shirts</span></a></li>
									<li><a href="#"><span>denim shirts</span></a></li>
									<li><a href="#"><span>long sleeve shirts</span></a></li>
									<li><a href="#"><span>plain shirts</span></a></li>
									<li><a href="#"><span>printed shirts</span></a></li>
									<li><a href="#"><span>short sleeve shirts</span></a></li>
									<li><a href="#"><span>shortsleeve denim shirts</span></a></li>
								</ul>
							</li>
							<li class='has-sub'>
								<a href='#'><span>pages</span></a>
								<ul id="sub-nav">
									<li><a href="index.php?act=category-1_loc">Category page</a></li>
									<li><a href="index.php?act=category-2">Category page without filter</a></li>
									<li><a href="checkout.html">Checkout page</a></li>
									<li><a href="index.php?act=viewcart">Cart page</a></li>
									<li><a href="index.php?act=product-detail">Product detail page</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="single-blog.html">Blog single</a></li>
									<li><a href="contact.html">Contact page</a></li>
									<li><a href="404.html">404 page</a></li>
								</ul>
							</li>
							<li>
								<a href='blog.html'><span>Blog</span></a>
							</li>
							<li>
								<a href='index.php?act=viewcart'><span>cart</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- MOBILE ONLY CONTENT -->
		</div>
	</section>