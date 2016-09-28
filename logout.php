<?php 
session_start();
//ending the session
session_destroy();

header("Location: index.php");
?>

