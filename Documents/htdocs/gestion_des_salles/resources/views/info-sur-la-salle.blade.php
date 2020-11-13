@extends('retour_sans_search')
@section('content')
<style>
@media all and (min-width: 1024px){
.res_info{
    margin-top:0.7rem;
    margin-left:35%;
    }
}
@media all and (max-width: 1024px){
.res_sp{
    width:10%;
    margin-top:0.7rem;
    margin-left:5%;
}
.card_style{
            box-shadow: 3px 3px 8px 0.5px rgb(143, 147, 150);
            transition:0.5s;
}
.card_style:hover{
            box-shadow: 0 24px 1px 8px rgba(225, 170, 236, 0.13);
            transition:1s;
}
}
        </style>
          <?php
          include'connexion_db.php';
          if (isset($_GET['id'])) {
            $id=$_GET['id'];  # code...
          }

          if (!isset($id)) {
              $id=0;
              $_GET['id']=0;# code...
          }
            $selection="SELECT * FROM carracteristique_salle WHERE id = '".$id."'";
            $validation=$conn->query($selection);
            $contenus_ligne=mysqli_fetch_array($validation, MYSQLI_ASSOC);
         ?>
<div class="card res_info card-header res_sp" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title"><?php printf($contenus_ligne['salle_name']);?></h4>
    <p class="card-text">Salle de classe de l'INSTI</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="badge badge-light">Capacité</span>: <?php printf($contenus_ligne['capacite']);?> Personnes</li>
    <li class="list-group-item"><span class="badge badge-light">Equipement/matériel</span>: <?php printf($contenus_ligne['equipement_materiel']);?></li>
    <li class="list-group-item"><span class="badge badge-light">Groupes pédagogiques associés</span>: <?php printf($contenus_ligne['groupe_ped_aff']);?></li>
  </ul>
  <div style="margin-top:10%"></div>
  <ul class="list-group list-group-flush"><p>
    <li class="list-group-item"><a  href=<?php echo"image?id=$id&amp"?>   > voir emplois du temps de la salle</a></li>
    <li class="list-group-item"><a  href=<?php echo"image?id=$id&amp"?>   > voir une photo de la salle</a></li>
    <li class="list-group-item">Derniere mise à jour le <?php printf($contenus_ligne['maj']);?> </li>
  </ul>

  <div class="card-body">
    <a href="toutes-les-salles" class="card-link">Retour</a>
  </div>
</div>
@endsection
