<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="style.css">
<title>Fiche</title>
</head>
<body>
	<header>
  	<h1 class="round3 mainTitle" >SupFormation </h1>
	</header>
  <nav>
    <ul>
      <li><a class="active" href="index.php">Accueil</a></li>
      <li><a href="https://github.com/mehdik94/Projet_Prog_Web">Github</a></li>
      <li><a href="https://www.linkedin.com/in/mehdi-koumad-048980174/">Contact</a></li>
    </ul>
  </nav>


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
   $reque="INSERT INTO `click_formation`(`etablissement`, `count`,`nom_etab`,`intit_formation`) VALUES ('".$formation[0]."',1,'".$formation[3]."','".$formation[2]."');";
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

 echo "<p> Intitulé de la formation: ".$formation[2]."  </p>";

 echo "<p> Nom de l'établissement: ".$formation[3]."  </p>";

 echo "<p> Région de l'établissement: ".$formation[4]."  </p>";

 echo "<p> Secteur disciplinaire: ".$formation[5]."  </p>";

 echo "<p> Département de l'établissement : ".$formation[6]."  </p>";

 echo "<p> Effectif total au sein de la formation: ".$formation[7]."  </p>";

 echo "<p> Nombre d'hommes dans la formation : ".$formation[8]."  </p>";

 echo "<p> Nombre de femmes dans la formation : ".$formation[9]."  </p>";




 $req->closeCursor();
 $result->closeCursor();
 $req2->closeCursor();






 ?>
</body>
</html>
