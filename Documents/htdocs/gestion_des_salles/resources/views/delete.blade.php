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
        <?php if (isset($_GET['search'])==true) {
            $id=0;
            include'connexion_db.php';
            $search=$_GET ['search']; //declaration d'une variable qui gardera l'id de la table pour un rappel
            $recherche="SELECT * FROM carracteristique_salle WHERE salle_name LIKE '%".$search."%'";
            $recherche2="SELECT * FROM carracteristique_salle WHERE groupe_ped_aff LIKE '%".$search."%'";
            $validation=$conn->query($recherche);
            $validation2=$conn->query($recherche2);$i=0;
            ;$tuple = mysqli_fetch_array($validation,MYSQLI_ASSOC);
            $nr=0;if (empty($tuple)) {
                $validation=$validation2;# code...
            }
            while ($tuple = mysqli_fetch_array($validation,MYSQLI_ASSOC)) { $nr++; $id=$tuple['id'];
                if ($nr%3==1) {
                   ?>
                <div class="card-deck res" >
                <?php
                            }
                ?><div class="card res card_style" >
                <div class="card-body ">
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
                    }
        }

        else {
        include'connexion_db.php';
        $id=0; //declaration d'une variable qui gardera l'id de la table pour un rappel
        $lecture ="SELECT *FROM carracteristique_salle ORDER BY id  ";
	    $validation=$conn->query($lecture);
	    $nr=0;
        while ($tuple = mysqli_fetch_array($validation, MYSQLI_ASSOC)) { $nr++; $id=$tuple['id'];
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
            <a href=<?php echo"delete-salle-confirm?id=$id&amp"?> name='id' style="width: 40%;margin-left:31%;margin-bottom:1%;"  class="btn btn-outline-primary"
  >supprimer</a></form>
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

<?php
        }
        ?>
@endsection
