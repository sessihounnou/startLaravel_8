<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion des salles </title>

        <!-- Fonts -->
        <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <!-- Styles -->
        <style>
        .card_style{
            box-shadow: 15px 0px 18px 0px whitesmoke;
            transition:0.5s;
        }
        .card_style:hover{
            box-shadow: 0 4px 12px 0 rgba(225, 170, 236, 0.13);
            transition:1s;
        }
        @media all and (min-width: 1024px){
.res{
	width:90%;
    margin-top:0.7rem;
    margin-left:05%;
    }
}        </style>
    </head>
    <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">INSTI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">INSTI <span class="sr-only">(current)</span></a>
      </li>

    </ul>
        <a class="btn btn-outline-success my-2 my-sm-0" href="Admin">Espace Administrateur</a>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" style="margin-bottom: 0rem;" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../resources/views/img1.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="#"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="#" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div style="margin-top:1rem;margin-bottom: 1rem;font-size: larger ; border:1px green outset;width:25rem;padding-left: 0.5rem;" class="mx-auto" >
    listes des salles disponible aujourd'hui
        <span style="margin-left:1em;margin-bottom:0.2em;background-color: green;" class="badge"><?php $i=0; echo $i; ?> </span>
</div>

<?php
include'connexion_db.php';
setlocale(LC_TIME, "fr_FR" ,"French");   
            $dates=date('Y-m-d');
             echo strftime("%A %d %B %G",strtotime($dates));
$lecture ="SELECT *FROM carracteristique_salle ORDER BY id  ";
$validation=$conn->query($lecture);
$dat=date('Y-m-d');$dayS=strftime("%A",strtotime($dat));
// if ($dayS=='lundi') {
//  $dsearch=1;
// }
// if ($dayS=='mardi') {
//  $dsearch=2 ;
// }
// if ($dayS=='mercredi') {
//  $dsearch=3;
// }
// if ($dayS=='jeudi') {
//  $dsearch=4;
// }
//  if ($dayS=='vendredi') {
//   $dsearch=5;
//  }
// // if ($dayS=='samedi') {
// //  $dsearch=6;
// // }
// // if ($dayS=='dimanche') {
// //  $dsearch=7;
// // }
 // echo"<br>". $dsearch;
$recJ="SELECT *FROM emp_ut  order by id ";
$valJ=$conn->query($recJ);
$id=0; //declaration d'une variable qui gardera l'id de la table pour un rappel
$nr=0;
$tuple = mysqli_fetch_array($validation, MYSQLI_ASSOC);
for ($i=0; $i <3 ; $i++) {
$nr++; $id=$tuple['id'];
if ($nr%3==1) {
	   ?>
            <div class="card-deck res " >
            <?php
	                    }
            ?><div class="card res card_style" >
            <div class="card-body">
            <h4 class="card-title" style="font-size: 150%;font-weight: bold;"><?php 	printf($tuple['salle_name']) ; ?></h4>
            <p class="card-text"><?php 	printf($tuple['groupe_ped_aff']) ; ?></p>
            <?php $id=($tuple['id']) ; ?>
            <form methode="GET">
            <a href=<?php echo"information-sur-la-salle?id=$id&amp"?> name='id' style="width: 40%;margin-left:31%;margin-bottom:1%;"  class="btn btn-outline-primary"
  >voir</a></form>
            <p class="card-text card-link"><small class="text-muted"> Derniere mise à jour le: <?php printf($tuple['maj']); ?> </small></p>
             </div>
             </div><?php
	    	if ($nr%3==0) {
	   		?>
	   		</div>
	   		<?php
                    }
                } ?>
       <?php
//fermer la connexion
$conn->close(); ?>

        </div>
   <br> <a href="toutes-les-salles-disponibles" style="margin-left: 10%;">  -- voir toutes toutes les salles disponibles -- </a>

<?php
include'connexion_db.php';
        $id=0; //declaration d'une variable qui gardera l'id de la table pour un rappel
        $lecture ="SELECT *FROM carracteristique_salle ORDER BY id  ";
	    $validation=$conn->query($lecture);
        $nr=0;
        $tuple = mysqli_fetch_array($validation, MYSQLI_ASSOC);
        for ($i=0; $i <3 ; $i++) {
            # code...
         $nr++; $id=$tuple['id'];
            if ($nr%3==1) {
	   	    ?>
            <div class="card-deck res " >
            <?php
	                    }
            ?><div class="card res card_style" >
            <div class="card-body">
            <h4 class="card-title" style="font-size: 150%;font-weight: bold;"><?php 	printf($tuple['salle_name']) ; ?></h4>
            <p class="card-text"><?php 	printf($tuple['groupe_ped_aff']) ; ?></p>
            <?php $id=($tuple['id']) ; ?>
            <form methode="GET">
            <a href=<?php echo"information-sur-la-salle?id=$id&amp"?> name='id' style="width: 40%;margin-left:31%;margin-bottom:1%;"  class="btn btn-outline-primary"
  >voir</a></form>
            <p class="card-text card-link"><small class="text-muted"> Derniere mise à jour le: <?php printf($tuple['maj']); ?> </small></p>
             </div>
             </div><?php
	    	if ($nr%3==0) {
	   		?>
	   		</div>
	   		<?php
                    }
                } ?>
       <?php
//fermer la connexion
$conn->close(); ?>

    <br><a href="toutes-les-salles" style="margin-left: 10%;">  -- voir plus de salles --  </a>
<br>

<div class="bg-white h-100">

										<!-- SETTING IMAGE WITH bg-10 -->
										<div class="h-50 bg-5"></div>

									</div>
    <!-- SCIPTS -->
	<script type="text/javascript">
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "voir plus de salles";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "reduire";
    moreText.style.display = "inline";
  }
}</script>

    </body>
</html>
