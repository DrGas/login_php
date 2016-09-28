<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
<header>
	<nav>
    	<ul>
    		<li><a href="index.php">HOME</a></li>
            <?php 
				//LOGIN FORM from front page, needs to change "" to '' because it is PHP now
	//it also needs to be echoed - to be visible
	//delete all the breaks between uid and pwd - it makes it easier to style it 	
	echo "<form action='login.php' method='POST'>
	 <input type='text' name='uid' placeholder='Username'>
    <input type='password' name='pwd' placeholder='Password'>
    <button type='submit'>LOGIN</button>
	</form>";
			?>
            <li><a href="signup-page.php">SIGN UP</a></li>    
        </ul>
    </nav>
</header>