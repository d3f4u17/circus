<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Добро Пожаловать!</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/circkk.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="fonts/Bellota-Regular.ttf">
  <!--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }
  
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
      .md-form {
        display: flex;
        align-items: left;
        justify-content: left;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header {
        height: 600px;
      }
      .md-form {
        display: flex;
        align-items: left;
        justify-content: left;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
      }
    }
  
    .btn .fa {
      margin-left: 3px;
    }
  
    .top-nav-collapse {
      background-color: #424f95 !important;
    }
  
    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }
  
    @media (max-width: 991px) {
     .navbar:not(.top-nav-collapse) {
      background: #424f95 !important;
     }
    }
  
    .btn-white {
      color: black !important;
    }
  
    h6 {
      line-height: 1.7;
    }
  
    .rgba-gradient {
      background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
      background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
      background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
      background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
      background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    }
    #intro {
      background: url(img/intro.jpg) no-repeat center center fixed; 
      width: auto;
      background-size: cover;
    }
    .md-form {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 0px !important;
      margin-bottom: 0px !important;
    }
    .btn-logout {
      padding: 3px !important;
      margin: 5px !important;
    }
  </style>
  
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>ЦЫРК</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">На главную
                <span class="sr-only">(сейчас)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#art">Артисты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#shdl">Расписание</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#platform">Площадки</a>
            </li>
          </ul>


          <div class="md-form row">

          		<!-- notification message -->
          <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
              <h3>
                <?php 
                  echo $_SESSION['success']; 
                  unset($_SESSION['success']);
                ?>
              </h3>
            </div>
          <?php endif ?>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
            <p class="text white-text my-0 mr-5"><a class="text white-text font-weight-bold" href="lktest.php">Личный кабинет</a></p>
            <p class="text white-text my-1">Добро пожаловать <b class="text font-weight-bold"><?php echo $_SESSION['username']; ?></b></p>
            <p class="my-2"> <a href="index.php?logout='1'" style="" class="btn btn-logout btn-white nav-link waves-effect waves-light">Выйти</a> </p>
            
          <?php endif ?>

          </div>
          <!--
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a id="button-nav" class="btn btn-outline-white nav-link waves-effect waves-light mr-2" href="register.php">Регистрация</a>
            </li>
            <li class="nav-item">
              <a id="button-nav" class="btn btn-white nav-link waves-effect waves-light mr-1" href="login.php"> Вход </a>
            </li> 
          </ul>
          
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
            </div>
          </form>
          -->
        </div>
      </div>
    </nav>
    <!-- Full Page Intro -->
    <div id="intro" class="view">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
              <h1 class="h1-responsive font-weight-bold mt-sm-5">Здравствуйте!</h1>
              <hr class="hr-light">
              <h6 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi
                fuga nesciunt
                dolorum nulla magnam veniam sapiente! Commodi sequi non animi ea dolor molestiae
                iste.</h6>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  <!-- Main navigation -->


  <div id="art" class="container my-5">


    <!--Section: Content-->
    <section class="team-section text-center dark-grey-text">
  
      <!-- Section heading -->
      <h3 class="font-weight-bold pb-2 mb-4">Наши артисты</h3>
      <!-- Section description -->
      <p class="text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
        eum porro a pariatur veniam.</p>
  
      <!-- Grid row -->
      <div class="row text-center">
  
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <div class=" waves-effect waves-light avatar mx-auto">
            <img src="img/clown.jpg" class="rounded z-depth-1-half" alt="Sample avatar">
          </div>
          <h4 class="font-weight-bold dark-grey-text my-4">Семён Семёныч</h4>
          <h6 class="text-uppercase grey-text mb-3"><strong>Клоун</strong></h6>
          <!-- Facebook-->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!--Dribbble -->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
            <i class="fab fa-dribbble"></i>
          </a>
          <!-- Twitter -->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <div class=" waves-effect waves-light avatar mx-auto">
            <img src="img/acrobat.jpg" class="rounded z-depth-1-half" alt="Sample avatar">
          </div>
          <h4 class="font-weight-bold dark-grey-text my-4">Маня Врировна</h4>
          <h6 class="text-uppercase grey-text mb-3"><strong>Акробатка</strong></h6>
          <!--Email-->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
            <i class="fas fa-envelope"></i>
          </a>
          <!-- Facebook-->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!-- GitHub-->
          <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <div class=" waves-effect waves-light avatar mx-auto">
            <img src="img/abu.jpg" class="rounded z-depth-1-half" alt="Sample avatar">
          </div>
          <h4 class="font-weight-bold dark-grey-text my-4">Абу</h4>
          <h6 class="text-uppercase grey-text mb-3"><strong>Ручная обезьянка</strong></h6>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </section>
    <!--Section: Content-->
  
  
  </div>

  <hr class="my-5 hr-dark">


  <div id="shdl" class="container my-5">
  
    <!--Section: Content-->
    <section class="dark-grey-text">
  
      <!-- Section heading -->
      <h3 class="text-center font-weight-bold mb-5">Расписание</h3>
  
      <!-- Grid row -->
      <div class="row">
        
        <div class="col-12 mb-4">
          <div class="card z-depth-0 bordered border-light">
            <div class="card-body p-0">
              <div class="row mx-0">
                <div class="col-md-8 grey lighten-4 rounded-left pt-4">
                  <h5 class="font-weight-bold">Утреннее представление</h5>
                  <p class="font-weight-light text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
                </div>
                <div class="col-md-4 text-center pt-4">
                  <p class="h1 font-weight-normal">$10<span class="font-small grey-text"> с человека</span></p>
                  <p class="h5 font-weight-light text-muted mb-4">С 8:00 до 10:00</p>
                  <p class="h5 font-weight-light text-muted mb-4">22.22.22</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-12 mb-4">
          <div class="card z-depth-2">
            <div class="card-body p-0">
              <div class="row mx-0">
                <div class="col-md-8 grey lighten-4 rounded-left pt-4">
                  <h5 class="font-weight-bold">Дневное представление</h5>
                  <p class="font-weight-light text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
                </div>
                <div class="col-md-4 text-center pt-4">
                  <p class="h1 font-weight-normal">$15<span class="font-small grey-text"> с человека</span></p>
                  <p class="h5 font-weight-light text-muted mb-4">С 12:00 до 14:00</p>
                  <p class="h5 font-weight-light text-muted mb-4">23.23.23</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-12 mb-4">
          <div class="card z-depth-0 bordered border-light">
            <div class="card-body p-0">
              <div class="row mx-0">
                <div class="col-md-8 grey lighten-4 rounded-left pt-4">
                  <h5 class="font-weight-bold">Вечернее представление</h5>
                  <p class="font-weight-light text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
                </div>
                <div class="col-md-4 text-center pt-4">
                  <p class="h1 font-weight-normal">$20<span class="font-small grey-text"> с человека</span></p>
                  <p class="h5 font-weight-light text-muted mb-4">С 18:00 до 20:00</p>
                  <p class="h5 font-weight-light text-muted mb-4">24.24.24</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-12 mb-4">
          <div class="card z-depth-0 bordered border-light">
            <div class="card-body p-0">
              <div class="row mx-0">
                <div class="col-md-8 grey lighten-4 rounded-left pt-4">
                  <h5 class="font-weight-bold">Ночное представление</h5>
                  <p class="font-weight-light text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
                </div>
                <div class="col-md-4 text-center pt-4">
                  <p class="h1 font-weight-normal">$25<span class="font-small grey-text"> с человека</span></p>
                  <p class="h5 font-weight-light text-muted mb-4">С 22:00 до 0:00</p>
                  <p class="h5 font-weight-light text-muted mb-4">25.25.25</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- Grid row -->
  
    </section>
    <!--Section: Content-->
  
  
  </div>


  <hr class="my-5 hr-dark">
  


  <div id="platform" class="container my-5">


    <!--Section: Content-->
    <section class="text-center dark-grey-text">
      
      <style>
        .carousel-multi-item.v-2 .carousel-inner .carousel-item.active,
        .carousel-multi-item.v-2 .carousel-item-next,
        .carousel-multi-item.v-2 .carousel-item-prev {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex; }
        .carousel-multi-item.v-2 .carousel-item-right.active,
        .carousel-multi-item.v-2 .carousel-item-next {
          -webkit-transform: translateX(50%);
          -ms-transform: translateX(50%);
          transform: translateX(50%); }
        .carousel-multi-item.v-2 .carousel-item-left.active,
        .carousel-multi-item.v-2 .carousel-item-prev {
          -webkit-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          transform: translateX(-50%); }
        .carousel-multi-item.v-2 .carousel-item-right,
        .carousel-multi-item.v-2 .carousel-item-left {
          -webkit-transform: translateX(0);
          -ms-transform: translateX(0);
          transform: translateX(0); }

          @media (max-width: 740px) {
            .crvv {
              height: auto;
            }
          }
      </style>
      
      <h3 class="font-weight-bold pb-4 mb-0 text-center">Площадки</h3>
      <p class="h5 font-weight-light text-muted mb-4">Наш цирк выступал на множестве различных площадок!</p>
      
  
      <div class="row crvv">
        <div class="col-md-12">
  
          <div id="carousel-example-multi" class="waves-effect waves-light carousel slide carousel-multi-item v-2" data-ride="carousel">
  
            <!--Controls-->
            <div class="controls-top">
              <a class="btn-floating bg-transparent z-depth-0 m-0" href="#carousel-example-multi" data-slide="prev"><i class="dark-grey-text fas fa-chevron-left"></i></a>
              <a class="btn-floating bg-transparent z-depth-0 m-0" href="#carousel-example-multi" data-slide="next"><i class="dark-grey-text fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->
  
            <div class="carousel-inner" role="listbox">
  
              <div class="carousel-item active">
                <div class="col-12 col-md-6 mb-4 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon1.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-6 mb-4 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon2.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-6 mb-4 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon3.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-6 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon4.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-6 mb-4 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon5.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-6 mb-4 mx-auto">
                  <div class="view crvv rounded z-depth-1-half">
                    <img src="img/icon6.jpg" class="img-fluid rounded" alt="Sample image">
                  </div>
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </div>
  
    </section>
    <!--Section: Content-->
  
  
  </div>


  <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
 
  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Поиск"
            aria-label="Search">
          <a href="putin.html"><i class="fas fa-search" aria-hidden="true" ></i></a>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Введите почту"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Подписаться на рассылку</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2077 НЕ Copyright:
    <a href="https://2ch.hk"> цырк.рф</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script>
    new WOW().init();
  </script>
  <script> 
    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function () {
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < 4; i++) {
        next = next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      }
    });
  </script>

</body>
</html>
