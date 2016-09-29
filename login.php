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
$dehash = password_verify($pwd, $hash_pwd);

if ($dehash == 0) {
	
	} else {
		
	



	//SELECT * FROM statement, because it needs to SELECT from already existing data from database
	
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result =mysqli_query($conn, $sql);
	
	if (!$row = mysqli_fetch_assoc($result)){
		echo "Your username or password is incorrect";
		} else {
			//CERATING SESSION
			$_SESSION['id'] = $row['id'];
			}
			
	
	header("Location: index.php");
	}
?>