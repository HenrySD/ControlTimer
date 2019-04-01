<?php
session_start();
unset($_SESSION['usu']);
session_destroy();

header('Location:index.php');

?>