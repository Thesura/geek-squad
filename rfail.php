<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/navistyle.css" />
<script>
	function fail()
	{
		alert("Could not submit the reply due to an error!");
	}
</script>
</head>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
#submit {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 15%;
}

/* Extra styles for the cancel button */
.sbtbtn {
    padding: 14px 20px;
    background-color: #00c60d;
}

/* Float cancel and signup buttons and add an equal width */
.sbtbtn{
    float: left;
    width: 20%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

#reply{
	padding: 16px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .sbtbtn{
       width: 100%;
    }
}
</style>
<body onLoad="fail()";>
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

<br/><br/><br/><br/>
<h1>Question</h1>
<br>
<?php
 $id = $_REQUEST['id'];
$link=new mysqli('localhost','root','','forums');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql="select * from questions where quest_id=".$id."";
$result = $link->query($sql);
$row=$result->fetch_assoc();

		$q=$row['quest_content'];
		$by=$row['q_by_name'];
        echo "<hr><h3>$q </h3> <p style='text-align:right; padding-right:30px'>:by $by</p><hr><div style='padding-right:30px'>";

echo '
  	
	<form id="reply" action="repback.php" method="POST" style="border:1px solid #ccc">
    <label><b>Enter Your Answer</b></label><br/><br/>
    <input type="text" placeholder="Enter your answer" name="reply" required>
	<br>
	<input type="hidden" name="qid" value="$qid">
	<input id="submit" type="submit" value="Submit">
	</form>
  <br>
  <br>
  <h3>Recent Answers/Replies</h3>
  <br>
';

$link = new mysqli('localhost','root','','forums');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql="select * from replies where reply_qid=".$id." order by reply_date asc";
$result = $link->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$r=$row['reply_content'];
		$rby=$row['r_by_name'];
		$rd=$row['reply_date'];
        echo "<hr><h4>$r </h4> <p style='text-align:right; padding-right:30px'>:by $rby</p> <p style='text-align:right; padding-right:30px'>:at $rd</p><hr>";
    }
} else {
    echo "Nothing to see here...";
}
$link->close();


?>
</body>
</html>
