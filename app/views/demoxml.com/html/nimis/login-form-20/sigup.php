<?php
session_start();
include "C:/Users/PC TGDD/Desktop/duan1/app/models/pdo.php";
include "C:/Users/PC TGDD/Desktop/duan1/app/models/nguoidung.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <!-- <h2 class="heading-section">Login #10</h2> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Sign Up</h3>

                        <?php
                        
                        $login_err = "";
                        $pattern = '/^(0|\+84)([0-9]{9,10})$/';
                        //preg_match kiểm tra đúng biểu thức chính quy hay không

                        if (isset($_POST['username']) && isset($_POST['password'])) {
                            if(preg_match($pattern,$_POST['sdt'])!=true) $login_err="bạn chưa nhập đúng định dạng số điện thoại"; else
                             if (isset($_POST['repassword'])&&$_POST['password'] != $_POST['repassword']) $login_err = "Password và repassword chưa khớp";
                             else {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $hoten = $_POST['hoten'];
                                $email = $_POST['email'];
                                $sdt = $_POST['sdt'];
                                $diachi = $_POST['diachi'];
                                $role_id = 6;
                            $login_err = "Đăng ký thành công, vui lòng đăng nhập.";
                            insert_nguoi_dung($username, $password, $hoten, $email, $sdt, $diachi, $role_id);
                             }
                             
                            
                            
                        }
                        ?>
                        <form action="" method="post">
                            <div class="flexform" style="display: flex;padding: 3px;">
                                <div class="box">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Họ Tên" required name="hoten">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Số Điện Thoại" required name="sdt">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Địa chỉ" required name="diachi">
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" required name="username">
                                    </div>
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password">

                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" placeholder="RePassword" required name="repassword">

                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    

                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3" name="dangky">Sign Up</button>

                                    </div>
                                </div>
                            </div>
<?php echo $login_err ?>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="login.php" style="color: #fff">Log In</a>
                                </div>

                            </div>
                        </form>

                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>