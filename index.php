<?php 
include 'header.php'
?>
<!--LOGIN FORM-->
<form action="login.php" method="POST">
	 <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">LOGIN</button>
</form>

<!--SESSION echoing session ID to the frontpage-->
<?php 
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
		} else {
			echo "You are not logged in";
			}
?>
<br><br><br>
<!--LOG OUT, we don't need to put "method" because we just need to run this one file -->
<form action="logout.php">
	<button>LOG OUT</button>
</form>

</html>