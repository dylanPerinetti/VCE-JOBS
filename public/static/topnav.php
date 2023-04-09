<div class="topnav">
	<a class="logo" href="home.php"><img src="<?=$static_repository?>img/volvo-logo-word-mark.svg"></a>
	<a href="actifs.php">Actifs</a>
	<a href="utilisateurs.php">Utilisateurs</a>
	<a href="#">Paramètres</a>
	<button class="search-button" type="submit" onclick="openSearch()"><img src="<?=$static_repository?>img/Action_Magignifier_black.png"></button>
	<div id="myOverlay" class="overlay">
	  	<!--span class="closebtn" onclick="closeSearch()" title="Fermer">x</span-->
	  	<div class="overlay-content">
	    	<form action="action_page.php">
	      		<input type="text" class="input-field" placeholder="Rechercher..." name="search">
	      		<button type="submit"></button>
	    	</form>
	  	</div>
	</div>
</div>
<?php $spin_load = 0;require $static_repository.'loader.php' ?>
<h1 style="background-image: url('<?=$chemin_imgage_h1 ?>');"><?=$titre ?></h1>