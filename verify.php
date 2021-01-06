<?php error_reporting(E_ALL^E_NOTICE);?>
<?php
session_start();

$con= mysqli_connect('localhost','root','','project');

         if(!$con)
         {
             die("Connection failed: " . mysqli_connect_error());
         }


mysqli_select_db($con,'project');
unset($cardno);
$date=$_POST['CheckIn'];
$licence=$_POST['licence_id'];
$card=$_POST['card_no'];
$exp_month=$_POST['exp_month'];
$exp_year=$_POST['exp_year'];
$ccv=$_POST['ccv'];
unset($unid);
$days=$_POST['days'];
$name=$_SESSION['name'];
$unid=$_SESSION['unique_id'];

//echo $date,$licenceid,$card,$exp_year,$exp_month,$ccv,$days,$name,$unid;


if(!empty($date) and !empty($days))
{

       $con= mysqli_connect('localhost','root','','project');

       if(!$con)
       {
           die("Connection failed: " . mysqli_connect_error());
       }


      mysqli_select_db($con,'project');
      $ins=" INSERT into booking(BookingDate,no_of_days,Licence_id,uname,Uniqueid) values('$date','$days','$licence','$name','$unid')";
      mysqli_query($con,$ins);

}

if(!empty($ccv) and !empty($card))
{

        mysqli_select_db($con,'project');
        $inst=" INSERT into card_details(card_no,card_month,card_year,card_ccv,cardname) values('$card','$exp_month','$exp_year','$ccv','$name')";
        mysqli_query($con,$inst);
          echo "<script> window.location='book.php' </script>";


      echo"<br>";
    }
mysqli_close($con);

?>
