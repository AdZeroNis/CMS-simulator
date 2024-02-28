<?php
// session_start();
include_once 'jdf.php'; 

$servername="localhost";
$username="root";
$password="";
$dbname="weblog";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}

if(isset($_COOKIE['email'])){
    $result = $conn->prepare("SELECT * FROM `user` WHERE email=? AND password=?");
    $result->bindParam(1, $_COOKIE['email']);
    $result->bindParam(2, $_COOKIE['password']);
    $result->execute();
    if ($result->rowCount()>0){
        $rows=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['signin']=true;
        $_SESSION['email']=$rows['email'];
        $_SESSION['password']=$rows['password'];
        $_SESSION['age'] = $rows['age'];
        $_SESSION['username'] = $rows['username'];
        $_SESSION['role'] = $rows['role'];
}
}