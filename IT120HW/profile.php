<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: profile.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="profilestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
      <img src="images/stonks.JPG" alt="Stonks" id="stonks" />     
      <nav class="horizontal" id="topLinks">
            <a id="navicon" href="#"><img src="ws_navicon.png" alt="" /></a>           
         <ul>    
		 
		 <li><a href="homework.html">Home</a></li>
		<li><a href="colleges.html">Colleges</a></li>
		<li><a href="collegewishlist.php">College Wishlist</a></li>
		<li><a href="feedback.html">Feedback</a></li>
		<li><a href="newreg.php">Newsletter</a></li>
		<li><a href="login.php">Account</a></li>
        <li><a href="help.php">Contact</a></li>
		 <li><a href="password.html">Password</a></li>
	
         </ul>
      </nav>      
</header>

Thank you for registering an account for my website. You will now be able to access certain features available to you.

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>