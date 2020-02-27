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
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
    <div class="phrase">
      Recherchez une formation en fonction des critères suivants:
    </div>
  <select class="dropbtn1"  name="type_diplome" >
      <?php
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

</body>
</html>
