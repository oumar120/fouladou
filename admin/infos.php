
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

	<div class="home mb-5">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div> 
	</div>
	<div class="container">
	<div class="table-responsive">
	 <table class="table table-bordered  table-condensed mt-5" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>prenom</th>
                      <th>nom</th>
                      <th>email</th>
                      <th>message</th>
                    </tr>
                    </thead>
                  
          <?php 
           include('../connexion.php');
           $req=$bdd->query('select * from infos');
           while ($donnee=$req->fetch()) {
           ?>
           <tbody>
                    <tr>
                    	<td><?php echo $donnee['prenom'] ?> </td>
                    	<td><?php echo $donnee['nom'] ?> </td>
                    	<td><?php echo $donnee['email'] ?> </td>
                    	<td><?php echo $donnee["message"] ?> </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                </div>
                </div>
	<!-- Footer -->
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="../js/artist.js"></script>
</body>
</html>