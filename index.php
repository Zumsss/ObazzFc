<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Obazz">
<meta name="keywords"  content=" Football, Football Academy, Academy for football, Foot Ball, Football Players, Football Training, Soccer...">
<meta name="description" content="Obazz Football Club, established since year 2000, is a full fledge professional football club based in Lagos. It is a corporate organization registered to educate, develop and promote young footballers in Nigeria/Africa, Lagos state in particular. This club is affiliated with Lagos state Football Association, Nigeria Football Federation and also registered under the Corporate Affairs Commission, Nigeria.">

<link href="images/Obazz FC transparent.png" rel="shortcut icon"/>
<title>Home | Official Site | Obazz Football Club</title>
<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
<script src="js/obazzFC_script.js" type="text/javascript" ></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/obazzFC_style.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>

</head>



<body style="background-color:#ffe135; background-image:url(images/wallpaper-grass-clippings.png); background-repeat:repeat; background-attachment:fixed; background-size:100% 100%;">





<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-indigo">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#management" class="w3-button w3-block">Officials</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Contact</a>
    </div>
  </div>
  
  <nav class="navbar navbar-inverse" style="width:98%; margin:0% auto;">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" style="font-weight:bold;" href="index.php"><b><span style="font:'Times New Roman', Times, serif; font-size:14px;"> OBAZZ  </span><span style="color:blue"> Football Club</span></b></a></div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<ul style="width:47%;" class="nav navbar-nav">
      <li><a href="players.php">Players</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="onlinestore.php">Online Store</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
       <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>  
      </div>
	</div>
</nav>

</div>

<!-- banner -->
<div class="w3-content" style="max-width:100%; margin-top:95px; background-color:#FFF;">
<img width="90%" src="images/Obazz FC banner.png">
  </div>
  
  

<div class="w3-content w3-section" style="max-width:70%; margin:2% auto; border:4px solid white;">
  <img class="mySlides" src="images/slides/obazzslide1.png" style="width:100%">
  <img class="mySlides" src="images/slides/obazzslide2.png" style="width:100%">
  <img class="mySlides" src="images/slides/obazzslide3.png" style="width:100%; border:4px solid black;">
  <img class="mySlides" src="images/slides/obazzslide4.png" style="width:100%">
  <img class="mySlides" src="images/slides/obazzslide5.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>



  <!-- About Section -->
<div class="w3-container" style="padding:128px 16px; background-color:#FFF" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-globe w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Global</p>
      <p>Obazz Football Club has got players playing globally all over the world, and we don't plan on stopping.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Our goal is to compete in the Elite Nigeria Premier League soon. We seek to position the club as a world class football club in accordance with ethics of a professional outfit.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p> Our target is to provide international standard of operation that will be worthy of emulation by other clubs in the country.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-wifi w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Connect</p>
      <p>We at Obazz Football Club connect with young and vibrant football players, then build them to become world class football players.</p>
    </div>
  </div>
</div>




<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="management">
  <h3 class="w3-center">THE MANAGEMENT</h3>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/management/Patrick Johnson Obaze.jpg" alt="Patrick Johnson Obaze" style="width:90%">
        <div class="w3-container">
          <h3>Patrick Johnson Obaze</h3>
          <h5><p style="color:white">CEO / PRESIDENT</p></h5>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/management/Uche Alozie.jpg" alt="Uche Alozie" style="width:90%">
        <div class="w3-container">
          <h3>Uche Alozie</h3>
          <h5><p style="color:white">COACH</p></h5>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/management/Chris Nedu Obaze.jpg" alt="Chris Nedu Obaze" style="width:90%">
        <div class="w3-container">
          <h3>Chris Nedu Obaze</h3>
          <h5><p style="color:white">TEAM MANAGER</p></h5>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
   <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
		<div class="w3-container w3-padding w3-black">
          <h4><marquee behavior="scroll"> PLACE AN ADVERT HERE. </marquee></h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Your AD Here</span>
          </div>
        </div>        
        
        <!--img src="images/management/team2.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div-->
      </div>
    </div>
  </div>
</div>



<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-white w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <!--p style="color:#FFF;">Swing by for a cup of coffee, or whatever.</p-->
      <p style="color:#FFF;"><i class="fa fa-map-marker w3-text-indigo w3-xlarge"></i>  Nigeria, Lagos </p>
      <p style="color:#FFF;"><i class="fa fa-phone w3-text-indigo w3-xlarge"></i>  (+234) 703 381 4666</p>
      <p style="color:#FFF;"><i class="fa fa-envelope-o w3-text-indigo w3-xlarge"></i>  info@obazzfc.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>Terms & Conditions!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>



<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-indigo w3-center">
  <h4>Follow Us</h4>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Designed by Izunna</p>
</footer>

</body>
</html>