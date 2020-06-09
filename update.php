<?php 

include 'db.php';
$id = $_POST['id'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

$stmt = $dbcon->prepare("UPDATE clients SET prenom = '$prenom', nom = '$nom', email = '$email' 
	WHERE clients.id = $id");
$stmt->execute();

header('Location:index.php');


 ?>







