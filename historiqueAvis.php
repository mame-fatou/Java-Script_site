<?php 
	session_start();
	?>
<html>
	<head>
		<title>Historique</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style>
 .mame {
  position: relative;   
  width: 100px;          
  overflow: hidden;     
  line-height: 2em;     
  display:inline;
}
.mame img {
  z-index: 1;           
  position: relative;   
  width: 100px;          
}
.mame span {
  display: none;
  position: absolute;  
  width:140px;
  margin-left:0%;
  bottom:0%;
  padding: 0 .25em;     
  color: #eee;          
  background: #069;     
  transition: all .5s; 
  opacity:0.7;
  border-radius:10%;
  z-index:20;
  
}
.mame:hover span{
  display:block;
  left: 2em;         
}
</style>		
	</head>

	<body>
	 	<?php include ("header.php");	
			include('bd.php'); 
			$bdd = getBD();
			$rep1=$bdd->query('select * from avis where username=\''.$_SESSION['utilisateur'][0].'\' ');
			$rep=$bdd->query('select * from avis where username=\''.$_SESSION['utilisateur'][0].'\' ');
		?>
	   <div class='table_formulaire	'>
	   		<table class = "classement">
   		 		<thead >
	   		   		<tr>
						<th colspan = "4" ><p style ='font: italic small-caps bold 15px cursive;padding-bottom:15px;color:#fff'> Choisissez  une ville pour lire les avis </p></th>
		   			</tr>
		   		</thead>
					
					<?php		
					while($ligne1=$rep1->fetch()){
						echo "<tr>";
						echo "<td  style ='font: italic small-caps bold 15px cursive;padding-bottom:15px;color:#fff'>".$ligne1["nom"]."</td>";
						if (isset($_GET["avis"]) & isset($_GET["id"]) & $ligne1["id"]==$_GET["id"]){
							echo "<td>".$_GET["avis"]."</td>";
							$rep=$bdd->query('UPDATE avis SET text=\''.$_GET["avis"].'\' WHERE id=\''.$_GET["id"].'\'');
						}
						else{
							echo "<td>".$ligne1["text"]."</td>";
						}
					echo "<td> <div class='mame'> 
										<span>Modifier</span> <a href='modifier_Avis.php?id=".$ligne1["id"]."'>". "<img style='width: 60px;height:60px; padding-bottom=1px;'src = 'images/modifier.png'>" ."</a> </div> </td>";
					echo "<td> <div class='mame'> 
										<span>Supprimer</span> <a href='supprimer_Avis.php?id=".$ligne1["id"]."'>". "<img style='width: 60px;height:60px; ; padding-bottom=1px;' src = 'images/supprime.png'>" ."</a> </div> </tr>";
					}?>	
			</table>
		</div>
		

</body>
</html>