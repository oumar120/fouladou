<?php
        if (isset($_GET['m']) and !empty($_GET['m'])){
          $m=$_GET['m'];
         include('../connexion.php');
     $req=$bdd->query('select * from music where id='.$m);
         $donnee=$req->fetch(); 
      }
     if (isset($_POST['modifier'])) {
  $m=$_POST['m'];
$nom=$_POST['nom'];
$titre=$_POST['titre'];
$album=$_POST['album'];
$status=$_POST['status'];
include('../connexion.php');
$req=$bdd->prepare('update music set nom=?,titre=?,album=?,status=? where id='.$m);
$req->execute(array($nom,$titre,$album,$status));
header('location:gestion.php');
}     
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fouladou</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/artist.css">
<link rel="stylesheet" type="text/css" href="../styles/artist_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">Fouladou</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="gestion.php">Accueil</a></li>
								<li><a href="ajout.php">Ajouter</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="col-lg-3">
							
						</div>

							<!-- Hamburger -->
							<div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container">
			<div class="menu_background"></div>
			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="menu_content d-flex flex-column align-items-center justify-content-start">
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-center justify-content-start">
						<li><a href="gestion.php">Accueil</a></li>
						<li><a href="ajout.php">Ajouter</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		 
	</div>
	<div class="container">
      <div class="row">
          <form action="mod.php" method="post" enctype="multipart/form-data" class="well col-lg-6">
            <div class="form-group">
          <input type="hidden" name="m" class="form-control" value="<?php echo $donnee['id']?>">
            </div>
            <div class="form-group">
              <label for="ti">Artiste</label>
          <input type="text" name="nom" class="form-control" value="<?php echo $donnee['nom']?>">
            </div>
            <div class="form-group">
              <label for="au">Titre</label>
              <input type="text" name="titre" class="form-control" value="<?php echo $donnee['titre']?>">
            </div>
            <div class="form-group">
            <label for="fi">Album</label>
               <input type="text" name="album" class="form-control" value="<?php echo $donnee['album']?>">
              </div>
             <div class="form-group">
            <label for="fi">Status</label>
             <input type="text" name="status" class="form-control" value="<?php echo $donnee['status']?>">
              </div>
              <div class="form-group">
            <input type="submit" class="btn btn-primary" name="modifier" value="envoyer" class="form-control">
        </div>
          </form>
        </div>
      </div> 
	<!-- Footer -->
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="../js/artist.js"></script>
</body>
</html>