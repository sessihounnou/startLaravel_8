
@extends('retour2')

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
    margin-left:10%;
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
         ?><form action="update-effect" method="GET">
<div class="card res_info card-header res_sp" style="width: 20rem;">
  <div class="card-body">
<input type="hidden" name="id" value=<?php echo $id;?> />
    <h4 class="card-title"><textarea type="text" name="salle_name" ><?php printf($contenus_ligne['salle_name']);?></textarea></h4>
    <p class="card-text">Salle de classe de l'INSTI</p>
  <ul class="list-group list-group-flush">

    <li class="list-group-item"><span class="badge badge-light">Capacité</span>: <textarea type="text" name="capacite" value= ><?php printf($contenus_ligne['capacite']);?></textarea> Personnes</li>
    <li class="list-group-item"><span class="badge badge-light">Equipement/matériel</span>:<textarea  type="text" name="em" placeholder=<?php printf($contenus_ligne['equipement_materiel']);?>  ><?php printf($contenus_ligne['equipement_materiel']);?>   </textarea></li>
    <li class="list-group-item"><span class="badge badge-light">Groupes pédagogiques associés</span>:<textarea type="text" name="gpa" value= ><?php printf($contenus_ligne['groupe_ped_aff']);?></textarea></li>
  </ul>

  <div style="margin-top:10% margin-right:100%"></div>


  <div class="card-body">

  </div>
</div>
<ul class="list-group list"><p>
    <li class="list-group-item"><input type='file' name='emplois_utilisation' > update emplois d'utilisation de la salle</a></li>
    <li class="list-group-item"><input type='file' name='emplois_tempss' > update emplois du temps de la salle</a></li>
    <li class="list-group-item"><input type='file' name='imgsalle' > update une photo de la salle</a></li>
    <li class="list-group-item">Derniere mise à jour le <?php printf($contenus_ligne['maj']);?> </li>
  </ul>
<a href="update-form"  class="card-link"><input type="submit" name="" value="update"></a>
<a href="update" class="card-link">Retour</a>
    </form>

@stop
