<?php


$user=$_POST['username'];
$pass=$_POST['password'];

$link=new mysqli('localhost','root','','forums');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql="select * from users where user_name='$user' and user_pass='$pass'";
$result = $link->query($sql);
$row=$result->fetch_assoc();


if ($row['user_name'] == $user && $row['user_pass'] == $pass){
	$uid=$row['user_id'];
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['userid']=$uid;
		header("location: Questions.php");
	
}

else 
{
	session_start();
	$_SESSION["Login"] = "NO";
	echo "<h1> You are NOT logged in. Please try again </h1>";
	echo "<p> <a href='signin.html'> Click here to try again </a> </p>";
}
$link->close();
?>