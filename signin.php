<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="styles/navistyle.css" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

<div class="container" id="container">

  <div id="signin">
  
        <h3 style="text-align:center">Sign In</h3>
        <form action="sback.php" method="post">
          <table>
            <tr>
              <td>Username:</td>
              <td><input type="text" class="input" name="username" placeholder="Username" required/></td>
              </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" class="input" name="password" placeholder="Password" required/></td>
              </tr>
              <tr>
				</tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="button1" value="Sign-In" /></td>
              </tr>
            <tr>
              <td colspan="2" align="center">
                <div>
                  <button name='reply' class="button1" onclick=window.location.href='register.html'>Create an account</button>
                </div>
                </td>
              </tr>
          </table>
        </form>

	</div>
   </div>
</body>
</html>
