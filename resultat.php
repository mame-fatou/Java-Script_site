<!DOCTYPE html>
<html lang>
<HEAD>			
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
 <form method="get" action="resultat_ville.php" autocomplete="off"> 
 <form method="get" action="resultat_transport.php" autocomplete="off">
 
 	 
	 
	  <?php
	include 'header.php';
	?>
	
<div>
  <?php

$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
echo "Une fois sur ";
$variable= $_GET["ville"];
echo $variable;
echo ", vous avez choisi de voyager à la gare de ";
$var= $_GET["gare"];
echo $var;
echo".";
?>

</div>

<p class="comentaire"> Vous trouverez ici toutes les informations récoltées à partir de cette recherche. Bon voyage ! </p>
		 <img width=400px src ="images/gare.jpg" alt="photo"> 
		 <p></p>

</head>
<style>


.mame {
  background-color: red ;
  overflow: auto;
}
.mame a {
  float: left;;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

</style>

  <?php 
  echo "Découvre la carte d'identité de la ville de  ";
  echo "<th><a href='resultat_ville.php?ville=".$variable."'>".$variable."</a></th>";
  echo " !";
  
  ?>
  <p></p>
  <?php
  echo "Découvre toutes les correspondances possibles à partir de la gare de ";
   echo "<th><a href='resultat_transport.php?gare=".$var."'>".$var."</a></th>";
  ?>
    <p></p>
   <?php
  echo "Découvre les statistiques des classes d'âges des voyageurs des autres gares ";
  echo"";
   echo "<a href='historique.php'>     statistiques des gares</a>";
  ?>

<body>
  
	 <p>
	 </p>
	 

</body>
 </HTML>