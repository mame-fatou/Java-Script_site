<?php include 'bd.php' ?>
<!DOCTYPE html>
<html lang="en">

<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


    <title>Page Villes </title>
	
	<?php include ("header.php");?>
</head>
<body>
   <h1 class="titre">Villes </h1>   

   
   
<p> Choisissez la ville qui vous intéresse afin de voir les gares qui s'y trouvent et d'obtenir des informations !</p></br>   


  <form method="get" action="gare.php" autocomplete="off">


 <?php


$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from ville where region = "PACA"');
echo "<table class= cMonTableau '>";
echo "<tr>";

echo "<th>Ville(s) disponible(s) : </th>";

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
      
  
</body>
</html>