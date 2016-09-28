<?php 

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//INSERT INTO becasue we are puting new information into the DB
$sql = "INSERT INTO user (first, last, uid, pwd) 
VALUES ('$first', '$last', '$uid', '$pwd')";
$result =mysqli_query($conn, $sql);

header("Location: index.php");
?>