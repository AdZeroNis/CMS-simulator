<?php 
session_start();
include '../php/index.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weblog</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
      </li>
      <?php foreach($menus as $menu) {  if($menu['status']==1){ ?>

<li class="nav-item">
<a class="nav-link" href="#"><?php echo $menu['title']; ?> </a>
</li>

<?php }} ?>
      <li class="nav-item dropdown">
      <?php if (isset($_SESSION['signin'])){?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          حساب کاربری
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ایمیل : <?php echo $_SESSION['email']; ?></a>
          <a class="dropdown-item" href="#">سن : <?php echo $_SESSION['age']; ?></a>
          <a class="dropdown-item" href="#">اسم : <?php echo $_SESSION['username']; ?></a>
<?php if (isset($_SESSION['signin']) && isset($_SESSION['role'])) { ?>
    <?php if ($_SESSION['role'] ==  2) { ?>
        <a class="dropdown-item" href="admin/admin.php">پنل  ادمین : <?php echo $_SESSION['role']; ?></a>
    <?php } ?>
          <a class="dropdown-item" href="../php/log.php">خروج</a>
        </div>
        <?php } ?>
      </li>
      <a class="dropdown-item" href="../php/log.php">خروج</a>
      <?php } else { ?>
        <li class="nav-item active">
        <a class="nav-link" href="login.php">ورود<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">ثبت نام <span class="sr-only">(current)</span></a>
      </li>
      <?php } ?>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto" method="post">
      <input class="form-control mr-sm-2 placeholder" type="search" placeholder="چی میخوای؟" aria-label="Search" name="searchcontent">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">جستجو</button>
    </form>
  </div>
</nav>
<br><br>
<div>





    <div class="row d-none d-lg-flex">
        <div class="col-4 information-site">
            <img src="../Asset/image/stat-time.svg">
            <span>تعداد مقالات</span>
            <span><?php echo $numblog; ?></span>
        </div>
        <div class="col-4 information-site">
             <img src="../Asset/image/stat-teacher.svg">
             <span>تعداد نویسندگان</span>
             <span><?php echo $numwriter; ?></span>
        </div>
        <div class="col-4 information-site">
              <img src="../Asset/image/stat-student.svg">
              <span>تعداد کاربران</span>
              <span><?php echo $numuser; ?></span>
        </div>
    </div>
</div>
<br class="d-none d-lg-block">
<div>
  <h4 style="color:#fff; padding:10px">مقالات</h4>
  <div class="row">
  <?php foreach($blogs as $blog){ ?>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href="single.php?post=<?php echo $blog['title']; ?>"><img src="<?php echo $blog['image']; ?>" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="single.php?post=<?php echo $blog['title']; ?>" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href=""><?php echo $blog['title']; ?></a></p>
       <span><?php echo limit_words($blog['content'],18). "..." ?> </span>
       </div>
       </div>
    </div>
    <?php } ?>
    
    </div>
  </div>
</div>
  </div>
  <br><br><br>
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
<script src="../js/jquery-3.5.1.min.js"></script> 
  <script src="../js/bootstrap.min.js"></script> 
</html>