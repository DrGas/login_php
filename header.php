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
    		<li><a href="index.php">HOME</li>
            <?php 
				//LOGIN FORM from front page, needs to change "" to '' because it is PHP now
	<form action="login.php" method="POST">
	 <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">LOGIN</button>
	</form>
			?>
            <li><a href="signup-page.php">SIGN UP</li>    
        </ul>
    </nav>
</header>