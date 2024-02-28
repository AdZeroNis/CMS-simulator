<?php  
session_start();
 include '../../php/db.php';

 if($_SESSION['role']!=2){
  header('location:../index.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>ADMIN</title>
</head>
<body>
<div class="container">
    <div class="row">
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" href="page/menu.php">منو</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="page/blog.php">وبلاگ</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="../page/comment.php">نویسندگان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
</div>
</body>
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>