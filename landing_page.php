<!DOCTYPE html>
<html>
<title>landing page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/disp_landing.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <b><a href="#home" class="w3-bar-item w3-button w3-wide">CarZ</a></b>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="browsing_page.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i>CARS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
			<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-medium">Login</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="images/profile_pic.jpg" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container"id="rcorners" action="registered.php"method="post">
        <div class="w3-section" id="rcorners">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Admin <a href="#">LOGIN?</a></span>
      </div>

    </div>
  </div>

  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-white w3-large w3-right w3-padding-large">Sign in</button>

        <div id="id02" class="w3-modal" >
					<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

						<div class="w3-center"><br>
							<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
							<img src="profile_pic.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
						</div>

						<form class="w3-container" id="rcorners" action="session.php"method="post">
							<div class="w3-section" id="rcorners">
								<label><b>Username</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
								<label><b>Password</b></label>
								<input class="w3-input w3-border" type="text" placeholder="Enter Password" name="password" required>
								<label><b>Phone Number</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Phone Number" name="Phone_id" required>
								<label><b>Date of Birth</b></label>
								<input class="w3-input w3-border" type="date" placeholder="Enter Date of Birth" name="Dateofbirth" required>
								<label><b>address</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter your address" name="Address" required>
								<label><b>Sex</b></label>
								<input class="w3-input w3-border" type="text" placeholder="Enter Your Sex" name="Sex" required>
								<label><b>Email</b></label>
								<input class="w3-input w3-border" type="email" placeholder="Enter Your Mail Id" name="email" required>
								<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
							</div>
						</form>

						<div class="w3-container w3-border-top w3-padding-16 w3-light-grey" >
							<button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						</div>

					</div>
				</div>

    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">CARS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-large w3-right w3-padding-large">LOGIN</button>

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Rent cars with style</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">rent cars with style</span><br>
    <span class="w3-large">Stop wasting valuable time with cars that aren't you</span>
    <p><a href="browsing.html" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Start a lifestyle now by clicking here</a></p>
  </div>
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">why choose us</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">best collection in class</p>
      <p>We have the best and most reliable carss in the class</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We don't just rent cars cause it's profitable, rather to share our passion with everyone</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Service</p>
      <p>Our vehicles are always kept serviced and upto date and we are flexible with services we provide</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>We provide 365 24/7 on road support that is unparraleled in our class</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know cars" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know our Cars</h3>
      <p>We here know our cars and choose only the best cars to include in our service</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View few Our Cars</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/fleet.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/ceo.jpg" alt="Tej" style="width:100%">
        <div class="w3-container">
          <h3>Tejas Vinay</h3>
          <p class="w3-opacity">CEO & Co-Founder</p>
          <p>Driven by the passion for technology and enthused by the oppurtinities of the future.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/cto.jpeg" alt="raji" style="width:100%" height="300" >
        <div class="w3-container">
          <h3>Rajesh K</h3>
          <p class="w3-opacity">1VA18IS027</p>
          <p>SAI VIDYA COLLEGE</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<div class="w3-container w3-light-grey w3-padding-64">
	<h3 style="text-align:center;">Our Reviews</h3>
	</div>
<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>We are a company that was created to fill a space in the market<br>that was created by the ever growing need for short term vehicle requirement.</p>
      <p>We are unique in providing service where we can lease or<br>rent vehicles for short term on contract basis or only for a few days.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-car w3-margin-right"></i>Our app</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90% Positive</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Google</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85% Positive</div>
      </div>
      <p class="w3-wide"><i class="fa fa-taxi w3-margin-right"></i>yolo</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75% Positive</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Bengaluru, IN</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 9606293853 or 9972598897</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: carzrental@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="images/footer_image_landing.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
