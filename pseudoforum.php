<!doctype HTML>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Mon Blog</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>

<body>
	<p>Ceci est un super article! Laissez vos commentaires!</p>
	<div id="boitecomms"><p>Commentaires déjà envoyés: </p>
		<?php
		$commentaires = fopen("stockcomments.txt","a+");
		while(!feof($commentaires)) {echo fgets($commentaires).'<br/>';}
		fclose($commentaires);
		?>
	</div>
	<p>Formulaire de nouveau message: </p>
	<form action="envoiformulaire.php" method="POST">
		<p>
			<label for="nom">Pseudo </br></label><input type="text" name="nom" maxlength="25" id="nom"/>
			<br/>
			<label for="message" id="message">Votre Message: </br></label><textarea type="text" name="message" ></textarea>
			<br/>
			<input type="submit" id="valider" value="Valider" />
		</p>
	</form>
	
	<p></p>
</body>
</html>