<?php
include 'db.php';
include 'registerinsert.php';
$loginCheck='';
$errormassage='';
$successmassage='';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $result = $conn->prepare("SELECT * FROM `user` WHERE email=? AND password=?");
    if(empty($email)|| empty($password)){
        $errormassage=true;
    }else{
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        if ($result->rowCount()>0){
            $rows=$result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['signin']=true;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['age'] = $rows['age'];
            $_SESSION['username'] = $rows['username'];
            $_SESSION['role'] = $rows['role'];
            if(isset($_POST['rem'])){
                setcookie('email',$_SESSION['email'],time()+60*60*24*7,'/'); 
                setcookie('password',$_SESSION['password'],time()+60*60*24*7,'/');          
             }

            header('location:../page/index.php');
        }else{
            $loginCheck=true;
        }
    }
    
}
?>