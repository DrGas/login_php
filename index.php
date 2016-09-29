<?php 
include 'header.php';
?>

<!--SESSION echoing session ID to the frontpage-->
<?php 
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
		} else {
			echo "You are not logged in";
			}
?>

</html>