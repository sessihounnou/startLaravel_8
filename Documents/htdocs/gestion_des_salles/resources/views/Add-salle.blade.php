
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
         ?><form method="POST" action="Add-salle-effect" >
         {{ csrf_field() }}
<div class="card res_info card-header res_sp" style="width: 20rem;">
  <div class="card-body">
<input type="hidden" name="id" value=<?php echo $id;?> />
    <h4 class="card-title"><textarea type="text" required="" name="salle_name" placeholder="Nom de la salle "></textarea></h4>
    <p class="card-text">Salle de classe de l'INSTI</p>
  <ul class="list-group list-group-flush">

    <li class="list-group-item"><span class="badge badge-light">Capacité</span>: <textarea type="text"required="" name="capacite" placeholder="capacité"></textarea> Personnes</li>
    <li class="list-group-item"><span class="badge badge-light">Equipement/matériel</span>:<textarea  type="text" name="em" placeholder="Entrer les équipements et le materiels à la disposition de la salle"></textarea></li>
    <li class="list-group-item"><span class="badge badge-light">Groupes pédagogiques associés</span>:<textarea  type="text" name="gpa" placeholder="Entrer les différents groupes pédagogique associé à la salles "></textarea></li>
  </ul>

  <div style="margin-top:10% margin-right:100%"></div>


  <div class="card-body">

  </div>
</div>
<ul class="list-group list"><p>
    <li class="list-group-item"><input type='file' name='emplois_tempss' > update emplois du temps de la salle</a></li>
    <li class="list-group-item"><input type='file' name='imgsalle' > update une photo de la salle</a></li>
    </br><a href="update-form"  class="card-link"><input type="submit" name="" value="créer"></a></br>
  </ul>

<a href="update" class="card-link">Retour</a>
    </form>

@stop
