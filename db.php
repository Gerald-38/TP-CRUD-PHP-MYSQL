<?php 


try {

	//$dbcon = new PDO('mysql:host=localhost;dbname=magasin','root','', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
	$dbcon = new PDO('mysql:host=localhost;dbname=magasin','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
	

catch(PDOException $e) {
	echo 'Attention la connexion n\'a pas été réalisée . <br/>';
	echo "erreur ! : " . $e->getMessage() . "<br/>";
	die();
}








