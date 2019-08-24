<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/navistyle.css" />
<link rel="stylesheet" type="text/css" href="styles/contactus.css" />
<script>
	function pass()
	{
		alert("Details submitted successfully!");
	}
</script>
</head>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input select, textarea {
    width: 70%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
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

/* Add padding to container elements */
.container {
    padding: 16px;
}

.details{
    padding: 20px;
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
}
</style>
<body onLoad="pass()">
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
<h1>Contact Us</h1><hr/>

<br/><br/>
<div class="details">
<pre> <b>Postal Address:</b> The Geek Squad PLC,
                            270/3,
                            Colombo,
                            Sri Lanka.

  <b>Telephone:</b> +94-12-3021856
    (Monday to Friday - 9am to 5pm)

  <b>Email :</b> geeksquad@gmail.com</pre>
</div>
<br/>

  <div class="container">
  <form method="POST" action="Cback.php">
    <label><b>Name</b></label><br/>
    <input type="text" placeholder="Enter Your Name" name="name" required>
<br/>
    <label><b>Email</b></label><br/>
    <input type="text" placeholder="Enter Email" name="email" required>
<br/>
    <label><b>Contact Number</b></label><br/>
    <input type="text" placeholder="Enter Contact Number" name="cntno" required>
<br/>
    <label><b>Comments</b></label><br/>
    <textarea name="comment" id="comment" placeholder="Comment below..." required style="height:200px"></textarea>
<br/>
    <input type="submit" value="Submit">
    </form>
  </div>

<?php
$name = $_POST["name"];
echo $name;
?>
</body>
</html>