<div class="topnav">
	<a class="logo" href="index.php"><img src="<?=$static_repository?>img/volvo-logo-word-mark.svg"></a>
	<a href="actifs.php">Actifs</a>
	<a href="utilisateurs.php">Utilisateurs</a>
	<a href="#">Paramètres</a>
	<button class="search-button" type="submit" onclick="openSearch()"><i class="fa fa-search"></i></button>
	<div id="myOverlay" class="overlay">
	  	<span class="closebtn" onclick="closeSearch()" title="Fermer"><i class="fa fa-times" aria-hidden="true"></i></span>
	  	<div class="overlay-content">
	    	<form action="action_page.php">
	      		<input type="text" placeholder="Rechercher..." name="search">
	      		<button type="submit"><i class="fa fa-search"></i></button>
	    	</form>
	  	</div>
	</div>
</div>
<?php $spin_load = 0;require $static_repository.'loader.php' ?>
<h1 style="background-image: url('<?=$chemin_imgage_h1 ?>');"><?=$titre ?></h1>