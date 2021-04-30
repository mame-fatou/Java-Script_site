<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<TITLE>Donner un avis</TITLE>
    </head>
    <body>
	 	<?php 
		include ("header.php");
        	if (!isset($_SESSION['utilisateur'])){
			 	echo "<p style=margin-top:50px;text-align:center;> Pour pouvoir laisser un avis,veuiller d'abord vous inscrire au site ou vous conneter avec votre compte. </p>";
			}
		?>			
		<?php
			if (isset($_SESSION['utilisateur'])){ ?>
        		<div >
					<a href  = "historiqueAvis.php?id"><img class = icone style="width: 75px;height:75px;" src = 'images/historique.png'></a>
					<form method="GET" action="ajouter_Avis.php" autocomplete="off">
						<input type="hidden" name="id" step=0 value="<?php $_SESSION['utilisateur'][0]; ?> "/>
						<p>
							<?php
								include('bd.php'); 
								$bdd = getBD();	
								$rep=$bdd->query('select * from ville'); 
							?>
							
							Ville :
							<select name="ville">
								<?php 
									while($ligne=$rep->fetch()){
										echo "<option>". $ligne["nom"]."</option>";
										}
								?> 
							</select>
						</p>
						<p>
							Donnner votre avis pour cette ville: <br>
							<TEXTAREA rows="10" name="avis" placeholder="Tapez ici votre avis">
							</TEXTAREA>
						</p>

						<p>
							je n'envoie pas d'insultes ni de mot irrrespectueux :
							<input type="checkbox" name="respect">
						</p>
						<p>
							<INPUT type="submit" value="Envoyer mon avis"/>
						</p>
					</form>
        		</div>
			<?php } ?>
    
        </body>
    </html>
