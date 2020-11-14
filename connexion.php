<?php 
$bdd= new PDO('mysql:host=localhost;dbname=fouladou','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
if(!$bdd){
	echo"Connexion impossible";
	exit;
}
?>