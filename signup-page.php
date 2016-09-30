<?php 
include 'header.php';
?>

<!--SESSION echoing session ID to the frontpage-->

<?php 
	if (isset($_SESSION['id'])) {
		echo "<h1>You are already logged in!</h1>";
		} else {
			echo " <h1>PLEASE SIGN UP</h1><br>
				<form action='signup.php' method='POST' id='signupform'>
				<input type='text' name='first' placeholder='Firstname'><br><br>
				<input type='text' name='last' placeholder='Lastname'><br><br>
				<input type='text' name='uid' placeholder='Username'><br><br>
				<input type='password' name='pwd' placeholder='Password'><br><br>
				<button type='submit' id='sigupbutton'>SIGN UP</button>
				</form>";
	
	
	/*header("Location: index.php");	*/	}
?>



</html>