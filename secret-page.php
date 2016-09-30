<?php 
include "secret-header.php";
	

   if(!isset($_SESSION['id'])) {
    echo("<h1>Please login</h1>");
		}
	else { 
	 echo "<h1>You made it! You are on a secret page!<h1>";
	 echo "<h1>CATS ARE AWESOME<h1>";
	 echo "<img src='a-lot-of-cats.jpg'>";
		}

?>