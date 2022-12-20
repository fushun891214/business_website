<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>東吳拍賣站賣家中心</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="問題回報區"
  agent-id="2728add8-d5c5-4b45-9e6b-9998e3893119"
  language-code="zh-tw"
></df-messenger>
  <!-- Favicons -->
  <link href="assets/img/brand.png" rel="icon">
  <link href="assets/img/brand.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/dash_style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    
  <div class="d-flex align-items-center justify-content-between">
    <a href="seller_dash_index.html" class="logo d-flex align-items-center">
      <!-- 這邊放logo -->
      <img src="assets/img/brand.png" alt="">
      <!-- 這邊改左上角標題 -->
      <span class="d-none d-lg-block">東吳拍賣站</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <!-- End Logo -->

  <!-- <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div> -->
  <!-- End Search Bar -->
  
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul>
        <!-- End Notification Dropdown Items -->

      </li>
      <!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul>
        <!-- End Messages Dropdown Items -->

      </li>
      <!-- End Messages Nav -->

      <!-- header text -->
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="user_index.html" class="nav-link px-3 link-dark">首頁</a></li>
        <li><a href="user_index.html" class="nav-link px-3 link-dark">買家主頁</a></li>
        <li><a href="user_shopping_cart1.html" class="nav-link px-3 link-dark">購物車</a></li>
      </ul>
      <!-- End header text -->

      <li class="nav-item dropdown ">

        <a class="nav-link nav-profile d-flex align-items-center pe-3" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">蔡佳順</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>蔡佳順</h6>
            <span>賣家</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="seller_profile.php">
              <i class="bi bi-person"></i>
              <span>我的資訊</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="seller_payment_setting.html">
              <i class="bi bi-gear"></i>
              <span>付款設定</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="seller_help.php">
              <i class="bi bi-question-circle"></i>
              <span>幫助</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="user_index.html">
              <i class="bi bi-box-arrow-right"></i>
              <span>登出</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->

        
      </li><!-- End Profile Nav -->

    </ul>

    
  </nav><!-- End Icons Navigation -->

</header>

<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="seller_dash_index.html">
          <i class="bi bi-grid"></i>
          <span>賣家主頁</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#"">
          <i class="bi bi-basket"></i><span>商品管理</span><i class="bi bi-chevron-down ms-auto"></i>
          <span></span>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="seller_my_product.html">
              <i class="bi bi-circle"></i><span>我的商品</span>
            </a>
          </li>
          
          <li>
            <a href="seller_add_product .html">
              <i class="bi bi-circle"></i><span>新增商品</span>
            </a>
          </li>
          <li>
            <a href="seller_sale_products_delete.html">
              <i class="bi bi-circle"></i><span>下架商品</span>
            </a>
          </li>
          
        </ul>
      </li>
      <!-- End Components Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>財務管理</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="seller_my_wallet.html">
              <i class="bi bi-circle"></i><span>我的錢包</span>
            </a>
          </li>
          <li>
            <a href="seller_payment_setting.html">
              <i class="bi bi-circle"></i><span>付款設定</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>訂單管理</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="seller_my_order.html">
              <i class="bi bi-circle"></i><span>我的訂單</span>
            </a>
          </li>
          <li>
            <a href="seller_order_return.html">
              <i class="bi bi-circle"></i><span>退貨退款</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>會員中心</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="seller_profile.php">
              <i class="bi bi-circle"></i><span>賣家資訊</span>
            </a>
          </li>
          <li>
            <a href="seller_help.php">
              <i class="bi bi-circle"></i><span>幫助</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>物流中心</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="seller_logistics_setting.html">
              <i class="bi bi-circle"></i><span>物流設定</span>
            </a>
          </li>
          <li>
            <a href="seller_logistics_condition.html">
              <i class="bi bi-circle"></i><span>出貨狀態</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Charts Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">    
    <div class="pagetitle">
      <h1>我的商品</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="seller_dash_index.html">賣家主頁</a></li>
          <li class="breadcrumb-item">商品管理</li>
          <li class="breadcrumb-item active">我的商品</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <?php
      require_once('assets/php/selectl_product.php');
    ?>
    <section class="section">
      <div class="row align-items-top">
        <!-- 第一直排 -->
        <div class="col-lg-3">
          <div class="card">
            <img src="assets/img/product 1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php
                  if(mysqli_num_rows($result) > 0){
                    echo $name;
                  }
                ?>
              </h5>
              <p class="card-text">
              <?php
                   echo $introduce;
                ?>
              </p>

              <!-- <a href="#" class="card-link">編輯商品資訊</a> -->
              <button type="button" class="btn btn-danger rounded-pill float-end">審核未通過</button>
            </div>
          </div>
          <!-- Card with an image on top -->
      
          <div class="card">
            <img src="assets/img/product 3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">全白筆記本</h5>
              <p class="card-text">白到發光，因為我懶得做筆記，所以就覺得還是賣掉好了，開封未使用。</p>

              <a href="#" class="card-link">編輯商品資訊</a>
              <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div>
          <!-- End Card with an image on top -->
          <div class="card">
            <img src="assets/img/product 2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">筆記型電腦</h5>
              <p class="card-text">細心保養的二手筆記型電腦，電池續航力高，出門工作必備選擇。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-danger rounded-pill float-end">審核未通過</button>
            </div>
          </div>
          <!-- End Card with an image on top -->
        </div>
        <!-- 第二直排 -->
        <div class="col-lg-3">
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">球鞋</h5>
              <p class="card-text">網購買回來發現不太合腳，已過鑑賞期已過，故售出。以城中面交為佳，可接受郵局寄送。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-success rounded-pill float-end">審核未通過</button>
            </div>
          </div><!-- End Card with an image on top -->
        </div>
        <div class="col-lg-3">
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-success rounded-pill float-end">審核通過</button>
            </div>
          </div><!-- End Card with an image on top -->
        </div>
        <div class="col-lg-3">
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-warning rounded-pill float-end">審核中</button>
            </div>
          </div><!-- End Card with an image on top -->
          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/product-9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">商品名稱</h5>
              <p class="card-text">我懶得寫了，總之這邊是商品的資訊，盡量寫兩行就好，不對稱很醜。</p>
              <a href="#" class="card-link">編輯商品資訊</a>
                  <button type="button" class="btn btn-success rounded-pill float-end">審核通過</button>
            </div>
          </div><!-- End Card with an image on top -->
        </div>
      </div>
    </section>
    
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

      <!-- sidebar -->
      <script src="assets/js/users_profile_main.js"></script>

</body>

</html>
<?php
  mysqli_close($link);
?>