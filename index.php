<!DOCTYPE html>
<html>
<head>
	<title>formulaire d'enregistrement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrapDark.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

</head>
<body>
	<?php 
	include 'db.php';
	?>

	<h1>Gestion des enregistrements base de données clients</h1>
	<br>
	<br>

	<div class="container">
		<div id="formContent">
			<h2>Formulaire de saisie</h2>
			<form method="POST" action="add.php">
				<fieldset>
					<label>nom</label>
					<br>
					<input type="text" name="nom">
					<br><br>
					<label>prenom</label>
					<br>
					<input type="text" name="prenom">
					<br><br>
					<label>email</label>
					<br>		
					<input type="text" name="email">
					<br><br>				
					<input type="submit" name="submit" value="Ajouter">	
				</fieldset>
			</form>
			<br>

		</div>

		<?php 
		$stmt = $dbcon->prepare("SELECT * FROM clients");
		$stmt->execute();
		?>

		<div id="tableContent">
			<h2>Table clients</h2>
			<br><br>
			<table>
				<tr>
					<td>id</td>
					<td>nom</td>
					<td>prenom</td>
					<td>email</td>
					<td>supprimer</td>
					<td>modifier</td>
				</tr>
			
			<?php 
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			 extract($row);
			?>

				<tr>
					<td><?php echo$id; ?></td>
					<td><?php echo$nom; ?></td>
					<td><?php echo$prenom; ?></td>
					<td><?php echo$email; ?></td>
					<td><a href="delete.php?deleteId=<?php echo $id; ?>">Supprimer</a></td>
					<td><a href="edit.php?eid=<?php echo $id; ?>">Mettre à jour</a></td>
				</tr>

			<?php 
				}
			?>

			</table>
		</div>
	</div>


</body>
</html>