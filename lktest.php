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

<?php 
    require("connection.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
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
      width: 100%;
    }

    body {
      background-color: whitesmoke;
    }
  
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: auto;
      }
      .btn-auth {
        display: block;
        justify-content: center;
      }

      #sidebar {
          padding-top: 10%;
      }

      #main table { 
                    width: auto !important; 
                } 
                    
                    #main table th { 
                        padding: 10px; 
                        background-color: #48577D; 
                        color: #fff; 
                        text-align: left; 
                        padding-right: 1px;
                        padding-left: 1px; 
                    } 
                        
                    #main table td { 
                        padding: 5px;
                        padding-right: 1px;
                        padding-left: 1px; 
                    } 
                    #main table tr { 
                        background-color: #d3dcf2; 
                    }

                    #main table { 
                    width: auto !important; 
                } 

      .lk-main {
      height: auto;
      width: 100%;
      padding-top: 10%;
      margin: auto;
      background-color: whitesmoke;
    }

    .lk-panel {
      background-color: white;
      border: black 3px;
      border-style: dotted;
      border-radius: 10px;
      width: 70%;
      height: auto;
      margin: auto;
      /*display: table;*/
      align-items: center;
      justify-content: center;
    }

    .panel-content {
      margin: auto;
      display: table-cell;
      width: 100%;
      padding-top: 10%;
      padding-bottom: 10%;
      height: auto;
      vertical-align: middle;
      align-items: center;
    }

    .lk-card {
       /* margin-left: 10%;
        margin-right: 10%; */
        display: block;
        justify-content: center;
    }

    }

    @media (min-width: 740px) and (max-width: 800px) {
      html,
      body,
      header {
        height: auto;
      }
      .btn-auth {
        justify-content: center;
      }

      #sidebar {
          padding-top: 10%;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header {
        height: auto;
      }
      .btn-auth {
        justify-content: center;
      }

      #main table { 
                    width: auto !important; 
                } 
                    
                    #main table th { 
                        padding: 10px; 
                        background-color: #48577D; 
                        color: #fff; 
                        text-align: left; 
                        padding-right: 1px;
                        padding-left: 1px; 
                    } 
                        
                    #main table td { 
                        padding: 5px;
                        padding-right: 1px;
                        padding-left: 1px; 
                    } 
                    #main table tr { 
                        background-color: #d3dcf2; 
                    }

                    #main table { 
                    width: auto !important; 
                } 

      .thumbnail {
        height: 120px;
        width:120px
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
    .lk-main {
        height: auto;
        width: 100;
        padding-top: 35px;
        background-color: whitesmoke;
        margin-right: 0px !important;
        margin-left: 0px !important;
    }

    .lk-panel {
        background-color: white;
        border: black 3px;
        border-style: dotted;
        border-radius: 10px;
        width: 95%;
        height: auto;
        margin: auto;

    }

    .panel-content {
        margin: auto;
        padding: 1%;

    }

    .lk-card {;
        display: block;
        justify-content: center;
    }
    footer{
      margin-top: 50px;
    }

    .btn-reg {
      width: 180px;
    }

    .btn-auth {
        height: auto;
        width: 70px;
    }
    .btn-nav-nav {
      margin-left:auto;

    }
    
    .lk {
        margin: auto;
    }

  </style>
  
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark indigo">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <strong>ЦЫРК</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
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
            <div class="lk md-form row">
            <h2 class="text my-2 white-text text-center font-weight-bold">Личный кабинет</h2>
            </div>
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
    <style>
        a {color: #48577D; text-decoration: none;} 
  
        a:hover {text-decoration: underline;}
        
        body {
            height: auto;
        }
        
        h1, h2 {margin-bottom: 15px} 
            
        h1 {font-size: 18px;} 
        h2 {font-size: 16px} 
            #main table { 
                    width: 480px; 
                } 
                    
                    #main table th { 
                        padding: 10px; 
                        background-color: #48577D; 
                        color: #fff; 
                        text-align: left; 
                    } 
                        
                    #main table td { 
                        padding: 5px; 
                    } 
                    #main table tr { 
                        background-color: #d3dcf2; 
                    }

                    #main table { 
                    width: 480px; 
                } 
                    
                #table-cart { 
                        padding: 10px; 
                        background-color: #d3dcf2; 
                        color: #fff; 
                        text-align: left; 
                    } 
                        
                /*    #table-cart table td { 
                        padding: 5px; 
                    } 
                */
                    #table-cart-text { 
                        background-color: #d3dcf2; 
                    }
                    
    </style>
    <div class="lk-main row">
      <form class="lk-panel">

          <div class="panel-content">
              <div class="waves-effect waves-light" style="padding-top: 5%; display: flex; align-items: center; justify-content: center">
                  <img style="background-color: darkgray;" src="http://placehold.it/100x100" height="100px" width="100px" alt="">
              </div>
              
              <h4 style="text-align: center;" class="text-black">Ваш никнейм - <b class="text font-weight-bold"><?php echo $_SESSION['username']; ?></b></p></h4>
              <div class="lk-card">

              <div id="container"> 
                
                <div id="main"> 
                        
                    <?php require($_page.".php"); ?> 

                </div><!--end of main--> 
                    
                <div id="sidebar"> 
                <h1>Cart</h1> 
                <div id="table-cart" class="table-cart">
                <?php 
                
                    if(isset($_SESSION['cart'])){ 
                        
                        $sql="SELECT * FROM products WHERE id_product IN ("; 
                        
                        foreach($_SESSION['cart'] as $id => $value) { 
                            $sql.=$id.","; 
                        } 
                        
                        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
                        $db = mysqli_connect('localhost', 'root', 'root', 'tickets');  
                        $query=mysqli_query($db, $sql); 
                        while($row=mysqli_fetch_array($query)){ 
                            
                        ?> 
                        
                            <p id="table-cart-text" class="text black-text"><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p> 
                        
                        <?php 
                            
                        } 
                    ?> 
                    </div>
                        <hr /> 
                        <a href="lktest.php?page=cart">Go to cart</a> 
                    <?php 
                        
                    }else{ 
                        
                        echo "<p>Your Cart is empty. Please add some products.</p>"; 
                        
                    } 
                
                ?>          
                </div><!--end of sidebar--> 
 
                </div><!--end container--> 


                
                
              </div>            
          </div>
    </form>
  </div>
</header>
  <!-- Main navigation -->


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    $('.btn-buy').click(function () {//клип на кнопку
        var id = $(this).attr('id'); //получаем id этой кнопки
            $.ajax({//передаем ajax-запросом данные
            type: "POST", //метод передачи данных
            url: 'addtocart.php',//php-файл для обработки данных
            data: {id_tov: id},//передаем наши данные
            success: function(data) {//
                $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
                }
            });
    });
</script>



</body>
</html>
