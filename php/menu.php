<?php
include 'db.php';
session_start();

 if($_SESSION['role']!=2){
  header('location:../index.php');
 }
$num = 1;
if(isset($_POST['Record'])){
 
    $title=$_POST['title'];
    $sort=$_POST['sort'];
    $rd=$_POST['rd'];
    $result=$conn->prepare("INSERT INTO menu(title,sort,status) VALUES(?,?,?)");
    $result->bindValue(1,$title);
    $result->bindValue(2,$sort);
    $result->bindValue(3,$rd);
    $result->execute();
}
$result=$conn->prepare("SELECT * FROM menu");
$result->execute();
$menus=$result->fetchAll(PDO::FETCH_ASSOC);