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
<a href="admin-map.php" class="w3-bar-item w3-button w3-padding-large w3-black">
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

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$person = $_POST['person'];
	$age = $_POST['age'];	
	$cause = $_POST['cause'];	
	
	// checking empty fields
	if(empty($person) || empty($age) || empty($cause)) {
				
		if(empty($person)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($cause)) {
			echo "<font color='red'>Cause field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE cases SET person='$person', age='$age', cause='$cause' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view1.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cases WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

	$person = $res['person'];
	$age = $res['age'];
	$cause = $res['cause'];
}
?>
<html>
<font size="5">
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a> | <a href="view1.php">View Cases</a> | <a href="logout.php">Logout</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit1.php">
		<table border="0">
			<tr> 
				<td>Gender</td>
				<td><input type="text" name="person" value="<?php echo $person;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Residence/Cause</td>
				<td><input type="text" name="cause" value="<?php echo $cause;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		
	</form>
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






