<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4> the car features are </h4>
    <h1>you have select the car </h1>


   <?php error_reporting(E_ALL^E_NOTICE);?>
    <?php

      session_start();


        $con= mysqli_connect('localhost','root','','project');

        mysqli_select_db($con,'project');
        if(!$con)
        {
              die("Connection failed: " . mysqli_connect_error());
        }

        $company=$_POST['company'];
        $brand=$_POST['brand'];



        echo "Company name :",$company;
        echo "</br>";

        echo "Brand Name :",$brand;

        $w=" SELECT Unique_id FROM car WHERE Company='$company' and Brand='$brand'";
        $res=mysqli_query($con,$w);

        $num=mysqli_num_rows($res);

        if($num==1){




        //mysqli_query($con,$w);
         $result=mysqli_query($con,$w);
         while ($row = mysqli_fetch_assoc($result)) {
           $unid= $row['Unique_id'];

        }
                $_SESSION['Unique_id']=$unid;

        $s=" SELECT * FROM requested_vechile WHERE Unique_id=$unid";

        $res=mysqli_query($con,$s);


                $row=mysqli_fetch_assoc($res);

                echo " <br>";
                echo "Number of Seat are : ",$row['Seats'];
                echo " <br>";
                echo "Initial Deposit Amount ",$row['Deposit'];
               echo " <br>";
               if($row['Status']==0){
                  echo "Status of available of Car: Available";
               }else{
                 echo "Status of available of Car: Not Available";
               }
               echo " <br>";
               echo "Cost of the car per day will be : ",$row['Cost'];
        }else{
          echo "<br>";
          echo " no data";
          echo "<a href ='home.php'>Go Back </a> ";
        }
        if($num==1){
        if($row['Status']==1 ){
              echo "SORRY this car is unavailable to book ";
        }else{
                echo " <form action='booking.php' method='post'>
                  <div>
                    <h1>To Book this Car </h1>
                    </div>
                  <button type='submit ' >Click Here </button>
                  </form>

                  <form action='home.php'>
                    <div>
                      <h1>To Choose different Car </h1>
                      </div>
                    <button type='submit ' >Click Here </button>
                    </form>";

              }
}



     ?>

  </body>
</html>
