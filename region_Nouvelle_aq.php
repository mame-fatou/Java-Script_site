<?php include 'bd.php' ?>
<!DOCTYPE html>
<html lang="en">

<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


    <title>Page Villes </title>
	
		<?php include ("header.php");?>
<style type="text/css">


ul{
	position:relative;
}
img{
	position:absolute;
	top:0px;
	left:100px;


}


ul li:hover img{

z-index: 1;
}
</style>

</head>
<body>
   <h1 class="titre">Villes </h1>   

   
   
<p>  Choisissez la ville qui vous intéresse afin de voir les gares qui s'y trouvent et d'obtenir des informations !</p></br>   


<ul>
  <li><img width = 300px src="images/paris.jpg" /><img width = 300px src="images/Lille.jpg" /></li>
  <li><img width = 300px src="images/Montpellier.jpg" /><img width = 300px src="images/strasbourg.jpg" /></li>
  <li><img width = 300px src="images/Bordeau.jpg" /><img width = 300px src="images/lyon.jpg" /></li>
  <li><img width = 300px src="images/Reims.jpg" /><img width = 300px src="images/nice.jpg" /></li>
  <li><img width = 300px src="images/toulouse.jpg" /><img width = 300px src="images/paris.jpg" /></li>
  <li><img width = 300px src="images/Toulon.jpg" /><img width = 300px src="images/dijon.jpg" /></li>
  <li><img width = 300px src="images/nantes.jpg" /><img width = 300px src="images/toulouse.jpg" /></li>
  <li><img width = 300px src="images/marseilles.jpg" /><img width = 300px src="images/villes.jpg" /></li>
  <li><img width = 300px src="images/Grenoble.jpg" /><img width = 300px src="images/montpellier.jpg" /></li>

</ul>



  <form method="get" action="gare.php" autocomplete="off">


 <?php


$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from ville where region = "Nouvelle-Aquitaine"');
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