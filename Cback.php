<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$cntno = $_POST['cntno'];
$comm = $_POST['comment'];

$link =new mysqli('localhost','root','','forums');
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$sql="insert into contactus(con_name,con_email,con_contact,comments)values('".$name."','".$email."','".$cntno."','".$comm."')";

if ($link->query($sql) === TRUE) {
    header("location:Cpass.php");
} else {
    header("location:Cfail.php");
}

$link->close();
?>