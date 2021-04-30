<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>

			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link rel="stylesheet" href="style.css" type="text/css" media="screen" />	
			<TITLE>Lire avis</TITLE>
			<style>
				
					* {
						  box-sizing: border-box;
						}

						/* Créer 3 columns de taille égales */
						.column {
						  float: left;
						  width: 33.33%;
						  padding: 10px;
						  height: 300px; /* gérer la hauteur */
						}

						/* réinitialiation des columns */
						.row:after {
						  content: "";
						  display: table;
						  clear: both;

					}
				</style>
</head>
<body>
	<?php include ("header.php");	
		include('bd.php'); 
		$bdd = getBD();	
		$rep=$bdd->query('select * from ville');
	?>
	
	<div class="parallax"></div>
	<div class="parallax"></div>
	
	<div class="row">
		<?php while($ligne=$rep->fetch()){ ?>
			<div class="column" style="background-color:#aaa;">
				<h2><?php echo $ligne['nom'] ?></h2>
				<div><?php echo " <a href='ville.php?nom=".$ligne["nom"]."' >" ?> <img style = 'width:150px;height:150px;border: 1px solid #115A83;border-radius:75px'  src= <?php echo  $ligne["image"];?> alt="Image ville"  /> </a></div>
				<p><a href='lire_Avis.php?ville=".$ligne["nom"]."' >  <img  style="width: 50px;height:50px;" src = 'images/lire-avis3.png'> </a> <a href='donner_Avis.php'> <img style="width: 50px;px;height: 50px;" src = 'images/ajouter2.png'></a> <?php echo "<a href='historiqueAvis.php?nom=".$ligne["nom"]."' >" ?><img style="width: 50px;height:50px;" src = 'images/lire_plus.png'></a> </p>
			</div>
		<?php	}?>
	</div>

				
					
					
							
	
</body>
</html>
