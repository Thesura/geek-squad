
<!doctype html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>


<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
  

  <!-- responsive-full-background-image.css stylesheet contains the code you want -->
  <link rel="stylesheet" href="styles/home_css_begin.css"/>
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
 <div id="container">

  
  <header class="container">
    <section class="content">
      <h1>Wellcome to GEEK SQUAD!</h1>
      <br/><br/>
      <p><a class="button" id="load-more-content" href="signin.php">Sign In</a></p>
      <p><a class="button" id="load-more-content" href="register.html">Register</a></p>
      
    </section>
  </header>
  </div>
</body>
</html>