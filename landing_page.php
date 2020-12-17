<!DOCTYPE html>
<html lang="en">
<title>landing page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<style>
#rcorners {
	  border-radius: 25px;
}
</style>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cars</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contacts</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About us</a>

		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red w3-large w3-right w3-padding-large">Login</button>
			  <div id="id01" class="w3-modal" >
			    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

			      <div class="w3-center"><br>
			        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
			        <img src="profile_pic.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
			      </div>

			      <form class="w3-container" id="rcorners" action="registered.php"method="post">
			        <div class="w3-section" id="rcorners">
			          <label><b>Username</b></label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
			          <label><b>Password</b></label>
			          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="password" required>
			          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
			        </div>
			      </form>

			      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey" >
			        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
			        <span class="w3-right w3-padding w3-hide-small">Admin <a href="#">Login||</a></span>
			      </div>

			    </div>
			  </div>
				<button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-red w3-large w3-right w3-padding-large">Sign in</button>
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
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large">Profile</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Cars</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Contacts</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About us</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Rent Cars</h1>
  <p class="w3-xlarge">Landing page</p>
  <a href="browsing.php" class="w3-button w3-xlarge w3-black" id="rcorners">BROWSE</a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>hello</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>hello</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
