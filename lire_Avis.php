<?php 
	session_start();
	?>
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
			<?php 
		include ("header.php");?>
		
			<style type="text/css">
			
			.mamep span {
					display: none;
					position: absolute;  
					width:150px;
					margin-left:-70%; 
					top:-890%;
					padding: 0 .25em;     
					color: #eee;          
					background: #069;     
					transition: all .5s;  
					opacity:0.7;
					border-radius:10%;
					
					}
				.title{
					text-align:center;
					font-size:22px;
					font-style:bold;
					color:#fff;
					padding-bottom:7px;
					padding-top:7px;
				}
				.title1{
					text-align:center;
					font-size:14px;
					font-style:bold;
					color:#fff;
					padding-bottom:7px;
					padding-top:7px;
				}
				#image{
					height:150px;
					width:150px;
					border-radius:60px;
					margin-top:20px;
				}
				
			</style>	
			<TITLE>Lire avis</TITLE>
    	</head>
    	<body>
			 <?php 
		
			include('bd.php'); 
			$bdd = getBD();	
			$Ville= $_GET["ville"];
			$rep=$bdd->query('select * from ville where nom=\''.$Ville.'\''); 
			$rep1=$bdd->query('select * from avis where nom=\''.$Ville.'\''); 
			$ligne=$rep->fetch();
			$rep2=$bdd->query('select * from avis where nom=\''.$Ville.'\''); 
			if($ligne2=$rep2->fetch()==""){
				
				echo"</br>";
				echo"</br>";
				echo"<h1>pas d'avis</H1>";
				echo"</br>";
				echo"</br>";
				
				?>
				<div class="mamep"> 
				<p>ajouter un avis <p/>
				<span>Ajouter un avis</span>
				<a href = "donner_Avis.php"><img style="width: 100px;px;height: 100px;" src = 'images/ajouter.png'></a>
				</div>
				<?php
				}
			else{ ?>
				
				<div>
					<table bordure = 1>
   		 				<thead >
	   		    			<tr>
							<th><img  id="image" src= <?php echo  $ligne["image"];?> alt="Image ville"  /></th>	   
							<th style='color:blue;'><img style="z-index:20;width: 60px;height: 60px;" src = 'images/ajouter.png'/>
							<?php echo $ligne['nom'] ?> </th>
							
		   					</tr>
		   				</thead>
						<tbody>
							<tr>
								<td class="title"> utilisateur</td>
								<td class="title"> Avis </td>
							</tr>
							
							
							
							<?php while($ligne1=$rep1->fetch()){?>
							<tr>
							<td class="title1"> <?php echo  $ligne1['username']?>  </td>
							<td class="title1"><?php echo  $ligne1['text']?>  </td>
							</tr>
					
					<?php }?>
					</table>
				</div>
			<?php } ?>
	
    		
			
        </body>
    </html>
