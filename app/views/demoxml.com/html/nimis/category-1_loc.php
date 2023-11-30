<section class="breadcumb_top_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bread_top_box">
                    <h2>Men</h2>
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
                        <li><a href="category-1.html">Shop <span>|</span></a></li>
                        <li><a href="category-2.html">Category <span>|</span></a></li>
                        <li class="active"><a href="#">Men</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="filter_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="filter_box_left">
                    <p>FILTERING:</p>
                    <div class="filter_cont">
                        <ul>
                            <li><a href="category-1.html">on</a></li>
                            <li><img src="images/filter_ico.png" alt="" /></li>
                            <li><a href="category-2.html">off</a></li>
                        </ul>
                    </div>
                    <div class="s_results">
                        <p><span>|</span> showing 1-12 of 30 results</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12" style="text-align: right;">
                
                    <form action="index.php?act=sanpham" method="post" class="footer_top_left">
                        <input type="text" name="kyw" placeholder="" style="background-color: aliceblue;" />
                        <input type="submit" name="timkiem" value="Search" />
                    </form>
                
            </div>

        </div>
    </div>
</div>
<section class="main_category_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="main_category_left">

                    <div class="panel-group" id="home-accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#home-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CATEGORIES
                                        <span class="floatright"><i class="fa fa-minus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul id="c_tab1">
                                        <li><a href="index.php?act=danhsachsanpham">Tất cả</a></li>
                                        <?php foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&id_danh_muc=" . $id_danh_muc;
                                            echo '<li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                                        }
                                        ?>
                                        <!-- <li><a href="#">Blazers (12)</a></li>
											<li><a href="#">Pants & Trousers (54)</a></li>
											<li><a href="#">Shirts (105)</a></li>
											<li><a href="#">Suits & Tailors (48)</a></li>
											<li><a href="#">T-shirts (120)</a></li>
											<li><a href="#">Underwear (12)</a></li>
											<li><a href="#">Jackets & Coats (12)</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        PRICE FILTER
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div id="slider-range"></div>
                                    <div class="cat_filter_box">
                                        <p>
                                            <label for="amount">Filter</label>
                                            <input type="text" id="amount" readonly style="border:0; color:#000; font-weight:bold;">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        COLOURS
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body colors_cat">
                                    <ul id="cat_color">
                                        <li><a class="col-1" href="#"></a></li>
                                        <li><a class="col-2" href="#"></a></li>
                                        <li><a class="col-3" href="#"></a></li>
                                        <li><a class="col-4" href="#"></a></li>
                                        <li><a class="col-5" href="#"></a></li>
                                        <li><a class="col-6" href="#"></a></li>
                                        <li><a class="col-7" href="#"></a></li>
                                        <li><a class="col-8" href="#"></a></li>
                                        <li><a class="col-9" href="#"></a></li>
                                        <li><a class="col-10" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        size
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <ul id="cat_size">
                                        <li><a href="#">xs</a></li>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">xxl</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Brands
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <ul id="c_tab2">
                                        <li><a href="#">Tom tailor (72)</a></li>
                                        <li><a href="#">incult (14)</a></li>
                                        <li><a href="#">jack & jones (23)</a></li>
                                        <li><a href="#">locomotive (62)</a></li>
                                        <li><a href="#">river island (19)</a></li>
                                        <li><a href="#">Steve madden (37)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Look
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Style
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Best Seller
                                        <span class="floatright"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="main_category_right" style="text-align: center;">
                    <div class="row">
                    <?php
								$ktdn=""; if(!isset($_SESSION['user'])) 
    $ktdn='<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="tr_text"><input type="button" name="btnaddcart" value="ADD TO CART"  onclick="return confirm(\' Vui lòng đăng nhập\')" id="inputadd"></a>';
    else $ktdn= '<a href="#" class="tr_text"><input type="submit" name="btnaddcart" value="ADD TO CART"  id="inputadd"></a>
    '; ?>
                        <?php foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=product-detail&id_san_pham=" . $id_san_pham;
                            echo '
                            <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="main_cat_item">
								 <div class="item">
								 <form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
							<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" name="linksp" value="' . $linksp . '">	
							<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
										<div class="item-img">
										<a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 271px; height: 351px;"></a>
											<div class="tr-add-cart">
												<ul>
													<li><a class="fa fa-shopping-cart tr_cart" href="#"></a></li>
													<li>'.$ktdn.'</li>
													<li><a class="fa fa-heart tr_heart" href="#"></a></li>
													<li><a class="fa fa-search tr_search"
													href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
												</ul>
											</div>
										</div>
										<div class="item-new">
											<p>New</p>
											<span>-10%</span>
										</div>
										<div class="item-sub">
										<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
										<h5>' . $ten_san_pham . '</h5>
									</a>
									<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>
										</div>
										</form>
									</div> 
									</div>
						</div>';
                            // $i++;
                        }
                        ?>


                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="pagi_line"></div>
                            <div class="pagi_ul">
                                <ul id="pagination">
                                    <li><a href="#">Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5 ...</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>