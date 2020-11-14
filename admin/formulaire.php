<?php

if(isset($_POST['envoyer'])){
	//On utilse la fonction trim() qui enléve les espace de debut et de fin de chaine
	$nom=$_POST['nom'];
	$photo=$_FILES['photo']['name'];
	include('../connexion.php');
	// chargement du fichier cv dans repertoire CV
             move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
            $req=$bdd->prepare("update music set photo=? where nom=?");
            $req->execute(array($photo,$nom));
	// Ecriture de la requete d'insertion sur la table etudiant
      if($req){ 
		  header("location:formulaire.php?m=1");exit;
	  }else header("location:formulaire.php?m=0");exit;
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
						<li><a href="../index.php">site</a></li>
						<li><a href="formulaire.php">photo</a></li>
						<li><a href="infos.php">infos</a></li>
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
						<li><a href="../index.php">site</a></li>
						<li><a href="formulaire.php">photo</a></li>
						<li><a href="infos.php">infos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		 
	</div>
	<div class="container" style="margin-top:90px;">
      <div class="row">
          <form action="formulaire.php" method="post" enctype="multipart/form-data" class="well col-lg-6">
              <div class="form-group">
                <label for="me">photo</label>
                <input type="file" name="photo" class="form-control" id="me">
              </div>
                <select name="nom">
                	<?php
              include('../connexion.php');
              $req=$bdd->query('select distinct nom from music');
              while ($donnee=$req->fetch()){
              ?>
                	<option value="<?php echo $donnee['nom']?>"><?php echo $donnee['nom']?></option>
                	<?php } ?>
                </select>
          
              <div class="form-group">
            <input type="submit" class="btn btn-primary" name="envoyer" value="envoyer" class="form-control">
        </div>
          </form>
        </div>
      </div> 
      <?php 
             if (!empty($_GET['m'])) {
             	$m=$_GET['m'];
             	if ($m==1) {
             		echo "données enregistrées avec succes!";
             	}else echo "Erreur! données non enregistrées";
             }
       ?>
	<!-- Footer -->
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="../js/artist.js"></script>
</body>
</html>