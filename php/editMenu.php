<?php
include 'db.php';

$id=$_GET['id'];

if(isset($_POST['Record'])){
    $title=$_POST['title'];
    $sort=$_POST['sort'];
    $rd=$_POST['rd'];

    $result=$conn->prepare("UPDATE menu SET title=? , sort=? , status=? WHERE id=?");
    $result->bindValue(1,$title);
    $result->bindValue(2,$sort);
    $result->bindValue(3,$rd);
    $result->bindValue(4,$id);
    $result->execute();

}
$result=$conn->prepare("SELECT * FROM menu WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
$menu=$result->fetch(PDO::FETCH_ASSOC);