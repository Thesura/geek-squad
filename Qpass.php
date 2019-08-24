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
    width: 100%;
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
<script>
	function pass()
	{
		alert("Question Submitted Successfully!");
	}
</script>
</head>

<body onload="pass()">
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
	
    <form action="Qback.php" method="POST" style="border:1px solid #ccc">
	<h2 align="center">New Question</h2>
    
    <div class="container" align="center">
    <label>Ask a Question</label><br/>
    <input type="text" placeholder="Ask a New Question" name="new" required>
    </div>
    
    <div class="getans" align="center">
      <input type="Submit" class="submitbtn" value="Submit">
     </form>
    </div>
    </div>

    
    <br/><br/><hr/><br/><br/>
    
    <h2 align="center">Recent Questions</h2>
    <br/>
    
    <table align="center">
    	<tr><td><a href="db.html" style="text-decoration:none">How to create a database?<a/></td></tr>
        <tr><td>Logical code for queue data structure</td></tr>
        <tr><td>How to defrag a hard disk?</td></tr>
        <tr><td>How to use dual monitor screen?</td></tr>
    </table>
    </form>
</body>
</html>