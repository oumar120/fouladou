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
<link rel="stylesheet" type="text/css" href="../styles/pagination.css">
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

	<div class="home1">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_form_container">
						<form action="recherche.php" class="search_form" id="search_form" method="get">
							<div class="d-flex flex-md-row flex-column align-items-center justify-content-between">
								<input type="text" name="search" class="search_input col-lg-8" required="required" 
								placeholder="rechercher un titre,un album ou un artiste à écouter">
					<button class="button search_button" type="submit"><span>rechercher</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Songs -->
	<?php 
include('../connexion.php');
$req=$bdd->query('select * from music order by id desc limit 0,10');
while ($donnee=$req->fetch()){;
?>
        <div class="songs1">
        	
		<div class="container">
			<div class="row">
	
				<div class="col">
					<div class="songs_container1">

						<!-- Song -->
						<div class="song">

							<!-- Player -->
						<div class="single_player_container">
							<div class="single_player">
	<div class="jp-jplayer jplayer" data-title="<?php echo $donnee['nom'];?>&nbsp;<strong class='d-none d-sm-inline'><?php echo $donnee['titre'] ; ?></strong>" data-artist="<?php echo $donnee['titre'] ; ?>" data-ancestor=".<?php echo $donnee['id'] ; ?>" 
		data-url="../files/<?php echo $donnee['fichier'] ; ?>"></div>

				<div class="jp-audio <?php echo $donnee['id'] ; ?>" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
		<a href="mod.php?m=<?php echo $donnee['id'];?>"> <button class=" player_button" tabindex="0">M</button></a>
		<a href="sup.php?sup=<?php echo $donnee['id'];?>"> <button class=" player_button" tabindex="0">S</button></a>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
													<div class="mute_button">
														<button class="jp-mute" tabindex="0"></button>
													</div>
													<div class="d-flex flex-row align-items-center justify-content-start">
														<div class="jp-volume-bar">
															<div>
																<div class="jp-volume-bar-value"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<div class="jp-no-solution">
											<span>Mis à jour requis</span>
											pour que ce lecteur fonctionne vous devez mettre à jour votre navigateur sur la derniere version ou visiter <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
}
?>				
<ul class="pager">
<li><a href="page.php?p=1" >1</a></li>
<li><a href="page.php?p=2">2</a></li>
<li><a href="page.php?p=3">3</a></li>
<li><a href="page.php?p=4">4</a></li>
<li><a href="page.php?p=5">5</a></li>
<li><a href="page.php?p=6">6</a></li>
<li><a href="page.php?p=7">7</a></li>
<li><a href="page.php?p=8">8</a></li>
<li><a href="page.php?p=9">9</a></li>
<li><a href="page.php?p=10">10</a></li>
</ul>
	<!-- Footer -->

	<footer class="footer">
		<div class="background_image" style="background-image:url(../images/footer.jpg)"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">Music fouladou</span>
							</a>
						</div>

						<!-- Footer Social -->
						<div class="footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-center">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
			
	</footer>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="../js/artist.js"></script>
</body>
</html>