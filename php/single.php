<?php
include 'db.php';


$blogs=$conn->prepare("SELECT * FROM blog WHERE title=?");
$blogs->bindValue(1,$_GET['post']);
$blogs->execute();
$blogs=$blogs->fetch(PDO::FETCH_ASSOC);

$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);
 
$idblog= $blogs['id'];
$views=$conn->prepare("INSERT INTO view (post) VALUES (?)");
$views->bindValue(1,$idblog);
$views->execute();


$result=$conn->prepare("SELECT COUNT(id) FROM view WHERE post=?");
$result->bindValue(1,$idblog);
$result->execute();
$numviews=$result->fetch(PDO::FETCH_ASSOC);
foreach($numviews as $numview){}

