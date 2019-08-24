<?php
session_start();
$uname = $_SESSION['username'];
$uid = $_SESSION['userid'];
$q = $_POST['newq'];


$link =new mysqli('localhost','root','','forums');
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$sql="insert into questions(quest_content,quest_by,q_by_name)values('$q','$uid','$uname')";

if ($link->query($sql) === TRUE) {
    header("location:Qpass.php");
} else {
    header("location:Qfail.php");
}

$link->close();
?>