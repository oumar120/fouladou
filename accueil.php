<?php 
$req=$bdd->query('select distinct nom,photo,note from music where status="ancien" order by id desc limit 0,10');
$status="ancien";
$req1=$bdd->query('select distinct nom,photo,note from music where status="nouveau" order by id desc');
$status1="nouveau";
$req2=$bdd->query('select distinct nom,photo,note from music where status="ancien" order by note desc limit 0,10');
$status2="ancien";
$req3=$bdd->query('select distinct nom,photo,note from music where status="ancien" and (nom="dabi" or nom="mc baledio" or nom="Mayo diao" or nom="abdou diop" or nom="ibrahima coumbi")');
$status3="ancien";
$req4=$bdd->query('select distinct nom,photo,note from music where status="ancien" order by nom');
$status4="ancien";
 ?>
 <div class="row mb-5 pb-5 ">
<h1 class="text"><i class="fa fa-plus pl-4"></i> ajoutés récemment </h1>
<div id="carousel-example" class="carousel slide col-lg-12 col-sm-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <?php echo make_slides($req,$status); ?>
              </div>
<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<h1 class="text"><i class="fa fa-heart pl-4"></i> nouveautés </h1>
<div id="carousel-example1" class="carousel slide col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto">
                <?php echo make_slides($req1,$status1); ?>
              </div>
<a class="carousel-control-prev" href="#carousel-example1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<h1 class="text"><i class="fa fa-headphones pl-4"></i> les plus écoutés </h1>
<div id="carousel-example2" class="carousel slide carousel-multi-item col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <?php echo make_slides($req2,$status2); ?>
              </div>
<a class="carousel-control-prev" href="#carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<h1 class="text"><i class="fa fa-history pl-4"></i> Rétro </h1>
<div id="carousel-example3" class="carousel slide col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto">
                <?php echo make_slides($req3,$status3); ?>
              </div>
<a class="carousel-control-prev" href="#carousel-example3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<h1 class="text"><i class="fa fa-folder pl-4"></i> Albums </h1>
<div id="carousel-example4" class="carousel slide col-lg-12" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto">
                <?php echo make_slides($req4,$status4); ?>
              </div>
<a class="carousel-control-prev" href="#carousel-example4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
</div>