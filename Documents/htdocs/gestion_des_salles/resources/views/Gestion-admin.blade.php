@extends('retour')
@section('content')
<style>
 .card_style{
            box-shadow: 3px 3px 8px 0.5px rgb(143, 147, 150);
            transition:0.5s;
        }
        .card_style:hover{
            box-shadow: 0 24px 1px 8px rgba(225, 170, 236, 0.13);
            transition:1s;
        }
@media all and (min-width: 1024px){
.res{
	width:90%;
    margin-top:0.7rem;
    margin-left:05%;
    }
}
        </style>
<div class="card-deck res" style='margin-top:2rem'>
<div class="card card_style" >
  <div class="card-body">
    <h4 class="card-title">Ajouter un administrateur</h4>
    <h6 class="card-subtitle mb-2 text-muted">Donner des droits d'accès a une autre personne</h6>
    <p class="card-text">Cette option vous permet de configurer un nouveau profil c'est à dire nom d'utilisateur et mot de passe  à un autre utilisateur qui devient administrateur et à ce titre pourrait modifier et /ou ajouter de nouvelles informations .</p>
    <a href="Add-admin" class="card-link">Ajouter le nouvel administrateur </a>

  </div>
  </div>
<div class="card card_style">
  <div class="card-body">
    <h4 class="card-title">Ajout de salle(s)</h4>
    <h6 class="card-subtitle mb-2 text-muted">Ajouter de nouvelles salles ou des salles retirés auparavant </h6>
    <p class="card-text">Cette option vous permet d'entrer des renseignements liés a une salles (nom - profile - groupes pédagogiques affiliés - Emplois de temps ).</p>
    <a href="Add-salle" class="card-link">ajout de la nouvelle salle(s)</a>

  </div>
  </div>
</div>
<div class="card-deck res" style='margin-top:2rem'>
<div class="card card_style" >
  <div class="card-body">
    <h4 class="card-title">update</h4>
    <h6 class="card-subtitle mb-2 text-muted">modifier des informations </h6>
    <p class="card-text">Cette option vous permet de modifier des informations précédement mentionnées.</p>
    <a href="update" class="card-link">mises à jours</a>

  </div>
  </div>
<div class="card card_style">
  <div class="card-body">
    <h4 class="card-title">Supression de salle(s)</h4>
    <h6 class="card-subtitle mb-2 text-muted">Action irréverssible </h6>
    <p class="card-text">Cette option vous permet de suprimé toutes les données relative à une ou plusieurs salles.</p>
    <a href="delete" class="card-link">Supression </a>

  </div>
  </div>
</div>
@endsection
