<?php 
if(isset($_GET['v']) and !empty($_GET['v'])){
		$v=$_GET['v'];
	include('connexion.php');
$req=$bdd->prepare('select note from music where status=? and nom=?');
$req->execute(array('ancien',$v));
$donnee=$req->fetch();
$note=$donnee['note'];
$nom=str_replace(' ','',$v);
	if (!isset($_COOKIE[$nom])) {
		setcookie($nom,$nom,time()+365*24*60*60);
	   $note++;
       $requete=$bdd->prepare("update music set note=? where nom=? and status=?");
       $requete->execute(array($note,$v,"ancien"));
   }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149420447-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149420447-1');
</script>
<title>la music du fouladou</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="écouter la musique des meilleurs artistes du fouladou comme ndongo daradji,bandi mike,mama disket,daddi bi... ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/artist.css">
<link rel="stylesheet" type="text/css" href="styles/artist_responsive.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/album.css">
<link rel="stylesheet" type="text/css" href="styles/carousel.css">
</head>
<body>
<div class="tab-content">
<div class="super_container">
<div class="container-fluid">
<section class="tab-pane tabbed tabbed_default" id="section1">
<div class="mhn-player">
<div class="album-art"></div>
<div class="play-list">
	<?php 
	if(isset($_GET['v']) and !empty($_GET['v'])){
		$v=$_GET['v'];
		$s=$_GET['s'];
	include('connexion.php');
$req=$bdd->prepare('select * from music where status=? and nom=? order by id');
$req->execute(array($s,$v));
while ($donnee=$req->fetch()){
?>
	<a href="#" class="play"
		data-id="<?php echo $donnee['id'];?>"
		data-album="<?php echo $donnee['album'];?>"
		data-artist="<?php echo $donnee['nom'];?>"
		data-title="<?php echo $donnee['titre'];?>"
		data-albumart="images/<?php echo $donnee['photo']?>"
		data-url="files/<?php echo $donnee['fichier'];?>"></a>	
<?php }}
else{
include('connexion.php');
$req=$bdd->query('select * from music order by nom');
while ($donnee=$req->fetch()){
?>
	<a href="#" class="play"
		data-id="<?php echo $donnee['id'];?>"
		data-album="<?php echo $donnee['album']?>"
		data-artist="<?php echo $donnee['nom'];?>"
		data-title="<?php echo $donnee['titre'];?>"
		data-albumart="images/<?php echo $donnee['photo']?>"
		data-url="files/<?php echo $donnee['fichier'];?>"></a>
<?php }} ?>
</div>
<div class="audio"></div>
<div class="current-info">
	<div class="song-artist"></div>
	<div class="song-album"></div>
	<div class="song-title"></div>
</div>

<div class="controls">
<a href="#" class="toggle-play-list"><i class="fa fa-list-ul"></i></a>
<div class="duration clearfix">
	<span class="pull-left play-position"></span>
	<span class="pull-right"><span class="play-current-time">00:00</span> / <span class="play-total-time">00:00</span></span>
</div>
<div class="progress"><div class="bar"></div></div>
<div class="action-button">
	<a href="#" class="prev"><i class="fa fa-step-backward"></i></a>
	<a href="#" class="play-pause"><i class="fa fa-pp"></i></a>
	<a href="#" class="stop"><i class="fa fa-stop"></i></a>
	<a href="#" class="next"><i class="fa fa-step-forward"></i></a>
	<input type="range" class="volume" min="0" max="1" step="0.1" value="0.5" data-css="0.5">
</div>
</div>
</div>
<?php include ('fonction.php'); ?>
<?php include ('accueil.php'); ?>
</section>
<section class="tab-pane tabbed" id="section2">
<?php include ('telechargement.php') ?>
</section>
</div>
</div>
<!--les modaux pour le téléchargement et pour recueillir les mails -->
     <?php 
     	include ('modal_download.php');
    ?>
<!--le modal qui s'affiche sur la page d'accueil --> 
 <!--le modal du formulaire de contact -->
 <?php 
include ('form_modal.html');
 ?>
<?php 
include ('footer.php');
 ?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script  src="js/artist.js"></script>
<script  src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fonction.js"></script>
<script src="js/tabs.js"></script>
<script src="js/file.js"></script>
</body>
</html>


