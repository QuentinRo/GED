<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice GEM</title>
  <link rel="stylesheet" href="css.css">
  <script src="script.js"></script>
  <!-- 
	Auteur 					: Quentin Rossier
	Version					: 0.2
	Date de création		: 28.08.2018	
	Date de modification 	: 29.08.2018
	Description : Importation et exportation de fichier
  -->
</head>
<body>

	<form action="traitement.php" method="post" enctype="multipart/form-data">
		<div>
			<title> </title>
			<LABEL name="Title" placeholder="Titre du document">Titre</LABEL>
			<input type="text" name="Name">
		</div>


		<div>
			<LABEL name="Cat" >Categorie</LABEL>
			<SELECT name="Option">
				<OPTION>Sport
				<OPTION>Etude
				<OPTION>PHP			
			</SELECT>
		</div>

		<div>
			<LABEL>Sélectionner un fichier</LABEL>
			<INPUT type="file" name="fichier">
		</div>

		<div>
			<BUTTON>Télécharger</BUTTON>
		</div>
	</form>
	<br>

<?php 
//lecture du fichier csv et affichage dans un tableau
	$row = 1;
	if (($handle = fopen("data.csv","r")) !== FALSE) 
		{
			echo "<table>
			<td>Titre
			<td>Catégorie
			<td>Taille";
			while(($data = fgetcsv($handle,1000, ",")) !==FALSE)
			{
				$num = count($data);
				$row++;
				echo "<tr>";
				for ($c=0; $c < $num; $c++) 
				{
					echo "
						<td>$data[$c]
						";

				}
				echo "<tr>";
				
			}
			fclose($handle);
			echo "</table>";
		}

?>
	<!--
	Difficulté 1 enctype="multipart/form-data"
	Difficulté 2 crée et lire le fichier csv
		simple d'utilisation et rappelle des fonctions
	Dif 3, récupérer le chemin du fichier pour pouvoir le télécharger.
	
 -->
</body>
</html>