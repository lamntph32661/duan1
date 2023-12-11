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

<!-- <section class="main_cart_area">
    <div class="container">

        <br>
        <div class="d_table">
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
        <td><a href="' . $_SESSION['giohang'][$i][3] . '">' . substr($_SESSION['giohang'][$i][1], 0, 40) . '...</a></td>
        <td><img src="/public/uploads/' . $_SESSION['giohang'][$i][2] . '" alt="" style="height: 80px;"></td>
        <td>' . $_SESSION['giohang'][$i][4] . '</td>
        <td><span>' . $_SESSION['giohang'][$i][5] . '</span><input type="hidden" name="" value="' . $i . '"></td>
        <td>' . ($_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]) . '</td>
        <td><a href="index.php?act=del&i=' . $i . '"  class="btnfunction">Xóa</a></td>
    </tr>';
            }
            $kq .= '<tr><td colspan="5"></td><td>' . $tong . '</td><td><a href="index.php?act=checkout"  class="btnfunction">Thanh Toán</a>    <a href="index.php?act=del"  class="btnfunction">Xóa giỏ hàng</a></td></tr>';

            $kq .= '</tbody>
</table>';
            echo $kq;
            ?></div>

    </div>
</section> -->
<section class="main_cart_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="main_cart_left">
                    <div class="cart_heading">
                        <div class="h_item1">
                            <p>product</p>
                        </div>
                        <div class="h_item2">
                            <p>Price</p>
                        </div>
                        <div class="h_item3">
                            <p>Quantity</p>
                        </div>
                        <div class="h_item4" >
                            <p>total</p>
                        </div>
                        
                    </div>
                    <?php
                    $tong = 0;
                    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                        // $ttien = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
                        $tong +=  $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5];
                        echo '<div class="cart_item">
                        <div class="cart_item_img">
                        <img src="/public/uploads/' . $_SESSION['giohang'][$i][2] . '" alt="" style="height: 85px;" />
                            <p><a href="' . $_SESSION['giohang'][$i][3] . '">' . substr($_SESSION['giohang'][$i][1], 0, 40) . '...</a></p>
                            <a href="index.php?act=del&i=' . $i . '"  class="btnfunction" style="line-height: 50px;">Xóa</a>
                        </div>
                        <div class="cart_price">
                            <p>$' . $_SESSION['giohang'][$i][4] . '</p>
                        </div>
                        <div class="cart_quantity">
                            <ul>
                                
                                <li><span>' . $_SESSION['giohang'][$i][5] . '</span><input type="hidden" name="" value="' . $i . '"></li>
                                
                            </ul>
                        </div>
                        <div class="cart_total">
                            <p>$' . ($_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][5]) . '</p>
                            <span><i class="fa fa-close"></i></span>
                        </div>
                    </div>';
                    }

                    ?>
                    
                    <!-- <div class="cart_item">
                        <div class="cart_item_img">
                            <img src="images/cart_img2.jpg" alt="" />
                            <p>structured collarless <br>coat</p>
                        </div>
                        <div class="cart_price">
                            <p>$80</p>
                        </div>
                        <div class="cart_quantity">
                            <ul>
                                <li><a href="#"><i class="fa fa-minus"></i></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="cart_total">
                            <p>$180.00</p>
                            <span><i class="fa fa-close"></i></span>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_item_img">
                            <img src="images/cart_img3.jpg" alt="" />
                            <p>houndsmooth wool <br>t-shirt</p>
                        </div>
                        <div class="cart_price">
                            <p>$110</p>
                        </div>
                        <div class="cart_quantity">
                            <ul>
                                <li><a href="#"><i class="fa fa-minus"></i></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="cart_total">
                            <p>$180.00</p>
                            <span><i class="fa fa-close"></i></span>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_item_img">
                            <img src="images/cart_img4.jpg" alt="" />
                            <p>men’s fashion blue <br>jean coat</p>
                        </div>
                        <div class="cart_price">
                            <p>$70</p>
                        </div>
                        <div class="cart_quantity">
                            <ul>
                                <li><a href="#"><i class="fa fa-minus"></i></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="cart_total">
                            <p>$180.00</p>
                            <span><i class="fa fa-close"></i></span>
                        </div>
                    </div> -->
                    <!-- <div class="coupon_box">
                        <input type="text" placeholder="coupon code" />
                        <input type="submit" value="apply coupon">
                    </div> -->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="main_cart_right">
                    <div class="product_form_total">
                        <div class="panel-group" id="home-accordion" role="tablist" aria-multiselectable="true">
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#home-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            CALCULATE SHIPPING
                                            <span class="floatright"><i class="fa fa-minus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <select class="selectpicker">
                                            <option>Melbourne</option>
                                            <option>Dhaka</option>
                                            <option>New York</option>
                                        </select>
                                        <select class="selectpicker sel_state">
                                            <option>Sate/Country</option>
                                            <option>Bangladesh</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                            <option>Canda</option>
                                            <option>Australia</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/zip" />
                                        <input type="submit" value="Update Totals">
                                    </div>
                                </div>
                            </div> -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#home-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Cart totals
                                            <span class="floatright"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body cart_p_body">
                                        
                                        <div class="c_single_item cart_last_total">
                                            <p>Shipping Charge</p>
                                            <span>Free</span>
                                        </div>
                                        <div class="c_total_item sp_single_item">
                                            <p>Total</p>
                                            <span>$<?=$tong?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?act=del"  class="cart_update">Xóa giỏ hàng</a>
                        <a href="index.php?act=checkout"  class="cart_update">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>