<?php error_reporting(E_ALL^E_NOTICE);?>
    <?php


    $con= mysqli_connect('localhost','root','','project');

             if(!$con)
             {
                 die("Connection failed: " . mysqli_connect_error());
             }else{
               echo "Connection successfull";
             }


    mysqli_select_db($con,'project');

    $name=$_POST['username'];
    $password=$_POST['password'];
    echo $name;
    echo $password;

 if(!empty($name) and !empty($password))
 {

    $s=" SELECT   * from customer where Name='$name' and password ='$password' ";

    $result=mysqli_query($con,$s);

    $num=mysqli_num_rows($result);

    if($num>0){
      $_
      $_SESSION['name']=$name;
      echo "<script>window.location='browsing.php'</script> ";
    }else{
      echo " user not registered
      ";
    }
 }


 mysqli_close($con);
 exit();
     ?>
