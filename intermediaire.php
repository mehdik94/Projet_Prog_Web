<?php

include('connexion.php');

if(isset($_GET['link'])){
  $links=$_GET['link'];
}

$requete="SELECT * FROM `click_ecole` WHERE `link`= '".$links."';";
$req= $bd->query($requete);
$row=$req->fetch();


if ($row==false){
  $reque="INSERT INTO `click_ecole`(`link`, `count`) VALUES ('".$links."',1);";
}else{
  $reque="UPDATE `click_ecole` SET `count`=`count`+1 WHERE `link`='".$links."';";
}

$result= $bd->query($reque);
$req->closeCursor();
$result->closeCursor();
header('Location:'.$links);
exit();



 ?>
