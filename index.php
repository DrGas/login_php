<?php 
include 'header.php';
?>

<!--SESSION echoing session ID to the frontpage-->
<?php 
	if (isset($_SESSION['id'])) {
		echo "<p>You are logged in!</p>";
		} else {
			echo "<p>You are not logged in</p>";
			}
?>

</html>