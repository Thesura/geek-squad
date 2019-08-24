<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="styles/navistyle.css"/>
	<link rel="stylesheet" type="text/css" href="styles/abtus.css"/>
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

  <br/><br/><br/><br/>
	<h1>About Us</h1>
	<br/>
	<p align="center">Geek Squad is a privately held website, the flagship site of the Knowledge Exchange Network, created in 2018.<br/>
		It was created to be a more open alternative to earlier question and answer sites for IT related solutions.<br/><br/>
		We are 1st Year Undergraduates at NSBM Green University in IT Faculty.<br/>
		We like to share our knowledge with everyone to improve ourselves.<br/>
	<p/>
	<br/><hr/><br/>

	<div class='div'>
		<div>
		<img src="pics/tungs.jpg">
		</div>
		<div>
		<h2>Thesura Siriwardhana</h2><br/>
		<p>	BSc. in Software Engineering<br/>
			17.1 Plymouth University<br/>
			1st Year Undergraduate
		</p>
		</div>
	</div>

	<div class='div'>
		<div>
		<img src="pics/wire.jpg">
		</div>
		<div>
		<h2>Ravindu Ubeynarayana</h2><br/>
		<p>BSc. in Computer Security<br/>
			17.1 Plymouth University<br/>
			1st Year Undergraduate
		</p>
		</div>
	</div>

	<div class='div'>
		<div>
		<img src="pics/dark.jpg">
		</div>
		<div>
		<h2>Seshan Rashmika</h2><br/>
		<p>BSc. in Software Engineering<br/>
			17.1 Plymouth University<br/>
			1st Year Undergraduate
		</p>
		</div>
	</div>

</body>
</html>