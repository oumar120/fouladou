<?php
function make_slides($requete,$status)
{
 $output = '';
 $counter = 0;
 include('connexion.php');
while ($donnee=$requete->fetch()){
$var=$donnee['nom'];
  $count=$bdd->prepare('select * from music where status=? and nom=?');
  $count->execute(array($status,$var));
  $number=$count->rowCount();
  if($number>=1){
  if($counter == 0)
  {
   $output .= '<div class="carousel-item active carte  col-lg-3 col-sm-4">';
  }
  else
  {
   $output .= '<div class="carousel-item carte col-lg-3 col-sm-4">';
  }
  $output .='
  <div class="card">
    <img src="images/'.$donnee['photo'].'" class="card-img-top" alt="'.$donnee['nom'].'" >
    
                <div class="card-body">
            <h6 style="font-size: 0.5em;" class="card-title "><i class="fa fa-user"></i> '.$donnee["nom"].'
          <i class="fa fa-music card-subtitle"></i> '.$number. ' titres
        <i class="fa fa-volume-up card-subtitle"></i> Lu '.$donnee["note"].' fois
        <a href="index.php?v='.$donnee['nom'].'&s='.$status.'" class="pull-right" type="button"><span style="font-size:30px;"><i class="fa fa-play-circle"></i></span></a></h6>
                </div>
      </div>
    </div>' ;
  $counter = $counter + 1;
 } }
 return $output;
}
function download($req,$statu)
{
 $output = '';
 $counter = 0;
 include('connexion.php');
while ($donnee=$req->fetch()){
$var=$donnee['nom'];
  $count=$bdd->prepare('select * from music where status=? and nom=?');
  $count->execute(array($statu,$var));
  $number=$count->rowCount();
  if($number>=1){
  if($counter == 0)
  {
   $output .= '<div class="carousel-item active carte col-lg-3 col-sm-4">';
  }
  else
  {
   $output .= '<div class="carousel-item carte col-lg-3 col-sm-4 col-xs-6">';
  }
  $output .='
  <div class="card">
    <img src="images/'.$donnee['photo'].'" class="card-img-top" alt="'.$donnee['nom'].'" >
    
                <div class="card-body">
            <h6 style="font-size: 0.5em;" class="card-title "><i class="fa fa-user"></i> '.$donnee["nom"].'
          <i class="fa fa-music card-subtitle"></i> '.$number. ' titres
         <a type="button"  data-var="'.$donnee["nom"].' " class="btn_download pull-right"><span style="font-size:20px;"><i class="fa fa-download" ></i></span></a>
        </h6>
                </div>
      </div>
    </div>';
  $counter = $counter + 1;
 } }
 return $output;
}
?>