<?php 

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//SELECT statement, because it needs to SELECT from already existing data from database
$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result =mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect";
	} else {
		//CERATING SESSION
		$_SESSION['id'] = $row['id'];
		}

?>