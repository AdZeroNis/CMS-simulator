<?php 
 include "../php/loginCheck.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weblog</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">وبلاگ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">خانه <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          حساب کاربری
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a  href="register.php" class="dropdown-item" >ثبت نام </a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto">
      <input class="form-control mr-sm-2 placeholder" type="search" placeholder="چی میخوای؟" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جستجو</button>
    </form>
  </div>
</nav>
  </div><br><br><br><br><br><br><br><br>
  <div class="container">
    <div class="row">
        <div class="col-lg-4"> </div>
        <div class="col-12 col-lg-4">
            <form method="post" class="register-form">
                <input name="email" type="email" placeholder="ایمیل">
                <input name="password" type="password" placeholder="رمر عبور"><br>
                <input name="login" type="submit" value="ورود" class="btn btn-primary   register-submit">
                <input name="rem" type="checkbox" class="checkbox" style="width: 5%; margin-top: -17px;">
                <label class="rememberlabel" style="margin-right: 30px; margin-top: -50px;display: flex;font-size: 14px;" >مرا به خاطر بسپار</label>

            </form>
        </div>
        <div class="col-lg-4"> </div>
    </div>
  </div>
  <br><br><br><br><br>
  <footer>
  <div class="footer1">
    <div class="container">
      <div class="row d-none d-lg-flex">
      <div class="col-12 col-lg-6 foot "><br><br><br><br><br>
        <form>
          <input type="text" class="input-group" placeholder="ایمیل">
          <input type="submit" class="btn btn-success" value="عضویت">
        </form>
      </div>
      </div>
    </div>
  </div>
</footer>
</body>
<?php  if($errormassage){?>
  <script src="../js/alerterror.js"></script>
  <?php } ?>
<?php  if($loginCheck){?>
  <script src="../js/loginCheck.js"></script>
  <?php } ?>
<?php  if($successmassage){?>
  <script src="../js/alertsuccess.js"></script>
  <?php } ?>
<script src="../js/jquery-3.5.1.min.js"></script> 
  <script src="../js/bootstrap.min.js"></script> 
</html>