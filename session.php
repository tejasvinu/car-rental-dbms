<?php

    $con= mysqli_connect('localhost','root','','project');


    if(!$con)
    {
          die("Connection failed: " . mysqli_connect_error());
    }


    mysqli_select_db($con,'project');

    $name=$_POST['username'];
    $address=$_POST['Address'];
    $email=$_POST['email'];
    $sex=$_POST['Sex'];
    $phone=$_POST['phone_id'];
    $birth=$_POST['Dateofbirth'];
    $password=$_POST['password'];


    $s= " SELECT   * from customer where Name='$name'  ";

    $result=mysqli_query($con,$s);

    $num=mysqli_num_rows($result);
      if($num ==1){
        echo "username already present";
    }else{
      $ins=" INSERT into customer(Phone_id,Dateofbirth,Address,Sex,email,Name,password) values('$phone','$birth','$address','$sex','$email','$name','$password')";
      mysqli_query($con,$ins);
      echo " <script> window.location='browsing.php' </script>";
    }


 ?>
