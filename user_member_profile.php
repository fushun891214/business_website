<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>買家會員資料</title>
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/dash_style.css" rel="stylesheet">

    <!-- jquery 用來替換圖片 -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
  


  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.1
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <style>
      .hide{
    display:none;
}
    </style>

  <!-- Custom styles for this template -->
  <link href="assets/css/sidebars.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="user_index.html">首頁</a></li>
            <li><a href="user_member_profile.php">會員</a></li>
            <li><a href="seller_profile.php">賣家</a></li>
            <li><a href="admin_dash_index.html">管理員</a></li>
            <li><a href="assets/php/logout.php">登出</a></li>
          </ul>
        </div>
        <div class="col-md d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <span class=" text-white mt-2 mr-3"></span>
            <div>
              <p><em>如有任何商品問題，可以撥打(02)23395393，由我們將有專人為您處理。<br> <a href="#"></a></em></p>
            </div>
          </div>
        </div>
      
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand fs-2" href="user_index.html" >東吳拍賣站</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main align-items-center">
    <div class="container ">
      <div class="row ">
        <div class="flex-shrink-0 p-2 col-lg-1 " style="width: 280px;">
          <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <!-- <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-2 fw-semibold">首頁</span> -->
          </a>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
               <span class="fs-5" >會員中心</span> 
              </button>
              <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="user_member_profile.php" class="link-dark d-inline-flex text-decoration-none rounded">我的資訊</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">訂單狀況</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">商品退貨</a></li>
                  <li><a href="seller_profile.php" class="link-dark d-inline-flex text-decoration-none rounded">成為賣家</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Dashboard
              </button>
              <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                Orders
              </button>
              <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
                </ul>
              </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Account
              </button>
              <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                </ul>
              </div>
            </li> -->
          </ul>
        </div>
      
        <!-- Revenue Card -->
                <!-- Left side columns -->
      <div class="col-lg">
        <div class="row">

          
          <!-- Sales Card -->
          <!-- <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Sales <span>| Today</span></h5>

            </div>
          </div> -->
          <!-- End Sales Card -->

    <section class="dashboard">

        <div class="row">

          <!-- <a href="assets/php/selectl_user_information.php"> -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
    
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
    
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
    
                <h5 class="card-title">我的帳號</h5>
    
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                  <?php
                      require_once('assets/php/selectl_user_information.php');
                      // header("")
                      echo "<img src='$user_img->image' />";
                    ?> 
                  

                    <!-- <img src="" class="card-icon rounded-circle d-flex align-items-center justify-content-center" alt=""> -->
                    <!-- <i class="bi bi-currency-dollar"></i> -->


                  </div>
                  <div class="ps-3">
                    <?php
                      echo "<h6> $name </h6>";
                      echo "<p> $department </p>";
                    ?>    
                  </div>
                </div>
              </div>
    
            </div>
          </div><!-- End Revenue Card -->
    
          <div class="card col-xxl-8 col-md-8">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
    
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">個人資料</button>
                </li>
    
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">修改個人資料</button>
                </li>
    
                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">設定</button>
                </li> -->
    
                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> -->
    
              </ul>
              <div class="tab-content pt-2">
    
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">個人簡介</h5>
                  <?php
                      echo "<p> $introduce </p>";
                  ?>
                  <!-- <p class="small fst-italic">大家好，我是資四C的蔡佳順，通常會在城中，可當面交貨。</p> -->
    
                  <h5 class="card-title">個人資訊</h5>
    
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">名字</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                        echo "<p> $name </p>";
                      ?>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">系所</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                        echo "<p> $department </p>";
                      ?>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">電話</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                        echo "<p> $phone </p>";
                      ?>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">電子郵件</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                        echo "<p> $email </p>";
                      ?>
                    </div>
                  </div>
    
                </div>
          

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="assets\php\addmember_information.php" method="post" name="myForm"> <!--PHP的表單連結，method為post-->
                <div class="row mb-3" >
                  <label for="imgInp" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <!-- 這邊換照片 -->

                      <!-- <form id="form1" runat="server">
                        <input type="button" id="remove" value="remove" class="hide" control-id="ControlID-2" style="display: none;">
                        <input type="file" id="imgInp" control-id="ControlID-1"><br>
                        <img id="blah" src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png" alt="your image" style="display: none;">
                      </form> -->

                      

                      <!-- <form id="form1" runat="server"> -->
                        <input type="button" id="remove" value="remove" class="hide" control-id="ControlID-2" style="display: none;">
                        <input type="file" id="imgInp" control-id="ControlID-1" accept="image/*" required = "required"><br>
                        <img id="blah" src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png" width="100" height="100" alt="your image" style="display: none;">
                      <!-- </form> -->


                      <!-- <img src="assets/img/user.svg" alt="Profile">

                    <div class="pt-2"> 
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image">
                        <i class="bi bi-upload">
                          <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                          <input type="file" class="form-control d-none" id="customFile1" />
                        </i>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image">
                        <i class="bi bi-trash"></i>
                      </a>
                    </div> -->


                    <!-- <div class="pt-2"> 
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image">
                        <i class="bi bi-upload">
                          <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                          <input type="file" class="form-control d-none" id="customFile1" />
                        </i>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image">
                        <i class="bi bi-trash"></i>
                      </a>
                    </div> -->
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">名字</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="" required = "required">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="personal_introduce" class="col-md-4 col-lg-3 col-form-label">個人簡介</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="personal_introduce" class="form-control" id="personal_introduce" style="height: 100px" value="" required = "required">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="department" class="col-md-4 col-lg-3 col-form-label">系所</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="department" type="text" class="form-control" id="department" value="" required = "required">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="phone_number" class="col-md-4 col-lg-3 col-form-label">電話</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone_number" type="text" class="form-control" id="phone_number" value="" required = "required">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-lg-3 col-form-label">電子郵件</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="email" value="" required = "required">
                  </div>
                </div>



                <div class="text-center">
                  <button type="submit" class="btn btn-primary">儲存修改</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3"> 
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">賣場修改</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade"  checked>
                      <label class="form-check-label" for="changesMade">
                        可接受信用卡付款
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        可接受當面交易
                      </label>
                    </div>
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div> -->
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              <!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </section>

  </div>

    

  </main><!-- End #main -->

  <nav class="navbar"></nav>
  <nav class="navbar"></nav>

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end"><a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/sidebars.js"></script>

  <script type="text/javascript">
    $('#blah').hide();
    $('#remove').hide();

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
    
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
    
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      if ($('#imgInp').val() != "") {
    
        $('#remove').show();
        $('#blah').show('slow');
      } else {
        $('#remove').hide();
        $('#blah').hide('slow');
      }
      readURL(this);
    });
    
    
    $('#remove').click(function() {
      $('#imgInp').val('');
      $(this).hide();
      $('#blah').hide('slow');
      $('#blah').attr('src', 'http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png');
    });

  </script>

</body>

</html>