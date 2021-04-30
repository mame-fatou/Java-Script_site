<?php include 'bd.php' ?>
<!DOCTYPE html>
<html lang="en">

<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


    <title>Page Villes </title>
	
	 <?php
	include 'header.php';
	?>




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
</head>
<body>
   <h1 class="titre">Villes </h1>  
 
 
 <p> Choisissez la ville qui vous intéresse afin de voir les gares qui s'y trouvent et d'obtenir des informations !</p></br>   

  
   

  <form method="get" action="gare.php" autocomplete="off">


 <?php


$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from ville');
echo "<table class= cMonTableau '>";
echo "<tr>";

echo "<th>Villes : </th>";

echo "<th></th>";
echo "</tr>";
while ($line = $rep ->fetch()) {
echo "<tr>";

echo "<th><a href='gare.php?ville=".$line["nom"]."'>".$line["nom"]."</a></th>";
  

echo "</tr>";
}
echo "</table>";
$rep ->closeCursor();
?>
 
 
 
 	<?php 
		$bdd = getBD();	
		$rep=$bdd->query('select * from ville');
	?>
	
	<div class="parallax"></div>
	<div class="parallax"></div>
	
	<div class="row">
		<?php while($ligne=$rep->fetch()){ ?>
			<div class="column" style="background-color:#004C8C;">
				<h2><?php echo $ligne['nom'] ?></h2>
				<div><?php echo " <a href='ville.php?nom=".$ligne["nom"]."' >" ?> <img style = 'width:150px;height:150px;border: 1px solid #115A83;border-radius:75px'  src= <?php echo  $ligne["image"];?> alt="Image ville"  /> </a></div>
				<p><a href='lectureAvis.php?ville=".$ligne["nom"]."' >  <img  style="width: 50px;height:50px;" src = 'images/lire-avis3.png'> </a> <a href='donnerAvis.php'> <img style="width: 50px;px;height: 50px;" src = 'images/ajouter2.png'></a> <?php echo "<a href='historiqueAvis.php?nom=".$ligne["nom"]."' >" ?><img style="width: 50px;height:50px;" src = 'images/lire_plus.png'></a> </p>
			</div>
		<?php	}?>
	</div>

				
	
      
</body>
</html>