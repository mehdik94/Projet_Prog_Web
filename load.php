<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="load.css">
  </head>
  <body>
    <form class="" action="res_rech.php" method="GET">

    </form>
    <?php
    if (isset($_GET['type_diplome'])){
        $type_diplomee=$_GET['type_diplome'];
    }
    if (isset($_GET['secteur_disciplinaire'])){
        $secteur_disciplinairee=$_GET['secteur_disciplinaire'];
    }
    if (isset($_GET['region'])){
        $regione=$_GET['region'];
    }
    header("refresh:0;url=res_rech.php?type_diplome=".$type_diplomee."&sect_disciplinaire=".$secteur_disciplinairee.".&region=".$regione."");?>
    <div class="loading"></div>
  </body>
</html>
