<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
 
<body>
<header>
	<nav>
    	<ul>
    		<li><a href="index.php">HOME</a></li>
             <li><a href="secret-page.php" id="secret">SECRET PAGE</a></li>   
            <?php 
			if (isset($_SESSION['id'])) {
				echo /*<!--LOG OUT, we don't need to put method because we just need to run this one file*/
					"<form action='logout.php'>
					<button>LOG OUT</button>
						</form>";
					}

				
			
				//LOGIN FORM from front page, needs to change "" to '' because it is PHP now
	//it also needs to be echoed - to be visible
	//delete all the breaks between uid and pwd - it makes it easier to style it 	
				?>
           
        </ul>
    </nav>
</header>