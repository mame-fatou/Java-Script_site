<?php 
	session_start();
	?>
<html>
	<head>
		<title>Ajouter</title>
		<?php
			include('bd.php'); 
			$bdd = getBD();
			$avis=$_GET['avis'];
			$ville=$_GET['nom'];
			$numero = rand(0,10000);
			$rep=$bdd->query("select * from avis");
			while($ligne=$rep->fetch()){
				if($numero==$ligne["id"]){
					$numero = rand(0,1000);
					}
				}
			$rep=$bdd->query("INSERT INTO avis(id,username,nom,text) VALUES('".$numero."','".$_SESSION['utilisateur'][0]."','".$ville."','".$avis."')");
			echo'<meta http-equiv="refresh" content="0; url=historiqueAvis.php">';?>
	</head>
	<body>
	</body>
</html>