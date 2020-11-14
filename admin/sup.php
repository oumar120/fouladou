<?php

if (!empty($_GET['sup'])) {
   $sup=$_GET ['sup'];
   include('../connexion.php');
   $bdd->query('delete from music where id='.$sup);
   header('location:gestion.php');
}
?>