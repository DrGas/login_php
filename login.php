<?php 
session_start();

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//decripting the password
$sql = "SELECT * FROM user WHERE uid='$uid' ";
$result =mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$password_valid = password_verify($pwd, $hash_pwd); //password_match

if ($password_valid) {
	/*CERATING SESSION*/
		$_SESSION['id'] = $row['id'];
		header("Location: secret-page.php");	
	
	
	} else {
		echo "<p>Your username or password is incorrect</p>";
	
/*	SELECT * FROM statement, because it needs to SELECT from already existing data from database*/
	
	/*$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result =mysqli_query($conn, $sql);
	
	if (!$row = mysqli_fetch_assoc($result)){
		
		} else {
			
		}
			
	
	*/
	}
?>