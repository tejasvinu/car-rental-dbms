<?php error_reporting(E_ALL^E_NOTICE);?>
     <?php
     session_start();
     $con= mysqli_connect('localhost','root','','project');

     mysqli_select_db($con,'project');

     if(isset($_POST['id'])){
         $_GET['id']=$_POST['id'];
     }
      $u=$_GET['id'];

     $s= " SELECT   * from car WHERE Unique_id='$u'";
     $result=mysqli_query($con,$s);
    $row=mysqli_fetch_assoc($result);
    unset($_SESSION['unique_id']);
    $_SESSION['unique_id']=$_GET['id'];
    $_SESSION['Company']=$row['Company'];
    $_SESSION['image']=$row['Image'];

    $c=" SELECT * FROM requested_vechile WHERE Unique_id='$u'";
    $res=mysqli_query($con,$c);
    $row1=mysqli_fetch_assoc($res);


    echo $_SESSION['unique_id'];
    echo $_SESSION['name'];



?>
    <!DOCTYPE html>
    <html>
    <title>Viewing page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
    .mySlides {display: none}
    </style>
    <body class="w3-content w3-border-left w3-border-right">

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
      <span class="w3-bar-item">Rental</span>
      <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white">

      <!-- Push down content on small screens -->
      <div class="w3-hide-large" style="margin-top:80px"></div>

      <!-- Slideshow Header -->
      <div class="w3-container" id="apartment">
        <h2 class="w3-text-green">CarZ</h2>
        <div class="w3-display-container mySlides">
        <?php
        session_start();
        $i=$_SESSION['image'];
        $c=$_SESSION['Company'];
        echo "
        <img src=$i style='width:100%;margin-bottom:-6px'>
           <div class='w3-display-bottomleft w3-container w3-black'>
             <p>$c</p>
           </div>";

          ?>
        </div>
      </div>
      </div>

      <div class="w3-container">
        <h4><strong>The Specs</strong></h4>
        <div class="w3-row w3-large">
          <div class="w3-col s6">
            <p> Max people: 4</p>
            <p> Horsepower: <?php echo $row1['Horsepower']; ?></p>
            <p> Cost per Day:<?php echo $row1['Cost']; ?></p>
          </div>

        </div>
        <hr>


        <h4><strong>Extra Info</strong></h4>
        <p>our cars are very well maintained and serviced. we wash and clean them after each rental. all the cars we rent are top of the line fully decked models.</p>
        <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
        <hr>

        <h4><strong>Rules</strong></h4>
        <p>we also hold our customers to adhere to strict rules. some of tthe rules include, no drunk driving, only the person who rented the car should drive it, any traffic violations commited by the drivers is on themselves.</p>
        <p>Subscribe to receive updates on available dates and special offers.</p>
      </div>
      <hr>

      <!-- Contact -->
      <div class="w3-container" id="contact">
        <h2>Contact</h2>
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        <p>Questions? Go ahead, ask them:</p>
        <form action="cars.php" target="_blank"><!--
          <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>-->
        <p><a href="cars.php" class="w3-button w3-green w3-third w3-padding-large w3-large w3-margin-top  w3-hover-opacity-off">Book Now</a></p>

        </form>
      </div>


    <!-- End page content -->
    </div>

    <!-- Subscribe Modal -->
    <div id="subscribe" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom w3-padding-large">
        <div class="w3-container w3-white w3-center">
          <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
          <h2 class="w3-wide">SUBSCRIBE</h2>
          <p>Join our mailing list to receive updates on available dates and special offers.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
          <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
        </div>
      </div>
    </div>

    <script>
    // Script to open and close sidebar when on tablets and phones
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }

    // Slideshow Apartment Images
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-opacity-off";
    }
    </script>

    </body>
    </html>
