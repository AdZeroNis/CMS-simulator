<?php
include 'db.php';

$id=$_GET['id'];

$result=$conn->prepare("DELETE FROM blog WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
header('location:../page/admin/page/blog.php');