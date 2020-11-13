
<?php
session_start();
$pass=$_POST['password'];
//$pass=md5($passe);
$identifiant=$_POST['identifiant'];
include'connexion_db.php';
$selection="SELECT * FROM users order by id";
$validation=$conn->query($selection);
while($tuple=mysqli_fetch_array($validation, MYSQLI_ASSOC)){
	if ($pass==$tuple['password'] and $identifiant==$tuple['email'] or $identifiant == $tuple['name']) {
		Route::get('admin-auth', function () {
    	return redirect('Gestion-admin');
		});
		return redirect()->route('Gestion-admin');
		//echo "conformité passé ";
	}
	else {
		echo "error";
	}
}
 ?>
