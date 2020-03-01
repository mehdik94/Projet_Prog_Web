<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title > Etablissement supérieur </title>
  <link rel="stylesheet" href="style.css">

</head>

<body class="b">
  <form action="res_rech.php" method="GET">

  <?php
      include("api.php");
   ?>
  <header >

      <h1 class="round3 mainTitle" >SupFormation </h1>

    </header>
    <ul>
  <li><a class="active" href="res_rech.php">Accueil</a></li>
  <li><a href="https://github.com/mehdik94/Projet_Prog_Web">Github</a></li>
  <li><a href="https://www.linkedin.com/in/mehdi-koumad-048980174/">Contact</a></li>

</ul>
    <div class="phrase">
      Recherchez une formation en fonction des critères suivants:
    </div>
  <select class="dropbtn1"  name="type_diplome" >

      <?php
      // Utilise la classe API pour afficher les listes déroulantes
        $d=new Api();
        $d->displayDropDown("Type diplome");
      ?>
  </select>


  <select class="dropbtn2" name="secteur_disciplinaire"  >
    <?php
          $d->displayDropDown("Filière");
    ?>

  </select>


  <select class="dropbtn3" name="region">
  <?php
      $d->displayDropDown("Région");
   ?>
  </select>

   <input class="bouton button3"  type="submit"  >

</form>

<p class="best_formation"> Top 3 des formations les plus vues: </p>
<table id="result_res" >

  <tr>
    <th>Intitulé du diplome</th>
    <th> Nom de l'établissement</th>
    <th>Nombre de vues</th>
  </tr>

<?php include('connexion.php');

// Permet d'afficher les 3 formations les plus cliqués
  $requete="SELECT * FROM `click_formation` ORDER BY `count` DESC LIMIT 3;";
  $req= $bd->query($requete);
  $row=$req->fetch();
  echo "<tr><td>".$row['intit_formation']."</td><td>".$row['nom_etab']."</td><td>".$row['count']."</td></tr>";
  while($data = $req->fetch()){
      echo  "<tr><td>".$data['intit_formation']."</td><td>".$data['nom_etab']."</td><td>".$data['count']."</td></tr>";
  }



 ?>
</table>

</body>
</html>
