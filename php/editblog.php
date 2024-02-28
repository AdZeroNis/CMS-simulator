<?php
include 'db.php';

$id=$_GET['id'];

if(isset($_POST['Record'])){
    $title=$_POST['title'];
    $image=$_POST['image'];
    $content=$_POST['content'];
    $writer=$_POST['writer'];
    $date = time();


    $result=$conn->prepare("UPDATE blog SET title=? , image=? , content=? , writer=? , date=? WHERE id=?");
    $result->bindValue(1,$title);
    $result->bindValue(2,$image);
    $result->bindValue(3,$content);
    $result->bindValue(4,$writer);
    $result->bindValue(5,$date);
    $result->bindValue(6,$id);
    $result->execute();
}

$result=$conn->prepare("SELECT * FROM blog WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
$blogs=$result->fetch(PDO::FETCH_ASSOC);


$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);