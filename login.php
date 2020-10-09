<?php include('server.php') ?>
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
      width: 100%;
    }
  
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header {
        height: 600px;
      }
    }
  
    .btn .fa {
      margin-left: 3px;
    }
  
    .top-nav-collapse {
      background-color: #424f95 !important;
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
      background: url(../img/intro.jpg) no-repeat center center fixed; 
      width: auto;
      background-size: cover;
    }

    .register {
        height: 100%;
        width: 100%;
        margin: auto;
        background-color: whitesmoke;
    }

    .panel {
        background-color: white;
        border: black 3px;
        border-style: dotted;
        border-radius: 10px;
        width: 70%;
        height: 70%;
        margin: auto;
        display: table;
        align-items: center;
        justify-content: center;
    }

    .panel-content {
        margin: auto;
        display: table-cell;
        width: 100%;
        vertical-align: middle;
        align-items: center;
    }

    .mailpass {
        margin-left: 10%;
        margin-right: 10%;
        display: block;
        justify-content: center;
    }

    .btn-auth {
        height: auto;
        width: 70px;
    }
    .btn-nav-nav {
      margin-left:auto;

    }

  </style>
  
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark indigo fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <strong>ЦЫРК</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
  <!--
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">На главную
                <span class="sr-only">(сейчас)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#art">Артисты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#shdl">Расписание</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#platform">Площадки</a>
            </li>
          </ul>
  -->
          <div class="">

          </div>
          
          <ul class="navbar-nav btn-nav-nav nav-flex-icons">
            <li class="nav-item">
              <a id="button-nav" class="btn btn-outline-white nav-link waves-effect waves-light mr-2" href="register.php">Регистрация</a>
            </li>
            <li class="nav-item">
              <a id="button-nav" class="btn btn-white nav-link waves-effect waves-light mr-1" href="login.php"> Вход </a>
            </li> 
          </ul>
          <!--
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
            </div>
          </form>
          -->
        </div>
      </div>
    </nav>

<div class="register row">
    <form class="panel" method="post" action="login.php">



        <div class="panel-content">
            <div class="waves-effect waves-light" style="display: flex; align-items: center; justify-content: center">
                <img style="background-color: darkgray;" src="img/exit.png" height="100px" width="100px" alt="">
            </div>
            <h2 style="text-align: center;" class="text-black">Вход</h2>
            
            <div class="mailpass">
            <?php include('errors.php'); ?>  
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="username" id="inputIconEx1" class="form-control">
                    <label for="inputIconEx1">Введите логин</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="password" id="inputValidationEx2" class="form-control validate">
                    <label for="inputValidationEx2" data-error="wrong" data-success="right">Введите пароль</label>
                </div>
                <div class="md-form">
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                          <button type="submit" class="btn btn-auth btn-indigo nav-link waves-effect waves-light" name="login_user">Войти</button>
                        </li> 
                    </ul>
                </div>
                <p>
                  Ещё не зарыгестрированы? <a href="register.php">Зарыгестрироваться</a>
                </p>
            </div>            
        </div>
      </form>
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
          <i class="fas fa-search" aria-hidden="true"></i>
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

</body>
</html>
