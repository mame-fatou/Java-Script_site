<?php
 session_start();
 ?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>resultats ville</TITLE>
<link rel="stylesheet"    href="style.css"    type="text/css"    media="screen"    />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <?php
	include 'header.php';
	?>
	
</HEAD>
<body>
 <?php


$variable= $_GET["ville"];

?>

<p></p>

<?php
$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from ville where nom="'.$variable.'"');


echo "<table class= 'cMonTableau'>";
echo "<tr>";


echo "<th>Nom de la ville</th>";
echo "<th>Nom de la région</th>";
echo "<th>Population estimée </th>";
echo "<th>Taux de chômage </th>";


echo "</tr>";

while ($line = $rep ->fetch()) {
	echo  '<h1>'.$line["slogan"].'</h1>';
	echo  " ";
	echo  '<p>'.$line["description"].'</p>';
	echo  " ";
	echo  " ";
	 echo '<p><img width = 300px src=" '.$line["image"].'"></p>';
	echo "<tr>";
	echo'<td>'. $line["nom"].'</td>';
	echo '<td>'. $line["region"].'</td>';
	echo '<td>'.$line["population"].'</td>';
	echo '<td>'. $line["chomage"].'</td>';

		

	
echo "<tr>";

}
echo "</table>";
$rep ->closeCursor();
?>




</body>
</html>
