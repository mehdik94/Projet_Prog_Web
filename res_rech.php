<!DOCTYPE html>
<html lang="fr">

<head>
  <title> SupFormation </title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>

  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

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





<div id="mapid" style="width: 1000px; height: 400px; position: relative; outline: medium none currentcolor;" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0">
<div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
<div class="leaflet-pane leaflet-tile-pane">
<div class="leaflet-layer " style="z-index: 1; opacity: 1;">
<div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(199px, 122px, 0px) scale(0.5);">

</div>
<div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(179px, 87px, 0px) scale(1);">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/511/340.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-150px, -35px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/512/340.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(106px, -35px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/511/339.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-150px, -291px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/512/339.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(106px, -291px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/511/341.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-150px, 221px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/512/341.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(106px, 221px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/510/340.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-406px, -35px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/513/340.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(362px, -35px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/510/339.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-406px, -291px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/513/339.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(362px, -291px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/510/341.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-406px, 221px, 0px); opacity: 1;">
<img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/10/513/341.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(362px, 221px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane">

</div>
<div class="leaflet-pane leaflet-marker-pane">

</div>
<div class="leaflet-pane leaflet-tooltip-pane">

</div>
<div class="leaflet-pane leaflet-popup-pane">

</div>
<div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(131087px, 87187.5px, 0px) scale(512);">

</div>
</div>
<div class="leaflet-control-container">
<div class="leaflet-top leaflet-left">
<div class="leaflet-control-zoom leaflet-bar leaflet-control">
<a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a>
<a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a>
</div>
</div>
<div class="leaflet-top leaflet-right">

</div>
<div class="leaflet-bottom leaflet-left">

</div>
<div class="leaflet-bottom leaflet-right">
<div class="leaflet-control-attribution leaflet-control">
<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Map data ©
<a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors,
<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>
, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>
</div>
</div>
</div>
</div>
<script>

  var mymap = L.map('mapid').setView([46.887338, 2.361595], 5);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
  }).addTo(mymap);

</script>



<table id="result_res">

  <tr>
    <th>Diplome</th>
    <th>Libellé Formation</th>
    <th>Nom de létablissement </th>
    <th>Région</th>
    <th> Lien vers la fiche de la formation </th>
  </tr>

  <?php
       include("fonctions.php");
        include("api.php");
        include('connexion.php');
        if (isset($_GET['type_diplome'])){
            $type_diplome=$_GET['type_diplome'];
        }
        if (isset($_GET['secteur_disciplinaire'])){
            $secteur_disciplinaire=$_GET['secteur_disciplinaire'];
        }
        if (isset($_GET['region'])){
            $region=$_GET['region'];
        }
        $i=0;
        $j=0;
        $localisation1= array();
        $localisation2= array();
        $titre_etablissement=array();
        $depart= array();
        $list_url =array();
        $adresse_uai= array();

        $decode_json_geo=json_deco("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-etablissements-enseignement-superieur&rows=322&facet=uai&facet=type_d_etablissement&facet=com_nom&facet=dep_nom&facet=aca_nom&facet=reg_nom&facet=pays_etranger_acheminement");
        $decode_json = json_deco("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics&rows=1000&start=100&refine.rentree_lib=2017-18");
        $compteur=0;
        $nb_results_by_page=20;
        foreach ($decode_json['records'] as $variable ) {
              $liste=array();
              $var=$variable['fields']['sect_disciplinaire'];
              $id=$variable['recordid'] ;
              $decode=$variable['fields'];
              $d=$decode['diplome_rgp'];
              $l=$decode['libelle_intitule_1'];
              $e=$decode['etablissement_lib'];
              $et=$decode['etablissement'];
              $r=$decode['reg_ins_lib'];
              $s=$decode['sect_disciplinaire_lib'];
              $effectif_total=$decode['effectif'];
              $effectif_homme=$decode['hommes'];
              $effectif_femme=$decode['femmes'];
              $departement=$decode['dep_etab_lib'];

              $liste[] =$id;
              $liste[] =$d;
              $liste[] =$l;
              $liste[] =$e;
              $liste[] =$r;
              $liste[] =$s;
              $liste[] =$departement;
              $liste[] =$effectif_total;
              $liste[] =$effectif_homme;
              $liste[] =$effectif_femme;


              // Affiche le tableau principal
              if ($type_diplome==$d || $type_diplome=="Type diplome") {
                        if ($secteur_disciplinaire==$s || $secteur_disciplinaire=="Filière") {
                            if ($region==$r || $region=="Région") {
                              $compteur++;

                              //Envoi vers la fiche de la formation
                              echo "<tr><td>$d</td><td>$l</td><td>$e</td><td>$r</td>
                              <td><form method='POST' action='fiche.php'>
                              <input  name='id_formation' type='hidden' value='".json_encode($liste, JSON_HEX_QUOT | JSON_HEX_APOS | JSON_UNESCAPED_UNICODE )."'>
                              <input type='submit' value='Voir la fiche'>
                              </form></td>

                              </tr>";
                              foreach ($decode_json_geo['records'] as $geo){

                                if (isset($geo['fields']['coordonnees']) && isset($geo['fields']['uai'])){

                                 if ($geo['fields']['uai']==$et){

                                      $localisation1[]=$geo['fields']['coordonnees'][0];
                                      $localisation2[]=$geo['fields']['coordonnees'][1];
                                      $titre_etablissement[]=$geo['fields']['uo_lib'];
                                      $adresse_uai[]=$geo['fields']['adresse_uai'];
                                      $depart[]=$geo['fields']['dep_nom'];
                                      $list_url[]=$geo['fields']['url'];
                                    }
                                  }
                               }
                            }
                        }
              }


            }


            echo "Nombre total de résultats : ".$compteur."";

            echo "<script>";

            for ($a=0 ;$a<sizeof($localisation1);$a++) {
             $requete="SELECT `count` FROM `click_ecole` WHERE `link`= '".$list_url[$a]."';";
              $req= $bd->query($requete);
              $row=$req->fetch();
              $count=0;

              if ($row==false){
                $count=0;
              }else{
                  $count=$row['count'];
              }

              // Affiche des marqueurs personnalisés
                echo "var m = L.marker([" . $localisation1[$a] . "," . $localisation2[$a] . "]).addTo(mymap);";
                echo "m.bindPopup(\"<b>" . $titre_etablissement[$a] . "</b><br><a href =intermediaire.php?link=$list_url[$a]". ">Site</a></br><br>Nombre de clics vers ce site: ".$count."</br><br>Adresse:".$adresse_uai[$a]."</br><br> Département: ".$depart[$a]."</br>\");";
            }
            echo "</script>"
   ?>

</table>




</body>
</html>
