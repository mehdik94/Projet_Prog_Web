<?php
       class Api{
          private $end_of_url = "&apikey=5f7fcf6a5e2bac8b7eade848e8bb560624e0c6f676e122d7312672ba";
          private $link="https://data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-principaux-diplomes-et-formations-prepares-etablissements-publics";
          private $middle_of_url;





           public function displayDropDown($name){

            if ($name=="Type diplome"){
                  $this->middle_of_url="&sort=-rentree_lib&facet=diplome_rgp&refine.rentree_lib=2017-18";
            }
            elseif ($name=="Filière") {
                 $this->middle_of_url="&facet=sect_disciplinaire_lib&refine.rentree_lib=2017-18";
            }
            elseif ($name=="Région") {
                $this->middle_of_url="&rows=1&sort=-rentree_lib&facet=reg_ins_lib";
            }

            $link_key= $this->link."".$this->middle_of_url."".$this->end_of_url;
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

      }



 ?>
