
<!DOCTYPE html>
<html>
<head>
		<title>Mise à jour client</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrapDark.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
	<link rel="stylesheet" href="fullpage.css">
</head>
<body>

<h1>Mise à jour des coordonnées</h1>
<br>
<br>




<?php 

include 'db.php';
$eid = $_GET['eid'];

$stmt = $dbcon->prepare("SELECT *FROM clients where id=$eid");
$stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);
	?>

<form method="POST" action="update.php">
 	<input type="texte" name="id" value="<?php echo $id ?>">
 	<input type="text" name="nom" value="<?php echo $nom ?>">
 	<input type="text" name="prenom" value="<?php echo $prenom ?>"> 	
 	<input type="text" name="email" value="<?php echo $email ?>">
 	<input type="submit" value="Modifier">
</form>

<?php
}


?>

</body>
</html>

