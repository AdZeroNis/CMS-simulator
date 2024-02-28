<?php
include 'db.php';
session_start();
$errorCheck='';
$successmassage='';
$errormassage='';
if(isset($_POST['signup'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];

    $checkuser=$conn->prepare("SELECT email FROM user WHERE email=?");
    $checkuser->bindValue(1,$email);
    $checkuser->execute();

    if($checkuser->rowCount()>0){
        $errorCheck=true;
    }else{
        $result=$conn->prepare("INSERT INTO user(username,email,password,age) VALUES(?,?,?,?)");
        if(empty($username)|| empty($email)|| empty($password)){
            $errormassage=true;
        }else{
            $result->bindValue(1,$username);
            $result->bindValue(2,$email);
            $result->bindValue(3,$password);
            $result->bindValue(4,$age);
            if($result->execute()){
                $_SESSION['signin']=true;
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $_SESSION['age']=$age;
                $_SESSION['username']=$username;
                header('location:../page/index.php');
            }else{
                $successmassage=false;
            }
        }
    }
}
?>
