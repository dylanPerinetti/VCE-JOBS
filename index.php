<?php
/*header('Location: public/index.php');
exit;*/
$styles = "public/styles/style-login.css";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require 'public/head.php'; ?>
</head>
<body>
	<div class="center-item">
		<img height="20px" src="public/img/volvo-logo-word-mark.svg">		
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Connexion</button>
	</div>
		
	<div id="id01" class="login">  
		<form class="login-content animate" action="public/index.php" method="post">
	    	<div class="imgcontainer">
		      	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close login">&times;</span>
		   		<img src="public/img/volvo-logo-word-mark.svg" alt="Logo-Volvo" class="logo">
		   	</div>

			<div class="container">
		      	<label for="uname"><b>Nom :</b></label>
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
		    	<span class="psw">Mot de passe <a href="#">Oublier ?</a></span>
			</div>
		</form>
	</div>

	<script src="public/script/login.js"></script>
</body>
</html>