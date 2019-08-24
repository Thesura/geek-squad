<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style>
/* Full-width input fields */
#questions{
	padding-top:100px;
}
input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

/* Float cancel and signup buttons and add an equal width */
.submitbtn {
    float: center;
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
	text-align:center;
}

/* Clear floats */
.getans::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for submit button on extra small screens */
@media screen and (max-width: 300px) {
    .submitbtn {
       width: 100%;
    }
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questions</title>
<link rel="stylesheet" type="text/css" href="styles/navistyle.css"/>

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
			session_start();
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
    <div id="questions">
	<h1>Questions</h1>
	
    <form method="POST" action="Qback.php"  style="border:1px solid #ccc">
	<h2 align="center">New Question</h2>
    
    <div class="container" align="center">
    <label>Ask a Question</label><br/>
    <input type="text" placeholder="Ask a New Question" name="newq" required>
    </div>
    
    <div class="getans" align="center">
      <input type="Submit" class="submitbtn" value="Submit">
     </form>
    </div>
    </div>

    
    <br/><br/><hr/><br/><br/>
    
    <h2 align="center">Recent Questions</h2>
    <br/>
    <br/>
    <?php
    $link=new mysqli('localhost','root','','forums');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql="select * from questions order by quest_date desc";
$result = $link->query($sql);



if ($result->num_rows > 0) {
		$i=1;
    // output data of each row
    while(($row = $result->fetch_assoc()) && ($i<4)) {
		$q=$row['quest_content'];
        echo "<p style='text-align:center'>$q </p> ";
		$i++;
    }
} else {
    echo "Nothing to see here...";
}
$link->close();
?>
</body>
</html>