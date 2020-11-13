<?php session_start();
if (isset($_SESSION['adresse_e']) && isset($_SESSION['pass'])) {
    header('Location: interface_user.php');# auto renvois vers page

} else {  ?>

@yield('content')

<?php }   ?>
