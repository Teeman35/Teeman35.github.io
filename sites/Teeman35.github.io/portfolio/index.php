<!DOCTYPE html>
<html>
<title>Thaddeus portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="portfolio.css">
<script src="portfolio.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="tee_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="temman.jpg" style="width:45%;border-radius: 30%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    
  </div>
  <div class="w3-bar-block">
    <a href="#C1" onclick="tee_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="#C2" onclick="tee_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#C3" onclick="tee_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="tee_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="temman.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="tee_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 id="C1"><b>My Portfolio</b></h1>
    <div id="myBtnContainer">
<span class="w3-margin-right">Filter:</span>
  <button class="btn active" onclick="filterSelection('all')">ALL</button>
  <button class="btn" onclick="filterSelection('projects')"> <i class="fa fa-diamond w3-margin-right"></i>Projects</button>
  <button class="btn" onclick="filterSelection('photos')"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
  <button class="btn" onclick="filterSelection('art')"> <i class="fa fa-map-pin w3-margin-right"></i>Art</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column projects">
    <div class="content">
      <img src="php.jpg" alt="Acient Pictures" style="width:100%" class="w3-hover-opacity">
<p><b>PHP time conversion</b></p>
        <p>Do something with PHP today. its friendly, try it yourself.</p>
    </div>
</div>
  <div class="column projects">
    <div class="content">
    <img src="javascript.jpg" alt="Beautiful acient " style="width:100%" class="w3-hover-opacity">
         <p><b>Javascript date conversion.</b></p>
        <p>It's simple, its interesting. Try it yourself</p>
    </div>
  </div>
  <div class="column projects">
    <div class="content">
    <img src="php2.jpg" alt="Nature" style="width:100%" class="w3-hover-opacity">
      <p><b>PHP timezone</b></p>
        <p>Hypertex Pre-processor language is easy and interesting.</p>
    </div>
  </div>
  
  <div class="column photos">
    <div class="content">
      <img src="officejob.jpeg" alt="Office Picture" style="width:100%" class="w3-hover-opacity">
  <p><b>Lets handle it for you</b></p>
        <p>We will be glad to be part of your project.</p>
      
    </div>
  </div>
  <div class="column photos">
    <div class="content">
    <img src="workmodepix.jpeg" alt="Natural way" style="width:100%" class="w3-hover-opacity">
     <p><b>Normal is an illusion</b></p>
    </div>
  </div>

  <div class="column photos">
    <div class="content">
    <img src="workmode1.jpeg" alt="Picture" style="width:100%" class="w3-hover-opacity">
      <p><b>Fatastic project</b></p>
        <p>Lets give your business that NEW look.</p>
    </div>
  </div>
  <div class="column art">
    <div class="content">
    <img src="bdpix1.jpeg" alt="Picture" style="width:100%" class="w3-hover-opacity">
        <p><b>NATURE</b></p>
        <p>Let' take time to appreciate nature.</p>
    </div>
</div>

  <div class="column art">
    <div class="content">
    <img src="bgpix.jpeg" alt="Nature" style="width:100%" class="w3-hover-opacity">
        <p><b>FANTASTIC VIEW</b></p>
        <p>Let's appreciate creativity.</p>
    </div>
  </div>

  <div class="column art">
    <div class="content">
      <img src="advertpix.jpeg" alt="Picture" style="width:100%" class="w3-hover-opacity">
       <p><b>Beautiful Website</b></p>
        <p>Lets do the job for you.</p>
    </div>
  </div>
</div>
</div>


  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="workmode5.jpeg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="workmode7.jpeg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
 <p>My name is Thaddeus, a Nigerian.I'm a proffesional Web developer and Business Intelligence analyst. I have worked as both junior and senior staff in different organisations, 
    and these experiences have given me the platforms to develop myself. I'm a good team player and a goal getter. I'm open for both individual and teamwork jobs.</p>
    <hr>
    
    <h4 id="C2">Technical Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Web development</p>
    <div class="w3-grey">
      <div class="progress-bar progress-bar-striped progress-bar-animated w3-padding w3-center striped"  style="width:90%;">90%</div>
    </div>
    <p>Database(MySQL)</p>
    <div class="w3-grey">
      <div class="progress-bar progress-bar-striped progress-bar-animated w3-padding w3-center striped" style="width:92%">92%</div>
    </div>
    <p>Microsoft Power BI</p>
    <div class="w3-grey">
      <div class="progress-bar progress-bar-striped progress-bar-animated w3-padding w3-center striped" style="width:90%">90%</div>
    </div>
    <p>Front End</p>
    <div class="w3-grey">
      <div class="progress-bar progress-bar-striped progress-bar-animated w3-padding w3-center striped" style="width:88%">88%</div>
    </div>
      <p>Back End</p>
    <div class="w3-grey">
      <div class="progress-bar progress-bar-striped progress-bar-animated w3-padding w3-center striped" style="width:85%">85%</div>
    </div>
    <p>
      <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom">
        <i class="fa fa-download w3-margin-right"></i><a href="downloadResume.pdf" style="text-decoration: none;">Download Resume</a>
      </button>
    </p>
    <hr>
    
    <h4>How much I charge</h4>
    <!-- Pricing Tables -->
    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px;">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off"> 
          <li class="w3-black w3-xlarge w3-padding-32">PREMIUM</li>
          <li class="w3-padding-16">Web Dev(both Front & Back End)</li>
          <li class="w3-padding-16">Web Dev(Front End only)</li>
          <li class="w3-padding-16">Web Dev(Back End only)</li>
          <li class="w3-padding-16">Business Intelligence analysis Report</li>
          <li class="w3-padding-16">
            <h2>$150, $100, $100, $100</h2>
            <span class="w3-opacity">Respectively</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="open-button w3-button w3-black w3-padding-large w3-hover-black" onclick="openForm()">SignUp</button>
          </li>
        </ul>
      </div>
      <div class="w3-third w3-margin-bottom" style="margin:0 -16px;">
       
      </div>
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-teal w3-xlarge w3-padding-32">IT SUPPORT</li>
          <li class="w3-padding-16">Web Dev(Front End)</li>
          <li class="w3-padding-16">Web Dev(Back End)</li>
       <li class="w3-padding-16">Database support</li>
          <li class="w3-padding-16">Business Intelligence analysis Report Adjustment</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$20</h2>
            <span class="w3-opacity">per hour</span>
          </li>
          <li class="w3-light-grey w3-padding-24">

<button class="open-button1 w3-button w3-black w3-padding-large w3-hover-black" onclick="openForm1()">SignUp</button>
 </li>
 </ul>
 </div>
   </div>

<div class="form-popup" id="myForm">

  <form action="valipremium.php" class="form-container" method="post" name="form2" enctype="multipart/form-data">
    <h1 class="w3-black w3-xlarge w3-padding-32" style="text-align:center">Premium</h1>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Please enter your name" name="name" value="" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Please enter your email" name="email" value="" required>

    <label for="available service"><b>Available Service</b></label>
    <select name="choice" value="" required>
    <option>Web Dev(both Front & Back End)</option>
<option>Web Dev(Front End)</option>
<option>Web Dev(Back End)</option>
<option>BI analysis Report</option>
</select>
<label for="message">Message</label>
<textarea name="comment" rows="5" cols="40" class="w3-input w3-border" placeholder="message......" value=""></textarea>

    <button type="submit" name="submit" value="" class="btn" class="w3-black">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<!-- IT support fomr -->

<div class="form-popup1" id="myForm1">

  <form action="valipremium.php" class="form-container" method="post" name="form2" enctype="multipart/form-data">
    <h1 class="w3-teal w3-xlarge w3-padding-32" style="text-align:center">IT Support</h1>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Please enter your name" name="name" value="" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Please enter your email" name="email" value="" required>

    <label for="available service"><b>Available services</b></label>
    <select name="choice" value="" required>
    <option>Web Dev(Front End)</option>
<option>Web Dev(BackEnd)</option>
<option>Database Admin</option>
<option>BI analysis Report(Adjustment)</option>
</select>
<label for="message">Message</label>
<textarea name="comment" rows="5" cols="40" class="w3-input w3-border" placeholder="message....." value=""></textarea>

    <button type="submit" name="submit" value="" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
  </form>
</div>

<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
  
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="C3"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>mbathaddeus9@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Lagos, Nigeria</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>(+234) 08035142036)</p>
      </div>
    </div>
    <hr class="w3-opacity">
<div>

<form method="post" action="validate.php"> 
<div class="w3-section"> 
 <label>Name:</label> <input class="w3-input w3-border" type="text" name="name" value="" required>
 
 </div>
<div class="w3-section">
  <label>Email:</label> <input class="w3-input w3-border" type="text" name="email" value="" required>
  
  </div>
<div class="w3-section">
 <label>Message:</label> <textarea name="message" rows="5" cols="40" class="w3-input w3-border" required></textarea>
</div>
<button type="submit" class="w3-button w3-block w3-black w3-margin-bottom" name="submit">Send Message</button>
  </form>
</div>
  </div>

  <!-- Footer -->
  <footer class="w3-container  w3-dark-grey">
  
    <div class="w3-container">
      <p>Your satisfaction is my priority. Contact me for a quality and satisfactory service.</p>
      <p style="text-align:right;">&copy; 2019-<?php echo date("Y");?> by M. Thaddeus. All right reserved</p>
    </div>
  </footer>
  
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function tee_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function tee_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>