<?php 
// Pour se connecter a la base de donnee db_school, on appelle le fichier de connexion
  include("../connexion.php");

if(isset($_POST['envoyer'])){
	//On utilse la fonction trim() qui enléve les espace de debut et de fin de chaine
	$nom=$_POST['nom'];
	$titre=$_POST['titre'];
	$album=$_POST['album'];
	$status=$_POST['status'];
	$ext=pathinfo($_FILES['fichier']['name']['extension']);
	$fichier=hash(sha1, session_id().microtime().$ext);
	$photo=$_FILES['photo']['name'];
	// chargement du fichier cv dans repertoire CV
             move_uploaded_file($_FILES['fichier']['tmp_name'],'../files/'.$fichier);
             move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
             $result=$bdd->prepare('insert into music (nom,titre,album,fichier,photo,status) value(?,?,?,?,?,?)');
               $req=$result->execute(array($nom,$titre,$album,$fichier,$photo,$status));
	// Ecriture de la requete d'insertion sur la table etudiant
      if($req){ 
		  header("location:ajout.php?m=1");exit;
	  }else header("location:ajout.php?m=0");exit;
}
if(isset($_POST['envoi'])){
	//On utilse la fonction trim() qui enléve les espace de debut et de fin de chaine
	$nom=$_POST['nom'];
	$photo=$_FILES['photo']['name'];
	// chargement du fichier cv dans repertoire CV
             move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
             $result=$bdd->prepare('update music set photo=?');
               $req=$result->execute($photo);
	// Ecriture de la requete d'insertion sur la table etudiant
      if($req){ 
		  header("location:formulaire.php?m=1");exit;
	  }else header("location:formulaire.php?m=0");exit;
}
?>





