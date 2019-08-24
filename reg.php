<?php
$u = $_POST['name'];
$em = $_POST['email'];
$pw = $_POST['psw'];

$link =new mysqli('localhost','root','','forums');
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

$sql="insert into users(user_name,user_pass,user_email)values('$u','$pw','$em')";
if ($link->query($sql) === TRUE) {
    header("location:signin.html");
} else {
    header("location:regfail.html");;
}
$link->close();
?>