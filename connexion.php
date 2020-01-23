<?php
try{
include ('parametre.php');
$bd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=kgomes_db', $user, $pass);
}
catch(Exception $e ){
	die('Connexion à la base de données impossible!'.$e->getMessage());
}

 ?>
