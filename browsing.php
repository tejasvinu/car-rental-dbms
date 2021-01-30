<!DOCTYPE html>
<html lang="en">
<title>CarZ Rental</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
#imgg {
    float: left;
    width:  300px;
    height: 150px;
    object-fit: scale-down;
}
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
</style>
<body class="w3-light-grey">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">PORTFOLIO</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT ME</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">CONTACT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-xlarge">
  <p class="w3-left">CarZ</p>

</header>

<!-- Image header -->
<div class="w3-display-container w3-container">
  <img src="images/ferrari-roma.jpg" alt="Jeans" style="width:100%">
  <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
    <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
    <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
    <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
  </div>
</div>

<div class="w3-container w3-text-grey" id="jeans">
  <p>24 cars</p>
</div>

<!-- Product grid -->
<div class="w3-row w3-grayscale">
  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
      <img id="imgg" src="images/merc_a45s.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=103">MERSEDES A45S</a></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
      <img id="imgg" src="images/bmw_x5.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=104">BMW X5</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/merc_e63s.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft">New</span>
        <div class="w3-display-middle w3-display-hover">
        </div>
      </div>
      <p><a href="image.php?id=105">MERCEDES E65S</a><br></p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/merc_c63s.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=106">MERCEDES C63S</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/merc_s63s.jpeg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=107">MERCEDES S63S</a></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/bmw_5_ser.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft">Sale</span>
        <div class="w3-display-middle w3-display-hover">
        </div>
      </div>
      <p><a href="image.php?id=108">BMW 5 SERIES</a></b></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
      <img id="imgg" src="images/bmw_4_ser.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=109">BMW 4 SERIES</a></p>
    </div>
    <div class="w3-container">
          <div class="w3-display-container">
      <img id="imgg" src="images/bmw_3_ser.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=110">BMW 3 SERIES</a></p>
    </div>
  </div>
</div>
<div class="w3-row w3-grayscale">
  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/audi_a6.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=111">AUDI A6</a></p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/audi_rs6.jpeg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=112">AUDI RS6</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/audi_rsq8.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft">New</span>
        <div class="w3-display-middle w3-display-hover">
        </div>
      </div>
      <p><a href="image.php?id=113">AUDI RSQ8</a><br></p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/audi_q7.jpeg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">

      </div>
    </div>
      <p><a href="image.php?id=114">AUDI Q7</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/rr_phantom.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=115">RR PHANTOM</a></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/rr-ghost.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft">Sale</span>
        <div class="w3-display-middle w3-display-hover">
        </div>
      </div>
      <p><a href="image.php?id=116">RR GHOST</a></b></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/tesla_model_s.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">

      </div>
    </div>
      <p><a href="image.php?id=117">TESLA MODEL S</a></p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/tesla_model_3.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">

      </div>
    </div>
      <p><a href="image.php?id=118">TESLA MODEL 3</a></p>
    </div>
  </div>
</div>
<div class="w3-row w3-grayscale">
  <div class="w3-col l3 s6">
    <div class="w3-container">
            <div class="w3-display-container">
      <img id="imgg" src="images/cullinan.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=119">ROLLS-ROYCE CULLINAM</a></p>
    </div>
    <div class="w3-container">
            <div class="w3-display-container">
      <img id="imgg" src="images/jag_f-type.jpeg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">

      </div>
    </div>
      <p><a href="image.php?id=120">JAGUAR F-TYPE</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/maserati.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
        </div>
      </div>
      <p><a href="image.php?id=121">MASERATI LEVANTE</a><br></p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/velar.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p> <a href="image.php?id=122">RANGE ROVER VELAR</a></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/ferrari-roma.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=123">FERRARI ROMA</a></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img id="imgg" src="images/urus.jpeg" style="width:100%">
        <span class="w3-tag w3-display-topleft">Sale</span>
        <div class="w3-display-middle w3-display-hover">
        </div>

      </div>
      <p><a href="image.php?id=124">LAMBORGINI URUS</b></p>
    </div>
  </div>

  <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/cayene.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=125">PORSCHE CAYENE</p>
    </div>
    <div class="w3-container">
        <div class="w3-display-container">
      <img id="imgg" src="images/continental.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      </div>
    </div>
      <p><a href="image.php?id=126">BENTLEY CONTINENTAL</a></p>
    </div>
  </div>
</div>

<!-- Subscribe section -->
<div class="w3-container w3-black w3-padding-32">
  <h1>Subscribe</h1>
  <p>To get special offers and VIP treatment:</p>
  <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
  <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
</div>

 Footer
<footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
  <div class="w3-row-padding">
    <div class="w3-col s4">
      <h4>Contact</h4>
      <p>Questions? Go ahead.</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
        <button type="submit" class="w3-button w3-block w3-black">Send</button>
      </form>
    </div>

    <div class="w3-col s4">
      <h4>About</h4>
      <p><a href="#">About us</a></p>
      <p><a href="#">We're hiring</a></p>
      <p><a href="#">Support</a></p>
      <p><a href="#">Shipment</a></p>
      <p><a href="#">Payment</a></p>
      <p><a href="#">Gift card</a></p>
      <p><a href="#">Help</a></p>
    </div>

    <div class="w3-col s4 w3-justify">
      <h4>Store</h4>
      <p><i class="fa fa-fw fa-map-marker"></i> CarZ</p>
      <p><i class="fa fa-fw fa-phone"></i> 9606293853</p>
      <p><i class="fa fa-fw fa-envelope"></i> CarZ@mail.com</p>
      <h4>We accept</h4>
      <p><i class="fa fa-fw fa-cc-amex"></i> VISA</p>
      <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
      <br>
      <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
      <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
      <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
      <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
      <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
    </div>
  </div>
</footer>

<div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

 End page content
</div>

 Newsletter Modal
<div id="newsletter" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom" style="padding:32px">
  <div class="w3-container w3-white w3-center">
    <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    <h2 class="w3-wide">NEWSLETTER</h2>
    <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
    <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
  </div>
</div>
</div>
-->
<script>
// Accordion
function myAccFunc() {
var x = document.getElementById("demoAcc");
if (x.className.indexOf("w3-show") == -1) {
  x.className += " w3-show";
} else {
  x.className = x.className.replace(" w3-show", "");
}
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
document.getElementById("mySidebar").style.display = "none";
document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>