<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

    <title>transport</title>
	 <?php
	include 'header.php';
	?>
	
</head>
<body>
   <h1 class="titre"> Toutes les connexions </h1>    
   </body>


 <?php

echo "A partir de cette gare, vous pouvez emprunter : ";
$var= $_GET["gare"];
?>
<p></p>
 <?php


$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from connexion where nom_gare="'.$var.'"');
echo "<table class='cMonTableau'>";
echo "<tr>";

echo "<th>nom</th>";
echo "</tr>";
while ($line = $rep ->fetch()) {
	
	echo'<td>'. $line["transport"].'</td>';
echo "<tr>";

}
echo "</table>";
$rep ->closeCursor();
?>
 
		<p><a href="accueil.php">Page d'accueil </a></p>

    </p>
	     <p>
        <a href="profil.php">Mon Profil </a>
    </p>
   
  </html>