<?php
 session_start();
 ?>
<!DOCTYPE HTML>

<HTML>
</HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<TITLE>connexion</TITLE>

 <?php
	include 'header1.php';
	?>
	

<HEAD>


	
	
	<body>
		<h1> GAR'AGES </h1>
		 <img width=400px id="imgZoom1" onmousemove="zoomIn('imgZoom1')"  onmouseout="zoomOut('imgZoom1')" src ="images/gare.jpg" alt="photo"> 
		 
		 
        <script>
            
function zoomIn(zoom)
{
	document.getElementById(zoom).style.width = '500px';
	document.getElementById(zoom).style.height = '500px';

}
zoomIn('imgZoom1')

            
function zoomOut(zoom)
{

 document.getElementById(zoom).style.width = '200px';
 document.getElementById(zoom).style.height = '200px';
 
}
zoomOut('imgZoom1')
</script>
		 
		 
		
			<form method="post" action="connecter.php" autocomplete="off">
		
		<p> Adresse email : <INPUT type="text" name="email" value=""></p>
		<p> Mot de passe : <INPUT type="password" name="mdp" value=""/> </p>
		<p> <INPUT type="submit" value="Se connecter"></p>
	


</body>
</html>
