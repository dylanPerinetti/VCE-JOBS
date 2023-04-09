<?php
/*header('Location: index.php');
exit;*/
$titre = "Connexion";
$styles_sheet_name = "style-login.css";
$static_repository = "static/";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require $static_repository.'head.php'; ?>
</head>
<body>
	<?php $spin_load = 0;require $static_repository.'loader.php' ?>
	<!-- The video -->
	<video autoplay muted loop id="myVideo">
	  <source src="<?=$static_repository?>img/volvoce-add-power-to-your-business-video-loop.mp4" type="video/mp4">
	</video>

	<div class="center-item">
		<img height="20px" src="<?=$static_repository?>img/volvo-logo-word-mark.svg">		
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Connexion</button>
	</div>
		
	<div id="id01" class="login">  
		<form class="login-content animate" action="home.php" method="post">
	    	<div class="imgcontainer">
		      	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close login">&times;</span>
		   		<img src="<?=$static_repository?>img/volvo-logo-word-mark.svg" alt="Logo-Volvo" class="logo">
		   	</div>

			<div class="container">
		      	<label for="uname"><b>Identifiant :</b></label>
			   	<input type="text" placeholder="Entre Nom" name="uname" required>

			 	<label for="psw"><b>Mot de passe :</b></label>
				<input type="password" placeholder="Entrer Mot de passe" name="psw" required>
				        
			  	<button type="submit">Connexion</button>
				      
			 	<label>
			       	<input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
			    </label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
		    	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Retour</button>
		    	<span class="psw">Mot de passe <a href="home.php">Oublier ?</a></span>
			</div>
		</form>
	</div>

	<script src="<?=$static_repository?>script/login.js"></script>
</body>
</html>