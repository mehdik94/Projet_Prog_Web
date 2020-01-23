<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title > Etablissement supérieur </title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <form action="res_rech.php" method="GET">


  <header >

      <h1 class="round3 mainTitle" >SupFormation </h1>

    </header>
    <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
    <p class="phrase">
      Recherchez une formation en fonction des critères suivants:

    </p>
  <select  name="type_diplome">

  <?php

      $json = file_get_contents("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics&sort=-rentree_lib&facet=diplome_rgp&refine.rentree_lib=2017-18");
      $parsed_json = json_decode($json,true);
      $var = $parsed_json['facet_groups'][0]['facets'];
      echo "<option>";
      echo "Type diplome";
      echo "</option>";
      foreach ($var as $value ) {
        echo "<option >";
        echo $value['name'];
        echo "</option>\n";
      }
  ?>
</select>





  <select name="secteur_disciplinaire" >
  <?php
      $json = file_get_contents("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics&facet=sect_disciplinaire_lib&refine.rentree_lib=2017-18");
      $parsed_json = json_decode($json,true);
      $var = $parsed_json['facet_groups'][0]['facets'];
      echo "<option>Filière</option>";
      foreach ($var as $value ) {
        echo "<option >";
        echo $value['name'];
        echo "</option>\n";
      }
  ?>
  </select>


  <select  name="region" >
  <?php
      $json = file_get_contents("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics&rows=1&sort=-rentree_lib&facet=reg_ins_lib");
      $parsed_json = json_decode($json,true);
      $var = $parsed_json['facet_groups'][0]['facets'];
      echo "<option>Région</option>";
      foreach ($var as $value ) {
        echo "<option >";
        echo $value['name'];
        echo "</option>\n";
      }
  ?>
  </select>

   <input class="bouton button3"  type="submit">

</form>

</body>
</html>
