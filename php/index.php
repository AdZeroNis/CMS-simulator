<?php

include 'db.php';

if(isset($_POST['search'])){
    $search=$_POST['searchcontent'];
    header("Location:search.php?post=$search");
}
$result=$conn->prepare("SELECT COUNT(id) FROM blog");
$result->execute();
$numblogs=$result->fetch(PDO::FETCH_ASSOC);
foreach($numblogs as $numblog){}



$result=$conn->prepare("SELECT COUNT(id) FROM writers");
$result->execute();
$numwriters=$result->fetch(PDO::FETCH_ASSOC);
foreach($numwriters as $numwriter){}


$result=$conn->prepare("SELECT COUNT(id) FROM user");
$result->execute();
$numusers=$result->fetch(PDO::FETCH_ASSOC);
foreach($numusers as $numuser){}


$menus=$conn->prepare("SELECT * FROM menu  ORDER BY sort");
$menus->execute();
$menus=$menus->fetchAll(PDO::FETCH_ASSOC);



$blogs=$conn->prepare("SELECT * FROM blog order by date LIMIT  12");
$blogs->execute();
$blogs=$blogs->fetchAll(PDO::FETCH_ASSOC);


function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>