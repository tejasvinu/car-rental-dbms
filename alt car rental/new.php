
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Your booking is confirmed </h1>


<?php
        session_start();
        $con= mysqli_connect('localhost','root','','project');

                 if(!$con)
                 {
                     die("Connection failed: " . mysqli_connect_error());
                 }


        mysqli_select_db($con,'project');
        //retriving unique id
        $uid=$_SESSION['Unique_id'];
        $name=$_SESSION['name'];
        echo $uid;
        echo $name;




          //print car and Brand
          $item=" SELECT * FROM car WHERE Unique_id='$uid'";
            echo " Booking details are :";

              echo " <br>";
              echo "username : ",$name;
          $res=mysqli_query($con,$item);

          $num=mysqli_num_rows($res);

          if($num=1){
                  $row=mysqli_fetch_assoc($res);

                  echo " <br>";
                  echo "Car Company : ",$row['Company'];
                  echo " <br>";
                  echo "Car Brand : ",$row['Brand'];

          }


          //print car features



          $doll=" SELECT * FROM requested_vechile WHERE Unique_id='$uid'";

          $res=mysqli_query($con,$doll);

          $num=mysqli_num_rows($res);

          if($num=1){
                  $row=mysqli_fetch_assoc($res);

                  echo " <br>";
                echo "Number of Seat are : ",$row['Seats'];
                echo " <br>";
              echo "Cost : ",$row['Cost'];
              $cost=$row['Cost'];
              echo " <br>";
            echo "Deposit Amount is : ",$row['Deposit'];
            $deposit=$row['Deposit'];
            echo " <br>";


         }
         // find no of days

         $nodays="SELECT Unique_id FROM car ORDER BY Unique_id DESC LIMIT 1";

          $noDays=" SELECT * FROM booking WHERE uname='$name'ORDER BY Book_id DESC LIMIT 1 ";
          $res=mysqli_query($con,$noDays);

          $num=mysqli_num_rows($res);
          echo $num;
              if($num==1){
                  $row=mysqli_fetch_assoc($res);

                  echo "Number of days are : ",$row['no_of_days'];
                  $days=$row['no_of_days'];
                  echo " <br>";
                  echo "Booking date is : ",$row['BookingDate'];
                  echo " <br>";
                  echo "Your Licence ID is: ",$row['Licence_id'];
                  echo "<br>";

            }
            $totalcost=$cost*$days;
            $tax=0.18*$totalcost;
            $finalcost=$tax+$totalcost;
            $balance=$finalcost-$deposit;


            echo "The billing amount will be";
            echo "<br>";
            echo "Total cost:",$cost,"*",$days,"=",$totalcost;
            echo "<br>";
            echo "Tax amount :",$totalcost,"*(18/100)=",$tax;
            echo "<br>";
            echo " final cost:",$totalcost,"+",$tax,"=",$finalcost;
            echo "<br>";
            echo " Balance Amount:",$finalcost,"-",$deposit,"=",$balance;
            $ins= " INSERT INTO billing(Tax,Final_cost,BalanceAmount,username) VALUES('$tax','$finalcost','$balance','$name') ";
            mysqli_query($con,$ins);
            mysqli_close($con);


            echo " <div>
                        <h2> Balance Amount Will be :$balance<h2>
                    <div>";


            echo "Log OUT";

  ?>

  </body>
</html>
