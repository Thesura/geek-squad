<?php
session_start();
$uname = $_SESSION['username'];
$uid = $_SESSION['userid'];
$r = $_POST['reply'];
$q = $_POST['quest'];
$by = $_POST['q_by'];
$id = $_POST['qid'];


$link =new mysqli('localhost','root','','forums');
if ($link->connect_error) {
	echo "error";
    die("Connection failed: " . $link->connect_error);
} else {
	echo "connection succesful";	
}
//$sql="insert into replies(reply_qid,reply_by,reply_content,r_by_name) //values('$qid','$uid','$r','$uname')";

$sql="insert into
replies(reply_qid,reply_by,reply_content,r_by_name) values('$id','$uid','$r','$uname')";

echo $sql;

//$query = $linkquery($sql);
$query=mysqli_query($link, $sql);
var_dump($query);
if ($query == TRUE) {
   header("location:rpass.php?id=".$id."");
} else {
    header("location:rfail.php?id=".$id."");
}

$link->close();
?>