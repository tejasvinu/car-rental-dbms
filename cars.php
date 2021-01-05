<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/disp_landing.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i></i>Enter Details</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="verify.php" target="_blank" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Booking date</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>

        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i ></i> No of days</label>
            <input class="w3-input w3-border" type="number" value="1" name="days" min="1" max="">
          </div>
				</div>
				<div class="w3-row-padding" style="margin:8px -16px;">
					<div class="w3-half w3-margin-bottom">
						<label><i ></i>Enter Licence  ID</label>
						<input class="w3-input w3-border" type="text" value="" name="licence_id" >

												<h1>Card Details</h1>

							<div class="content" id="payment">
								<div class="left credit_card">

									<div>
									<input type="text" name="card_no" value="" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number">Card Number</label>
									</div>
									<div>
									  <div class="expiry">
									      <div class="month_select">
									        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
												<option value = "1">01 (Jan)</option>
					                   			<option value = "2">02 (Feb)</option>
					                   			<option value = "3">03 (Mar)</option>
					                   			<option value = "4">04 (Apr)</option>
					                   			<option value = "5">05 (May)</option>
					                   			<option value = "6">06 (Jun)</option>
					                   			<option value = "7">07 (Jul)</option>
					                   			<option value = "8">08 (Aug)</option>
					                   			<option value = "9">09 (Sep)</option>
					                   			<option value = "10">10 (Oct)</option>
					                   			<option value = "11">11 (Nov)</option>
					                   			<option value = "12">12 (Dec)</option>
					                        </select>

					                      <span class="divider">-</span>

									        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
												<option value = "14">14 </option>
					                   			<option value = "15">15 </option>
					                   			<option value = "16">16 </option>
					                   			<option value = "17">17 </option>
					                   			<option value = "18">18 </option>
					                   			<option value = "19">19 </option>
					                   			<option value = "20">20 </option>
					                   			<option value = "21">21 </option>
					                   			<option value = "22">22 </option>
					                   			<option value = "23">23 </option>
					                   			<option value = "24">24 </option>
					                   			<option value = "25">25 </option>
					                        </select>

					                 <label class="exp_date" for="Exp_Date">Exp Date</label>

												</div>
					            	<div class="sec_num">
					              <div>
									        <input type="text" name="ccv" value="" id="ccv" placeholder="1234" data-trigger="change" data-validation-minlength="4" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/>
					                <label for="ccv">Security Code</label>
									      </div>
									      </div>


        </div>
        <button class="w3-button w3-dark-grey" type="submit"> Book Now</button>
      </form>
    </div>
  </div>
</header>


<!-- Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
