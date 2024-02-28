<?php
include 'db.php';
session_start();

 if($_SESSION['role']!=2){
  header('location:../index.php');
 }
 $num=1;
if(isset($_POST['Record'])){

    $title=$_POST['title'];
    $image=$_POST['image'];
    $content=$_POST['content'];
    $writer=$_POST['writer'];
    $date = time();

    $result=$conn->prepare("INSERT INTO blog (title,image,content,writer,date) VALUES(?,?,?,?,?) ");
    $result->bindValue(1,$title);
    $result->bindValue(2,$image);
    $result->bindValue(3,$content);
    $result->bindValue(4,$writer);
    $result->bindValue(5,$date);
    $result->execute();
}

$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);

$result=$conn->prepare("SELECT * FROM blog ORDER BY id DESC" );
$result->execute();
$blogs=$result->fetchAll(PDO::FETCH_ASSOC);