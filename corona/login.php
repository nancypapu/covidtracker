<!DOCTYPE html>
<html>
<title>COVID-19 MDU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://media.giphy.com/media/dVuyBgq2z5gVBkFtDc/giphy.gif" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="tweet.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-twitter w3-xxlarge"></i>
    <p>Tweet</p>
  </a>
  <a href="statistics.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-bar-chart w3-xxlarge"></i>
    <p>Statistics</p>
  </a>
  <a href="indexx.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-comments-o w3-xxlarge"></i>
    <p>Covid</p>
  </a>
<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Admin</p>
</a>
<a href="corona/admin-map.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-map-marker w3-xxlarge"></i>
    <p>Maps</p>
</a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
   <a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="tweet.html" class="w3-bar-item w3-button" style="width:25% !important">TWEET</a>
    <a href="statistics.php" class="w3-bar-item w3-button" style="width:25% !important">STATISTICS</a>
    <a href="indexx.php" class="w3-bar-item w3-button" style="width:25% !important">COVID</a>
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">ADMIN</a>
	<a href="admin-map.php" class="w3-bar-item w3-button" style="width:25% !important">MAPS</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <br><br>
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Covid Tracker</h1>
    <p>For Madurai</p>


<?php session_start(); ?>
<html>
<font size="5">
<head>
	<title>Login</title>
</head>

<body>
<a href="index.php">Home</a> <br />
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>
	<p><font size="+2">Login</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</font>
</html>    

  </header>

  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-white w3-center w3-xlarge">
    <a href="https://www.youtube.com/channel/UCsyPEi8BS07G8ZPXmpzIZrg"><i class="fa fa-youtube w3-hover-opacity""></i></a>
   <a href="https://twitter.com/MoHFW_INDIA" ><i class="fa fa-twitter w3-hover-opacity""></i></a>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>




