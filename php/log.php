<?php
session_start();
setcookie('email',$_SESSION['email'],time()-1,'/'); 
setcookie('password',$_SESSION['password'],time()-1,'/'); 
session_destroy();
header('location:../page/login.php');