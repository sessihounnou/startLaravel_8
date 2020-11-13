
@extends('retour2')

@section('content')


<?php
          include'connexion_db.php';
          if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $select = "SELECT * FROM carracteristique_salle WHERE id = '".$id."'";
            $valid=$conn->query($select);
            $contenus_ligne=mysqli_fetch_array($valid, MYSQLI_ASSOC);
            $Sallename=$contenus_ligne['salle_name'];  # code...
            $selection = "DELETE FROM `carracteristique_salle` WHERE `carracteristique_salle`.`id` = $id";
            $validation=$conn->query($selection);
            echo 'suppression de la salle '.$Sallename.' effectuée';
          }
        else{
            echo 'difficulté de supression de la salle essayer ultérieurement ou contacter votre administrateur';

        }
        if (!isset($id)) {
                echo 'Aucune salle sélectionné';
            }
         ?>
@stop
