<?php 
session_start();

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//INSERT INTO becasue we are puting new information into the DB
//password_hash(); is encrypting the password VERY IMPORTANT!!
$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (first, last, uid, pwd) 
VALUES ('$first', '$last', '$uid', '$encrypted_password')";
$result =mysqli_query($conn, $sql);


header("Location: index.php");
?>