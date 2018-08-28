<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice GEM</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <!-- 
	Auteur 					: Quentin Rossier
	Version					: 0.1
	Date de création		: 28.08.2018	
	Date de modification 	: 28.08.2018
	Description : Importation et exportation de fichier
  -->
</head>
<body>

	<form action="traitement.php" method="post" enctype="multipart/form-data">
		<div>
			<title> </title>
			<LABEL name="Title">Titre</LABEL>
		<div>

		<div>
			<LABEL name="Cat">Categorie</LABEL>
			<SELECT name="Option">
				<OPTION>Sport
				<OPTION>Etude
				<OPTION>PHP			
			</SELECT>
		<div>

		<div>
			<LABEL>Sélectionner un fichier</LABEL>
			<!--accept="image/JPG" -->
			<INPUT type="file" name="file">
		<div>

		<div>
			<BUTTON>Télécharger</BUTTON>
		</div>
	</form>

	<!--
	Difficulté 1 enctype="multipart/form-data"
	Difficulté 2 crée et lire le fichier csv
		simple d'utilisation et rappelle des fonctions
	 -->
	 <?php

	 // lecture du CSV et affichage de toutes les données (plus qu'à faire le tableau)

		 $row = 1;
		 if (($handle = fopen("data.csv","r")) !== FALSE) 
		{
			while(($data = fgetcsv($handle,1000, ",")) !==FALSE)
			{
				$num = count($data);
				echo "<p>" $num champs à la ligne $row : <br /></p>\n";
				$row++;
				for ($c=0; $c < $num; $c++) 
				{
					echo $data[$c] . "<br />\n";
				}
			}
			fclose($handle);
		}
	 ?>

</body>
</html>