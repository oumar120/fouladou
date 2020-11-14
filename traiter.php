<?php
include_once 'connexion.php';

$nom1 = (isset($_POST['nom1'])) ? $_POST['nom1'] : '';
$nom2 = (isset($_POST['nom2'])) ? $_POST['nom2'] : '';
$nom3 = (isset($_POST['nom3'])) ? $_POST['nom3'] : '';
$nom4 = (isset($_POST['nom4'])) ? $_POST['nom4'] : '';
$option = (isset($_POST['option'])) ? $_POST['option'] : '';

switch ($option) {
	case 1:
	$consulter = "INSERT INTO infos (prenom,nom,email,message) VALUES('$nom1','$nom2','$nom3','$nom4')";      
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
		break;
$data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
}
if (isset($_POST['envoyer'])) {
$consulter = "INSERT INTO infos (prenom,nom,email,message) VALUES('$nom1','$nom2','$nom3',' ')";            
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        if ($resultat) {
           setcookie('download','ok',time()+365*24*60*60);
           header('location:index.php#section2');
        }
}
if (isset($_POST['contenu']) and !empty($_POST['contenu'])) {
       $contenu=$_POST['contenu'];
       include('connexion.php');
$req=$bdd->prepare('select * from music where status=? and nom=?');
$req->execute(array("ancien",$contenu));
while ($donnee=$req->fetch()) { ?>
  <div class="d-block p-1 m-1" style="background-color:#007bff; border-left:solid 4px black;">
<h4 class="text-right"> <?php echo $donnee['titre']; ?> </h4>
  <a href="files/<?php echo $donnee['fichier'] ; ?>" title="telecharger" download>
    <span style="color:black;" class="pl-1"><i class="fa fa-download"></i></span> </a>
</div>
<?php }
if (isset($_COOKIE['download'])) {
  $req=$bdd->prepare('select compteur from music where status=? and nom=?');
$req->execute(array('ancien',$contenu));
$donnee=$req->fetch();
$compteur=$donnee['compteur'];
$name=str_replace(' ','_',$contenu);
  if (!isset($_COOKIE[$name])) {
    setcookie($name,$name,time()+86400);
     $compteur++;
       $requete=$bdd->prepare("update music set compteur=? where nom=? and status=?");
       $requete->execute(array($compteur,$contenu,"ancien"));
}
}
 }
?>