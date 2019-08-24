<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/navistyle.css" />
</head>
<style>

input[type=text], input[type=password],select, textarea {
     width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 70%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    padding: 16px;
	width:100%;
  
}
.details{
  	margin-bottom: 100px;
 	border-radius: 10px;
    padding: 10px;
	
}
.col1{
	width: 20%;
	text-align:right;
	}
.col2{
	width: 80%;
	}
#subbtn{
	text-align:center;
	}
#consubmit{
		width:25%;
}
label {
	font-size:75%;
}
</style>
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

<br/><br/><br/><br/>
<h1>Contact Us</h1>
<hr/>

<div class="details">
    <p><b>Postal Address:</b>The Geek Squad PLC,<br/>
        270/3,<br/>
        Colombo,<br/>
        Sri Lanka. </P>
    <p><b>Telephone:</b> +94-12-3021856<br/>
    (Monday to Friday - 9am to 5pm)
    </p>
    <p><b>Email :</b> geeksquad@gmail.com </p>
</div>


<div class="container">
<form action="Cback.php" method="POST" style="border:1px solid #ccc">
<table style="width:100%;">
	<tr>
    <td class="col1"><label for="fname">Name: </label></td>
    <td class="col2"><input type="text" id="fname" name="firstname" placeholder="Name.."/></td>
	</tr>
	<tr>
    <td class="col1"><label for="lname">Email: </label></td>
    <td class="col2"><input type="text" id="lname" name="lastname" placeholder="Your Email Address.."/></td>
	</tr>
	<tr>
    <td class="col1"><label for="contact">Contact Number: </label></td>
    <td class="col2"><input type="text" id="cnumber" name="cnumber" placeholder="Your contact number.."/></td>
	</tr>
	<tr>
    <td class="col1"><label for="subject">Subject: </label></td>
    <td class="col2"><textarea id="subject" name="subject" placeholder="What do you need.." style="height:200px"></textarea></td>
	</tr>
	<tr>
    <td id="subbtn" colspan="2"><input type="submit" id="consubmit" value="Submit"></tr>
	</tr>
</table>
  </form>
</div>

</body>
</html>
