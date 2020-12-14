<?php

session_start();
$con= mysqli_connect('localhost','root','','project');

                if(!$con)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }


 $name=$_SESSION['name'];

 $s=" SELECT * FROM booking WHERE uname='$name'";

 $result=mysqli_query($con,$s);

 $num=mysqli_num_rows($result);
 echo " <h1>YOu have $num Booking in the past</h1>";
   if($num ==0){
     echo "you have no histroy";

 }else{
   $i=1;
   if ($num>0){
     while($row=mysqli_fetch_assoc($result)){
       echo "<h1>$i) </h1>";
       echo "Booking Done on\n",$row['BookingDate'] ;
       echo "<br>";
       echo " Number of days Booked are\n",$row['no_of_days'];
       echo "<br>";


        $c="SELECT * FROM car WHERE Unique_id='$row[Uniqueid]' ";

        $res=mysqli_query($con,$c);
        $num=mysqli_num_rows($res);
        if($num==1){
          $rr=mysqli_fetch_assoc($res);
          echo "Car Company used was :\n",$rr['Company'];
          echo"<br>";
          echo "Car Brand used was:\n",$rr['Brand'];
          echo"<br>";
        }


       $i++;
     }
   }
 }






 ?>
