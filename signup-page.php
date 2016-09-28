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

<br><br><br>
<!--SIGN UP FORM-->

<form action="signup.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"><br>
    <input type="text" name="last" placeholder="Lastname"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">SIGN UP</button>
</form>

</html>