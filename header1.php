<!DOCTYPE html>
<html lang>


<div class="navbar">
	<a href="accueilX.php">Home</a>
	<a href="ville.php">Ville</a>
	<a href="region.php">Carte</a>
	<a href="historique.php">statistique</a>
	<a href="avis.php">Avis</a>
	
	
<?php
if(!isset($_SESSION['utilisateur'])) {  ?>
<a href="inscription.php">S'inscrire </a>

<?php
} else {
    echo "Vous êtes connecté(e)s en tant que ";
    echo $_SESSION["utilisateur"]['prenom'].' ';
    echo $_SESSION["utilisateur"]['nom']; 
    
    echo'<a href="deconnexion.php">Se déconnecter</a> ';
 }
?>
	
	
</div>
</html>