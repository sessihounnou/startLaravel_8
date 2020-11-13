
@extends('retour2')

@section('content')

<?php
if(isset($_POST['salle_name']) and isset($_POST['capacite'])){
    if(isset($_POST['em'])){$em=$_POST['em'];}
    if(isset($_POST['gpa'])){$gpa=$_POST['gpa'];}
$cap=$_POST['capacite'];
$sallename=$_POST['salle_name'];
include'connexion_db.php';
if(isset($_FILES['emplois_tempss'])){
if ($_FILES['emplois_tempss']['size'] <=10000000) {
	 	$infosfichier = pathinfo($_FILES['emplois_tempss']['name']);
	 	$extension_upload = $infosfichier['extension'];
	 	$extensions_autorisees = array('jpeg','jpg','png','gif');
	 	if (in_array($extension_upload, $extensions_autorisees)){
	 		$emplois_tempss=time() .'.'. $ext;
	  		move_uploaded_file($_FILES['emplois_tempss']['tmp_name'], 'diploma/' .$emplois_tempss);
	  		echo "L'envoi a bien été effectué !";}}}
              else{$emplois_tempss=NULL;}
if(isset($_FILES['emplois_utilisation'])){
if ($_FILES['emplois_utilisation']['size'] <=10000000) {
	 	$infosfichier = pathinfo($_FILES['emplois_utilisation']['name']);
	 	$extension_upload = $infosfichier['extension'];
	 	$extensions_autorisees = array('jpeg','jpg','png','gif');
	 	if (in_array($extension_upload, $extensions_autorisees)){
	 		$emplois_utilisation=time() .'.'. $ext;
	  		move_uploaded_file($_FILES['emplois_utilisation']['tmp_name'], 'diploma/' .$emplois_utilisation);
	  		echo "L'envoi a bien été effectué !";}}}
              else{$emplois_utilisation=NULL; }
if(isset($_FILES['imgsalle'])){
if ($_FILES['imgsalle']['size'] <=10000000) {
	 	$infosfichier = pathinfo($_FILES['imgsalle']['name']);
	 	$extension_upload = $infosfichier['extension'];
	 	$extensions_autorisees = array('jpeg','jpg','png','gif');
	 	if (in_array($extension_upload, $extensions_autorisees)){
	 		$imgsalle=time() .'.'. $ext;
	  		move_uploaded_file($_FILES['imgsalle']['tmp_name'], 'diploma/' .$imgsalle);
	  		echo "L'envoi a bien été effectué !";}}}
                else{ $imgsalle=NULL;}
$maj=date('Y-m-d H:i:');
$req = "INSERT INTO carracteristique_salle(`salle_name`,`capacite`,`equipement_materiel`,`groupe_ped_aff`,`emploi_utilisation`,`imgsalle`,`emploisdutempss`,`maj`)
		VALUES ('".$sallename."','".$cap."','".$em."','".$gpa."','".$emplois_utilisation."','".$imgsalle."','".$emplois_tempss."','".$maj."')";
				if ($conn->query($req) === TRUE) {
			 echo "New record created successfully";
				}else {
		   				 echo "";
					}
}
?>
@stop

