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

        <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a> -->
        <!-- End Notification Icon -->

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

        <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">3</span>
        </a> -->
        <!-- End Messages Icon -->

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
            <a class="dropdown-item d-flex align-items-center" href="user_member_profile.php">
              <i class="bi bi-person"></i>
              <span>我的資訊</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="seller_payment_setting.html">
              <i class="bi bi-gear "></i>
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
            <a class="dropdown-item d-flex align-items-center" href="assets/php/logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>登出</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->

        
      </li><!-- End Profile Nav -->
      <!-- 讓富順崩潰的地方 -->
      <!-- <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
          </div>
        </div>
        <nav class="navbar">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">                
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </nav>
      </div> -->
      
      <!-- <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav> -->
      

      
      
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
            <a href="seller_my_product.php">
              <i class="bi bi-circle"></i><span>我的商品</span>
            </a>
          </li>
          
          <li>
            <a href="seller_add_product .html">
              <i class="bi bi-circle"></i><span>新增商品</span>
            </a>
          </li>
          <li>
            <a href="seller_sale_products_delete.php">
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
            <a href="#">
              <i class="bi bi-circle"></i><span>物流設定</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>出貨狀態</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Charts Nav -->

      <li class="nav-item">
        <!-- <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a> -->
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Icons Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">    
    <div class="pagetitle">
      <h1>下架商品</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="seller_dash_index.html">賣家主頁</a></li>
          <li class="breadcrumb-item">商品管理</li>
          <li class="breadcrumb-item active">下架商品</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <div class="container">

      <section class="section"> 

        <nav class="navbar"></nav>
        <nav class="navbar"></nav>
        
      <div class="row">
        
            <div class="col-md-12">
            <!-- <h4>Bootstrap Snipp for Datatable</h4> -->
            <div class="table-responsive">
    
                    
                  <table id="mytable" class="table table-bordred table-striped">
                      
                      <thead>
                      
                      <th><input type="checkbox" id="checkall" /></th>
                      <th>品名</th>
                        <th>價格</th>
                        <th>上架日期</th>
                        <th>審核狀態</th>
                        <th>下架</th>
                      </thead>
        <tbody>
        <?php
          require_once('assets/php/selectl_product.php');
        ?>
        <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <?php
          echo "<td>$name</td>";
          echo "<td>$price</td>";
          echo "<td>$date</td>";
          echo "<td>$checkP</td>";
        ?>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span></button></p></td>
        </tr>
        
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>商品名稱</td>

        <td>$100</td>
        <td>2022/12/12</td>
        <td>審核通過</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span></button></p></td>
        </tr>
        
        
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>商品名稱</td>

        <td>$100</td>
        <td>2022/12/12</td>
        <td>審核通過</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span></button></p></td>
        </tr>
        
        
        
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>商品名稱</td>

        <td>$100</td>
        <td>2022/12/12</td>
        <td>審核通過</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span></button></p></td>
        
        
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>商品名稱</td>

        <td>$100</td>
        <td>2022/12/12</td>
        <td>審核通過</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span></button></p></td>
        </tr>
        
        </tbody>
            
    </table>
    
    <div class="clearfix"></div>
    <ul class="pagination pull-right">
      <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
      <li class="active"><a href="#">1|</a></li>
      <li><a href="#">2|</a></li>
      <li><a href="#">3|</a></li>
      <li><a href="#">4|</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
    </ul>
                    
                </div>
                
            </div>
      </div>
    </div>
    
    
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
          </div>
              <div class="modal-body">
              <div class="form-group">
            <input class="form-control " type="text" placeholder="Mohsin">
            </div>
            <div class="form-group">
            
            <input class="form-control " type="text" placeholder="Irshad">
            </div>
            <div class="form-group">
            <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
        
            
            </div>
          </div>
              <div class="modal-footer ">
            <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
          </div>
            </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
        </div>
        
        
        
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
          </div>
              <div class="modal-body">
          
          <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
          
          </div>
            <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
            </div>
        <!-- /.modal-content --> 
        
      </div>
          <!-- /.modal-dialog --> 
          
        </section> 
        
        </div>

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