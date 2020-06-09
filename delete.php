<?php 
include 'db.php';


$deleteId = $_GET['deleteId'];


$stmt = $dbcon->prepare("DELETE FROM clients WHERE id=$deleteId");
$stmt->execute();

header('Location:index.php');





 ?>