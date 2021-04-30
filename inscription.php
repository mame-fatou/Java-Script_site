<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="checknumber.js"></script>
  <title>Inscription</title>
  
  <?php
	include 'header.php';
	?>
	
</head>
<body>
  <h1> Inscription</h1>

	 <img width=200px src ="images/gare.jpg" alt="photo"> 

<form action="enregistrement.php" method="POST" autocomplete="off">

                        <p><input type="text" name="nom"  value= "<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>" placeholder="Nom"/></p>
                       
                        <p><input type="text" name="prenom"  value= "<?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?>" placeholder="Prenom"/></p>
                      
                        
                        <p><input type="text" name="username"  value= "<?php if(isset($_GET['username'])) echo $_GET['username']; ?>" placeholder="Username"/></p>
                       
                        <p><input type="text" name="num"   value= "<?php if(isset($_GET['num'])) echo $_GET['num']; ?>" placeholder="number"/></p>
                       
                        <p><input type="text" name="adresse"  value= "<?php if(isset($_GET['adresse'])) echo $_GET['adresse']; ?>" placeholder="Adresse"/></p>
                       
                        <p><input type="text" name="email" value= "<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" placeholder="Email"/></p>
						

				<SELECT name="tranche_d_age">
				<OPTION>19 ans et moins</OPTION>
				<OPTION>20 ans à 29 ans</OPTION>
				<OPTION >30 ans à 39 ans</OPTION>
				<OPTION >40 ans à 49 ans</OPTION>
				<OPTION >50 ans à 59 ans</OPTION>
				<OPTION >60 ans et plus</OPTION></SELECT></p>

                        

                        <p><input type="password" name="mdp1" value="" placeholder="Password"/></p>
                        
                    <p><input type="password" name="mdp2"  value="" placeholder="Confirm"/></p>

             
                        <p><input type="submit" value="S'inscrire" /></p>



                    </form>



</form>



</body>
</html>
