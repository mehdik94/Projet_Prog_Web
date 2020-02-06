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
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
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
  </tr>

  <?php
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
        $list_url =array( );
        $json= file_get_contents("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics&rows=1000&sort=-rentree_lib&facet=rentree_lib&facet=etablissement_type2&facet=etablissement_type_lib&facet=etablissement&facet=etablissement_lib&facet=champ_statistique&facet=dn_de_lib&facet=cursus_lmd_lib&facet=diplome_rgp&facet=diplome_lib&facet=typ_diplome_lib&facet=diplom&facet=niveau_lib&facet=disciplines_selection&facet=gd_disciscipline_lib&facet=discipline_lib&facet=sect_disciplinaire_lib&facet=spec_dut_lib&facet=localisation_ins&facet=com_etab&facet=com_etab_lib&facet=uucr_etab&facet=uucr_etab_lib&facet=dep_etab&facet=dep_etab_lib&facet=aca_etab&facet=aca_etab_lib&facet=reg_etab&facet=reg_etab_lib&facet=com_ins&facet=com_ins_lib&facet=uucr_ins&facet=dep_ins&facet=dep_ins_lib&facet=aca_ins&facet=aca_ins_lib&facet=reg_ins&facet=reg_ins_lib&refine.rentree_lib=2017-18");
        $json_geo=file_get_contents("https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-etablissements-enseignement-superieur&rows=322&facet=uai&facet=type_d_etablissement&facet=com_nom&facet=dep_nom&facet=aca_nom&facet=reg_nom&facet=pays_etranger_acheminement");
        $decode_json_geo=json_decode($json_geo,true);
        $decode_json = json_decode($json,true);
        foreach ($decode_json['records'] as $variable ) {
              $var=$variable['fields']['sect_disciplinaire'];

              $decode=$variable['fields'];
              $d=$decode['diplome_rgp'];
              $l=$decode['libelle_intitule_1'];
              $e=$decode['etablissement_lib'];
              $r=$decode['reg_ins_lib'];
              $s=$decode['sect_disciplinaire_lib'];
              $et=$decode['etablissement'];



              if ($type_diplome==$d || $type_diplome=="Type diplome") {
                        if ($secteur_disciplinaire==$s || $secteur_disciplinaire=="Filière") {
                            if ($region==$r || $region=="Région") {
                              echo "<tr><td>$d</td><td>$l</td><td>$e</td><td>$r</td></tr>";
                              foreach ($decode_json_geo['records'] as $geo){
                                  if (isset($geo['fields']['coordonnees']) && isset($geo['fields']['uai'])){
                                    if ($geo['fields']['uai']==$et){
                                      $localisation1[]=$geo['fields']['coordonnees'][0];
                                      $localisation2[]=$geo['fields']['coordonnees'][1];
                                      $titre_etablissement[]=$geo['fields']['uo_lib'];
                                      $list_url[]=$geo['fields']['url'];
                                    }
                                  }
                               }
                            }
                        }
              }


            }

        echo "<script>";

        for ($a=0 ;$a<sizeof($localisation1);$a++) {
            echo "var m = L.marker([" . $localisation1[$a] . "," . $localisation2[$a] . "]).addTo(mymap);";
            echo "m.bindPopup(\"<b>" . $titre_etablissement[$a] . "</b><a href ='" .$list_url[$a] . "'>Site</a>\");";
        }
        echo "</script>"
   ?>

</table>


</body>
</html>
