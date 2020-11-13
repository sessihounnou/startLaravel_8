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
<?php
	// $debut_h=NULL;
	// $debut_m=NULL;
	// $fin_h=NULL;
	// $fin_m=NULL;
	// $Jour=NULL;
	// $ocupation=NULL;
	// $val=NULL;
	$debut_h=$_POST['debut_h'];
	$debut_m=$_POST['debut_m'];
	$fin_h=$_POST['fin_h'];
	$fin_m=$_POST['fin_m'];
	$Jour=$_POST['Jour'];
	$ocupation=$_POST['ocupation'];
	$val=$_POST['submit'];
	if (empty($_POST['submit'])) {
		$debut_h=htmlspecialchars($debut_h);
					$debut_m=(int)$debut_m;
					$fin_h=(int)$fin_h;
					$fin_m=(int)$fin_m;
					$Jour=(int)$Jour;
					$ocupation=htmlspecialchars($ocupation);
					include'connexion_db.php';
					$req = "INSERT INTO emp_ut(`Jour`,`debut-h`,`debut-m`,`fin-h`,`fin-m`)VALUES ('".$Jour."','".$debut_h."','".$debut_m."','".$fin_h."','".$fin_m."')";
					if ($conn->query($req) === TRUE) {
					    echo "New record created successfully".$debut_m.$_POST['submit'];
					}else {
		   				 echo "Error: " . "<br>" . $conn->error;
					}	
	}
	
	// if (isset($debut_h) and isset($debut_m) and isset($fin_h) and isset($fin_m) and isset($Jour)  ) {
	// 	if (!empty($debut_h) and !empty($debut_m) and !empty($fin_h) and !empty($fin_m) and !empty($Jour)  ) {
			
	// 		}
	// }	
 ?>
 @endsection
