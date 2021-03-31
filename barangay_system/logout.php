<?php
session_start();
unset($_SESSION['sessionUser']);
header("Location: index.php");
exit(); 

?>