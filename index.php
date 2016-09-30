<?php 
include 'header.php';
?>

<!--SESSION echoing session ID to the frontpage-->
<?php 
	if (isset($_SESSION['id'])) {
		echo "<a href='secret-page.php'><h1>CLICK HERE TO REVELE A SECRET<h1></a>";
		 	} else {
			echo "<h1>PLEASE LOGIN</h1>";
			 echo "<img src='cat.jpg'>";
			}
?>

</html>