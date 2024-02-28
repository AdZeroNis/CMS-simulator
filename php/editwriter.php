<?php
include 'db.php';

$id=$_GET['id'];

if(isset($_POST['Record'])){
    $name=$_POST['name'];

    $result=$conn->prepare("UPDATE writers SET name=?  WHERE id=?");
    $result->bindValue(1,$name);
    $result->bindValue(2,$id);
    $result->execute();

}
$result=$conn->prepare("SELECT * FROM writers WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
$menu=$result->fetch(PDO::FETCH_ASSOC);