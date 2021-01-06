<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<link href='cars.css' rel='stylesheet'>

<?php

session_start();
$con= mysqli_connect('localhost','root','','project');

mysqli_select_db($con,'project');



    $i=$_SESSION['image'];
    $c=$_SESSION['Company'];
    $u=$_SESSION['unique_id'];
    $name=$_SESSION['name'];
  $v=" SELECT Cost FROM requested_vechile WHERE Unique_id='$u' ORDER BY Order_id DESC LIMIT 1";
       $result=mysqli_query($con,$v);
      $row=mysqli_fetch_assoc($result);
      $cost= $row['Cost'];

  $detail="SELECT * FROM customer WHERE Name='$name'  ";
     $res=mysqli_query($con,$detail);
     $row1=mysqli_fetch_assoc($res);

    $card="SELECT * FROM card_details WHERE cardname='$name'ORDER BY card_id DESC LIMIT 1";
    $res1=mysqli_query($con,$card);
    $row2=mysqli_fetch_assoc($res1);

    $day="SELECT * FROM booking WHERE uname='$name'ORDER BY Book_id DESC LIMIT 1";
    $res2=mysqli_query($con,$day);
    $row3=mysqli_fetch_assoc($res2);





 ?>

<body>
<div id="wrap">
	<div id="accordian">

		<div class="step" id="step2">
			<div class="number">
  				<span>.</span>
        </div>
        <div>
  				<h1>Finalize Order</h1>
  			</div>
  			<div class="modify">
  				<i class="fa fa-plus-circle"></i>
  			</div>
  		</div>
  		<div class="content" id="final_products">
  			<div class="left" id="ordered">
  				<div class="products">
  					<div class="product_image">
              <?php

  						echo"<img src=$i id='imgg'>";
              ?>
            </div>
  					<div class="product_details">

  						<span class="product_name">CAR:<?php echo $c; ?></span>

  						<span class="quantity">No OF DAYS:<?php echo $row3['no_of_days']; ?></span>
  						<span class="price">COST:<?php echo $cost; ?></span>
  					</div>
  				</div>
  				<div class="totals">
  					<span class="subtitle">Subtotal <span id="sub_price"><?php $total= $cost*$row3['no_of_days'];
            echo $total;
              ?></span></span>
  					<span class="subtitle">Tax <span id="sub_tax"><?php
                        $tax=$total*0.18;
                        echo $tax;
             ?></span></span>

  				</div>
  				<div class="final">
  					<span class="title">Total <span id="calculated_total">
              <?php
                $price=$total+$tax;
                echo $price;?></span></span>
  				</div>
  			</div>
  			<div class="right" id="reviewed">
  				<div class="billing">
  					<span class="title">Billing:</span>
  					<div class="address_reviewed">
  						<span class="name"><?php echo $row1['Name']; ?></span>
  						<span class="address"><?php echo $row1['email']; ?></span>
  						<span class="location"><?php echo $row1['Phone_id']; ?></span>
  						<span class="phone"><?php  echo $row1['Address'];?></span>
              		<span class="phone"><?php  echo $row3['Licence_id'];?></span>
  					</div>
  				</div>
  				<div class="shipping">
  					<span class="title">Shipping:</span>
  					<div class="address_reviewed">
  						<span class="name"><?php echo $row1['Name']; ?></span>
  						<span class="address"><?php  echo $row1['Address'];?></span>
  					</div>
  				</div>
  				<div class="payment">
  					<span class="title">Payment:</span>
  					<div class="payment_reviewed">
  						<span class="method">Visa</span>
  						<span class="number_hidden"><?php
              $number =  $row2['card_no'];
$masked =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
print $masked;

               ?></span>
  					</div>
  				</div>

</div>
<form action="landing.php" target="_blank">

<button type="submit" class="w3-button w3-green w3-third">Enjoy the ride  </button>
</form>

</div>


</body>
<?php
mysqli_select_db($con,'project');
$ins=" INSERT into billing(Tax,cost,final_Amount,username) values('$tax','$total','$price','$name')";
mysqli_query($con,$ins);


 ?>
