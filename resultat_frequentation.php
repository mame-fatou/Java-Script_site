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
	

<?php
$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');

$rep = $bdd->query('select POURCENTAGE from FREQUENTATION where NOM_GARE="Marne la Vallée Chessy" and ANNEE=2013') ;

while ($ligne = $rep ->fetch()) {
echo $ligne['POURCENTAGE'];
}



?>


</head>
</html>