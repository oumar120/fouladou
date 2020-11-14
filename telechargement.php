<?php 
$req=$bdd->query('select distinct nom,photo,note from music where status="ancien"');
$status="ancien";
$req1=$bdd->query('select distinct nom,photo,note from music where status="ancien" order by compteur desc limit 0,10');
$status1="ancien";
 ?>
 <div class="row mb-5 pb-5 ">
<h6 style="font-size: 1.5em;" class="text pl-4"> Contenu téléchargeable</h6>
<div id="carousel" class="carousel slide col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <?php echo download($req,$status); ?>
              </div>
<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<h1 style="font-size: 1.5em;" class="text pl-4">Les plus téléchargés </h1>
<div id="carousel1" class="carousel slide col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto">
                <?php echo download($req1,$status1); ?>
              </div>
<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>

</div>