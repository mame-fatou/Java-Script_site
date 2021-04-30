
<?php
 session_start();
 ?>

 
 
 <!DOCTYPE HTML>
  <HTML>
  <head>
  <TITLE>page connecter</TITLE>
  <?php
  if($_POST['email']== "" or $_POST['mdp']== "" ){
    echo'<meta http-equiv="refresh" content="0; url=connexion.php">';
	
	
  }
  
  

  else{
	    
    $bdd = new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');
		$query = "select * from utilisateur where mail='".$_POST ['email']."' && mdp='".$_POST['mdp']."'";

    $rep = $bdd->query($query);

    while ($ligne = $rep->fetch()) {
      $_SESSION['utilisateur']=array(
	  'username'=>$ligne['username'],
        'nom'=>$ligne['nom'],
        'prenom'=>$ligne['prenom'],
        'adresse'=>$ligne['adresse'],
        'num'=>$ligne['num'],
        'mail'=>$ligne['mail'],
        'classe'=>$ligne['classe']
      );
    
      echo '<meta http-equiv="Refresh" content="0;url=profil.php">';
	
    }
  }
  ?>
  </head>
  
  
  <body>
   <p>Addresse ou mot de passe intouvables  ! </p>
  <p>Veuillez ressaisir les bonnes informations svp </p>
<a href="connexion.php">Se connecter </a>

    </body>
 </HTML>