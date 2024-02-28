<?php 
session_start();
include '../php/index.php';
include '../php/single.php';;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blogs['title']; ?></title>
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
      <?php } else { ?>
        <li class="nav-item active">
        <a class="nav-link" href="login.php">ورود<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">ثبت نام <span class="sr-only">(current)</span></a>
      </li>
      <?php } ?>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto">
    </form>
  </div>
</nav>
<br><br>
<div>
</nav>
  </div>
  <div class="container">
    <div class="row">
        <div class="post-page">
            <div class="image-post">
                <img src="<?php echo $blogs['image']; ?>" style="max-width: 550px;">
            </div>
            <div class="information-person">
            <div class="eye">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
            </svg> <?php echo $numview; ?> </div>
            <div class="calendar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
            </svg> <?php echo jdate('d F', $blogs['date']) ?></div>
            <div class="person">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg> <?php foreach($writers as $writer){
                        if($blogs['writer']==$writer['id']){
                          echo $writer['name'];
                        }
                      }
                      ?>
              </div>

            </div>
            <br>
            <div class="content-page">
                <h5 style="color:#fff"><?php echo $blogs['title']; ?></h5><br>
                <?php echo $blogs['content']; ?>
        
             </div>

            </div>
            </div>
        </div>
        </div>
    </div>
  </div>
  <br><br> 
</body>
<script src="../js/jquery-3.5.1.min.js"></script> 
  <script src="../js/bootstrap.min.js"></script> 
</html>