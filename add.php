<?php 
include 'db.php';
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

$stmt = $dbcon->prepare("INSERT INTO clients(id, prenom, nom, email) VALUES(NULL, '$prenom', '$nom', '$email')");
$stmt->execute();

header('Location:index.php');
 ?>