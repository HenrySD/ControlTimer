<?php
session_start();
unset($_SESSION['sessionUsuario']);
session_destroy();

header('Location: index.php');

?>