@extends('retour')
@section('content')
<style>
@media all and (max-width: 1024px){
	.res{
		width:90%;
	    margin-top:0.7rem;
	    margin-left:05%;
	}
	
}
@media all and (min-width: 1024px){
	.res{
		width:90%;
	    margin-top:0.7rem;
	    margin-left:05%;
	}
}
</style>
<form method="POST" action="form_utilisateur">
	{{ csrf_field() }}
	<div class="res">  Ajoutez l'emplois d'utilisation d'une salle </div>
	
	<div class="row res">
		
	    <div class="col-md-3 mb-3">
     		 <select class="custom-select" name="salle">
			 <option selected>salles</option>
			  <?php include'connexion_db.php';
			   $lecture ="SELECT *FROM carracteristique_salle ORDER BY id  ";
	    	   $validation=$conn->query($lecture);
	    	   while ($tuple = mysqli_fetch_array($validation, MYSQLI_ASSOC)) { ?> 

			 <option value=<?php printf($tuple['id']); ?> > <?php printf($tuple['salle_name']); }?> </option>
			  
			</select>
    	</div>
		<div class="col-md-1 mb-3">
			<select class="custom-select" name="Jour">
			  <option selected>Jour</option>
			  <option value="1">Lundi</option>
			  <option value="2">Mardi</option>
			  <option value="3">Mercredi</option>
			  <option value="4">Jeudi</option>
			  <option value="5">Vendredi</option>
			</select>
		</div>de
		<div class="col-md-1 mb-3">
			<select class="custom-select" name="debut_h">
			 <option selected>Heures</option>
			  <?php for ($i=7; $i <=19 ; $i++) { ?> 
			 <option value=<?php echo$i; ?>><?php echo$i; }?></option>
			  
			</select>
		</div>
		<div class="col-md-1 mb-3">
			<select class="custom-select" name="debut_m">
			  <option selected>min</option>
			 	<?php for ($i=0; $i <=59 ; $i++) { ?> 
			  <option value=<?php echo$i; ?>><?php echo$i; }?></option>
			  
			</select>
		</div>à
		<div class="col-md-1 mb-3">
			<select class="custom-select" name="fin_h">
			 <option selected>Heures</option>
			  <?php for ($i=7; $i <=19 ; $i++) { ?> 
			 <option value=<?php echo$i; ?>><?php echo$i; }?></option>
			  
			</select>
		</div>
		<div class="col-md-1 mb-3">
			<select class="custom-select" name="fin_m">
			  <option selected>min</option>
			 	<?php for ($i=0; $i <=59 ; $i++) { ?> 
			  <option value=<?php echo$i; ?>><?php echo$i; }?></option>
			  
			</select>
		</div>Ocupation
		<div class="col-md-3 mb-3">
     		 <input type="text" class="form-control" required="" name="ocupation" placeholder="matière , conference etc.">
    	</div>

		<div class="col-md-1 mb-3">
      		<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
    	</div>
		</div>
	</div>
	
</form>
<?php
	$debut_h=NULL;
	$debut_m=NULL;
	$fin_h=NULL;
	$fin_m=NULL;
	$Jour=NULL;
	$salle=NULL;
	$ocupation=NULL;
	$val=NULL;
	if (isset($_POST['submit'])) {
	$salle=$_POST['salle'];
	$debut_h=$_POST['debut_h'];
	$debut_m=$_POST['debut_m'];
	$fin_h=$_POST['fin_h'];
	$fin_m=$_POST['fin_m'];
	$Jour=$_POST['Jour'];
	$ocupation=$_POST['ocupation'];
	$val=$_POST['submit'];
		$debut_h=htmlspecialchars($debut_h);
					$debut_m=(int)$debut_m;
					$fin_h=(int)$fin_h;
					$fin_m=(int)$fin_m;
					$Jour=(int)$Jour;
					$ocupation=htmlspecialchars($ocupation);
					$req = "INSERT INTO emp_ut(`salle`,`Jour`,`debut-h`,`debut-m`,`fin-h`,`fin-m`,`utilisation`)VALUES ('".$salle."','".$Jour."','".$debut_h."','".$debut_m."','".$fin_h."','".$fin_m."','".$ocupation."')";
					if ($conn->query($req) === TRUE) {
						 $re="SELECT * FROM carracteristique_salle WHERE id LIKE '%".$salle."%'";
						 $vsalle=$conn->query($re);
						 $tuple = mysqli_fetch_array($vsalle, MYSQLI_ASSOC);
					   ?><div class="res"><?php echo "vous avez ajouter de nouveau horaire pour la salle";
					    echo " '";
					    printf($tuple['salle_name']);
					    echo "'";
					    ?></div><?php

					}else {
		   				 echo "Error: " . "<br>" . $conn->error;
					}	
	}
 ?>

@endsection
