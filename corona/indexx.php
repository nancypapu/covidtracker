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
  <header class="w3-container w3-padding-32  w3-black" id="home">
  <div id="google_translate_element" class="w3-center"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <h1 class="w3-jumbo"><span class="w3-hide-small"></span><center>Covid Tracker</center></h1>
    <p><center>For Madurai</center></p>
    <p><font size="5"><center><u>Covid-19 Chatbot</u></center></font></p>

<html>
<font color="black">
<head >

<link rel="stylesheet" type="text/css" href="AI.css">

<script>
know = {

"hello" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hi there! &#128512;<br>",
"Hello" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hi there! &#128512;<br>",
"hi" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there! &#128512;<br>",
"Hi" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there! &#128512;<br>",
"corona" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  i can help u to get rid of your doubts&#128526;<br>",
"Corona" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  i can help u to get rid of your doubts&#128526;<br>",
"ok" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp do you have cough or fever&#128534<br>",
"Ok" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp do you have cough or fever&#128534<br>",
"yes" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ok then have u been abroad for the past 1 month&#128561;<br>",
"Yes" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ok then have u been abroad for the past 1 month&#128561;<br>",
"i went to foreign" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp its better to consult a physician!&#128531;<br>",
"I went to foreign" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp its better to consult a physician!&#128531;<br>",
"foreign" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp its better to consult a physician!&#128531;<br>",
"Foreign" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp its better to consult a physician!&#128531;<br>",
"no" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp fine:)do you have contact with any postive tested persons?&#129300;<br>",
"No" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp fine:)do you have contact with any postive tested persons?&#129300;<br>",
"nope" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp you do great:)stay home and stay safe &#128525;<br>",
"Nope" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp you do great:)stay home and stay safe &#128525;<br>",
"thank you" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp dont worry you will get well soon!!&#128519;<br>",
"Thank you" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp dont worry you will get well soon!!&#128519;<br>",
"Bye" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bye!!Take care&#128519;<br>",
"bye" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bye!!Take care&#128519;<br>",

};

function talk() {
var user = document.getElementById("userBox").value;
document.getElementById("userBox").value= "";
document.getElementById("chatLog").innerHTML += user+"<br>";

if (user in know) {
document.getElementById("chatLog").innerHTML += know[user] +"<br>";
} else 

{
document.getElementById("chatLog").innerHTML += "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I don't understand... <br>";
}
}





</script>



</head>


<body>

<div id='bodybox'>
  <div id='chatborder'>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <p id="chatLog" class="chatlog">&nbsp;</p>
    <input type="text" name="chat" id="userBox" placeholder="Type here to talk" onkeydown="if(event.keyCode == 13) {talk()}">
    
</div>

</body>

</font>

</html>



  </header>

   
  </div>
  

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/5 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body class="w3-text-black">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="https://www.houstonmethodist.org/-/media/Images/Contenthub/Article-Images/Infectious-Disease/Hub_HandWashing_Social.jpg" style="width:110%">
  <div class="w3-center">Wash Ur Hands Frequently</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="https://img.haikudeck.com/mg/TkccknDTD1_1439859996903.jpg" style="width:110%">
  <div class="w3-center">Avoid Touching Your Face, Eyes And Nose</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/185/185768/a-persistent-cough.jpg?w=1155&h=1541	" style="width:110%">
  <div class="w3-center">Cover Your Cough With Hands or Kerchief</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4/ 5</div>
  <img src="https://www.zameen.com/blog/wp-content/uploads/2020/03/Dos-and-Donts-of-Social-Distancing-E-19-03-1-1024x640.jpg" style="width:110%">
  <div class="w3-center">Avoid Contact with Sick People</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5/ 5</div>
  <img src="https://api.time.com/wp-content/uploads/2020/04/CoronavirusFAQOpener.jpg?quality=85&w=1200&h=628&crop=1" style="width:110%">
  <div class="w3-center">Wear mask to stay safe</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
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









