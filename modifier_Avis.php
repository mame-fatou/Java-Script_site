<html>
<head>



</html>

<title>Modification</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />	
</head>
<body>
 
<?php
		include ("header.php");
		$id= $_GET["id"];
		include('bd.php'); 
		$bdd = getBD();	
		$rep=$bdd->query('select * from avis where id=\''.$id.'\''); 
		$ligne=$rep->fetch();
	?>
<div class="table_formulaire">
						<table class = "classement">
									
									<form action="historiqueAvis.php" method="get" autocomplete="off">
										<input type="hidden" name="id" step=0 value="<?php echo $id; ?> "/>
											<tr><p>Ecrire avis :</tr>
										
											<tr><input type="textarea" name="avis" value= "<?php  echo $ligne["text"]; ?>" /></p></tr>
									
											<tr><p><input type="submit" value="Envoyer"></p></tr>
									</form>
								
						</table>
					</div>
 									
						</body>
	 					
						


</html>