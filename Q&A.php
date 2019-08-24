<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questions & Answers</title>
<link rel="stylesheet" type="text/css" href="styles/navistyle.css">
<style>
#button{
	text-decoration:none;
	background-color:#CCC;
	color:#000;
	appearance:button;
	float:right;
	padding-right:15px;	
	}
</style>
</head>

<body>
  <div class="navi">
  <div id="nav">
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="aboutus.php">About US</a></li>
      <li><a href="Questions.php">Questions</a></li>
      <li><a href="Q&A.php">Questions & Answers</a></li>
      <li><a href="contactus.php">Contact</a></li>
    </ul>
    </div>
    <div id="user">
    	<?php
			if(isset($_SESSION['username']))
			{	
				$name=$_SESSION['username'];
				echo "".$name."<br><a href='logout.php' class='but'>Log Out</a>";}
			else{
				echo "Not logged in<br><a href='signin.php' class='but'>SignIn</a>";
				}
		?>
    </div>
     <div id="logo">
    <img src="Geek_Squad_logo.png" width="220px">
    </div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <?php
$link=new mysqli('localhost','root','','forums');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql="select * from questions";
$result = $link->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$q=$row['quest_content'];
		$qid=1;
		$by=$row['q_by_name'];
		$$qid=$row['quest_id'];
        echo "<hr><h3>$q </h3> <p style='text-align:right; padding-right:30px'>:by $by</p><hr><div style='padding-right:30px'><a id='button' href='reply.php?id=".${$qid}."'>Replies</a></div><br> ";
    }
} else {
    echo "Nothing to see here...";
}
$link->close();
?>
</body>
</html>