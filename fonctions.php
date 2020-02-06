<?php

$key ="5f7fcf6a5e2bac8b7eade848e8bb560624e0c6f676e122d7312672ba";

function concat_key_link($link){
  global $key;
  return $link."&apikey=".$key;

}


function json_deco($link){
    return json_decode(file_get_contents(concat_key_link($link)),true);
}
// Fonction permettant d'afficher les éléments de l'API dans les listes déroulantes .
function displayDropDown($link,$name){
  $link_key= concat_key_link($link);
  $json = file_get_contents($link_key);
  $parsed_json = json_decode($json,true);
  $var = $parsed_json['facet_groups'][0]['facets'];
  echo "<option>";
  echo $name;
  echo "</option>";
  foreach ($var as $value ) {
    echo "<option >";
    echo $value['name'];
    echo "</option>\n";
  }
}

 ?>
