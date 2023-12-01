
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->


  <link rel="stylesheet" href="../../public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../public/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../public/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../public/assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="/public/assets/dist/img/customer-service-icon-user-with-laptop-computer-and-headphone-illustration-free-vector.jpg" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?act=home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.html" class="brand-link">
        <img src="/public/assets/dist/img/customer-service-icon-user-with-laptop-computer-and-headphone-illustration-free-vector.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php
    if (isset($_SESSION['user'])&&isset($_SESSION['pass'])) {
        $user = $_SESSION['user'];
        $pass = $_SESSION['pass'];
        echo ' <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/public/assets/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">'.$user.'</a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <a href="/app/controllers/login-form-20/logout.php" class="d-block">Logout</a>  
        <a href="index.php?act=thongtincanhan" class="d-block"> / Thông tin</a>
        </div>';
    } else {
        echo ' <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <a href="/app/controllers/login-form-20/login.php" class="d-block">Đăng nhập</a>
      </div></div>';
    }
    ?>
       

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <?php
          if(isset($_SESSION['user']))
          echo '<nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?act=home" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=danhsachdanhmuc" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=danhsachsanpham" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=danhsachbanner" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=danhsachnguoidung" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tài khoản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=binhluan" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bình luận
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=danhsachdonhang" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=thongke" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thống kê
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/app/views/demoxml.com/html/nimis/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Vào trang web
              </p>
            </a>
          </li>
          </ul>
        </nav>';
        else{
          echo '<li class="nav-item">
          <a href="/app/controllers/login-form-20/login.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Vui lòng Đăng Nhập để sử dụng các chức năng.
            </p>
          </a>
        </li>';
        }
        ?>
        
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>