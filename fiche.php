<link rel="stylesheet" href="style.css">
<body>
	<header>
  	<h1 class="round3 mainTitle" >SupFormation </h1>
	</header>
  <nav>
    <ul>
      <li><a class="active" href="index.php">Accueil</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
    </ul>
  </nav>

</body>
 <?php

include('connexion.php');
 $formation = json_decode($_POST['id_formation']);
 $requete="SELECT * FROM `click_formation` WHERE `etablissement`= '".$formation[0]."';";
 $requete_nbclicks="SELECT `count` FROM `click_formation` WHERE `etablissement`= '".$formation[0]."';";
 $req= $bd->query($requete);
 $row=$req->fetch();
 $req2= $bd->query($requete_nbclicks);
 $row2=$req2->fetch();


 if ($row==false){
   $reque="INSERT INTO `click_formation`(`etablissement`, `count`) VALUES ('".$formation[0]."',1);";
 }else{
   $reque="UPDATE `click_formation` SET `count`=`count`+1 WHERE `etablissement`='".$formation[0]."';";
 }

 $count=0;

 if ($row2==false){
	 $count=0;
 }else{

		 $count=$row2['count'];
 }
 $result= $bd->query($reque);


 echo "<p> Nombre de clics vers cette fiche: ".$count."  </p>";

 echo "<p> Type de diplome: ".$formation[1]."  </p>";

 $req->closeCursor();
 $result->closeCursor();
 $req2->closeCursor();






 ?>
