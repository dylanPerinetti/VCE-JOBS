<?php
$titre = "Historique de ".$_GET['ObjectName'];
$styles_sheet_name = "style.css";
$static_repository = "static/";
$chemin_imgage_h1 = "static/img/volvo-used-equipment-2326x800.jpg";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php require $static_repository'head.php'; ?>
  <style>

  body {
    background-color: #474e5d;
  }

  /* The actual timeline (the vertical ruler) */
  .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* The actual timeline (the vertical ruler) */
  .timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
  }

  /* Container around content */
  .container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
  }

  /* The circles on the timeline */
  .container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid black;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
  }

  /* Place the container to the left */
  .left {
    left: 0;
  }

  /* Place the container to the right */
  .right {
    left: 50%;
  }

  /* Add arrows to the left container (pointing right) */
  .left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
  }

  /* Add arrows to the right container (pointing left) */
  .right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Fix the circle for containers on the right side */
  .right::after {
    left: -16px;
  }

  /* The actual content */
  .content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
  }
  </style>
</head>
<body>
  <?php require $static_repository.'topnav.php'; ?>
  <div class="timeline">
    <div class="container left">
      <div class="content">
        <h2>2017</h2>
        <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
      </div>
    </div>
    <div class="container right">
      <div class="content">
        <h2>2016</h2>
        <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
      </div>
    </div>
    <div class="container left">
      <div class="content">
        <h2>2015</h2>
        <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
      </div>
    </div>
    <div class="container right">
      <div class="content">
        <h2>2012</h2>
        <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
      </div>
    </div>
    <div class="container left">
      <div class="content">
        <h2>Jeu 12 2022</h2>
        <p>Téléphone Fixe assigné : 01 30 29 44 90<br>Téléphone Portable assigné : 01 30 29 44 90<br>PC asssigné : <a href="device-info.php?ObjectName=5430" >5430</a></p>
      </div>
    </div>
    <div class="container left">
      <div class="content">
        <h2>Jeu 5 2022</h2>
        <p>Contrats signé</p>
      </div>
    </div>
  </div>
  <?php require $static_repository.'footer.php'; ?>
</body>
</html>
