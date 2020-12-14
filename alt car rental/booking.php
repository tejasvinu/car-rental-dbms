<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>Fill the Booking Details </h1>

      <form acton="booking.php"method="post">
        <h4>Verify your Account</h4>
        <div>
          <input type="text" name="uname" placeholder="Enter Username" required>
        </div>
        <div>
          <input type="text" name="password" placeholder="Enter password" required>
        </div>
        <div>
        Enter Date of booking:  <input type="date" name="date"  required>
        </div>
        <div>
          Enter number of days:<input type="text" name="no_days" required>
        </div>
        <div>
          Enter your Licence ID:<input type="text" name="licence_id"  required>
        </div>
        <button type="submit" >submit </button>

      </form>
      <?php error_reporting(E_ALL^E_NOTICE);?>
  <?php
      session_start();

      $con= mysqli_connect('localhost','root','','project');

               if(!$con)
               {
                   die("Connection failed: " . mysqli_connect_error());
               }


      mysqli_select_db($con,'project');

      $name=$_POST['uname'];
      $password=$_POST['password'];
      $_SESSION['name']=$name;


   if(!empty($name) and !empty($password))
   {

      $s=" SELECT   * from customer where Name='$name' and password ='$password' ";

      $result=mysqli_query($con,$s);

      $num=mysqli_num_rows($result);

      if($num==1){
        $name=$_POST['uname'];
        $date=$_POST['date'];
        $licenceid=$_POST['licence_id'];
        $noDays=$_POST['no_days'];
        $unid=$_SESSION['Unique_id'];


             $con= mysqli_connect('localhost','root','','project');

             if(!$con)
             {
                 die("Connection failed: " . mysqli_connect_error());
             }


            mysqli_select_db($con,'project');
            $ins=" INSERT into booking(BookingDate,no_of_days,Licence_id,uname,Uniqueid) values('$date','$noDays','$licenceid','$name','$unid')";
            mysqli_query($con,$ins);

            echo "<script> window.location='new.php' </script>";


        echo"<br>";
      }else{
        echo $unid;
        echo " user and password are not same ";
        exit();
      }
   }


    mysqli_close($con);

      ?>

  </body>
</html>
