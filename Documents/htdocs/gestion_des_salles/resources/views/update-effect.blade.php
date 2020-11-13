@extends('retour2')
@section('content')
<?php
$id=$_GET['id'];
$cap=$_GET['capacite'];
$sallename=$_GET['salle_name'];
$em=$_GET['em'];
$gpa=$_GET['gpa'];
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

$req = "UPDATE carracteristique_salle SET
 salle_name = '$sallename',
  capacite = '$cap',
  equipement_materiel= '$em',
  groupe_ped_aff= '$gpa',
  emploi_utilisation= '$emplois_utilisation',
  imgsalle = '$imgsalle',
  emploisdutempss = '$emplois_tempss'
  WHERE id ='$id'";
if($conn->query($req))
          ?>
@stop
