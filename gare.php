<?php include 'bd.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
 <form method="get" action="resultat.php" autocomplete="off">

    <title>gare </title>
		
	 <?php
	include 'header.php';
	?>
	

</head>
<body>
   <h1 class="titre">Gares</h1> 
				<p>Choisissez la gare qui vous intéresse afin de voir les correspondances possibles !</p>  
	
	

 <?php

$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
echo "Une fois à ";
$variable= $_GET["ville"];
echo $variable;
echo ", vous pouvez vous rendre à :";

echo "</br>";
echo"</br>";

$rep = $bdd->query('select * from gare where ville_gare= "'.$variable.'" ');
echo "<table class= cMonTableau>";


while ($line = $rep ->fetch()) {
	echo "<td><a href='resultat.php?ville=".$variable."&gare=".$line["nom_gare"]."'>".$line["nom_gare"]."</a></td>";
	echo '<td> <img width = 250px src=" '.$line["image"].'"></td>';

	echo '<th><a href='.$line["statistique"].'>voir statistique</a></th>';
		 
	

}

echo "</table>";
$rep ->closeCursor();
?>




	
  
</body>
</html>