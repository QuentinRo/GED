<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice GEM</title>
  <link rel="stylesheet" href="css.css">
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

	<form action="traitement.php" method="post" enctype="multipart/form-data"  onsubmit="this.filepath.value=this.fichier.value">
		<div>
			<title> </title>
			<LABEL name="Title">Titre</LABEL>
			<input type="text" name="essais">
		</div>


		<div>
			<LABEL name="Cat">Categorie</LABEL>
			<SELECT name="Option">
				<OPTION>Sport
				<OPTION>Etude
				<OPTION>PHP			
			</SELECT>
		</div>

		<div>
			<LABEL>Sélectionner un fichier</LABEL>
			<INPUT type="file" name="fichier">
			<input type="hidden" name="filepath">
		</div>

		<div>
			<BUTTON>Télécharger</BUTTON>
		</div>
	</form>

<?php 
	$row = 1;
	if (($handle = fopen("data.csv","r")) !== FALSE) 
		{
			while(($data = fgetcsv($handle,1000, ",")) !==FALSE)
			{
				$num = count($data);
				$row++;
				echo "<table>";
				for ($c=0; $c < $num; $c++) 
				{
					echo "
						<td>$data[$c]
						";

				}
				echo "</table>";
			}
			fclose($handle);
		}

?>
	<!--
	Difficulté 1 enctype="multipart/form-data"
	Difficulté 2 crée et lire le fichier csv
		simple d'utilisation et rappelle des fonctions
	
	

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
 -->
</body>
</html>