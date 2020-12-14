<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Already a User </title>
  </head>
  <body>
       <h1>login here</h1>
       <form action="alredyregistered.php" method="post">
         <div>
           <input type="text" name="uname" placeholder="Enter Username" required>
         </div>
         <div>
           <input type="text" name="password" placeholder="Enter password" required>
         </div>
         <button type="submit" >submit </button>

       </form>
       <?php error_reporting(E_ALL^E_NOTICE);?>
       <?php


       $con= mysqli_connect('localhost','root','','project');

                if(!$con)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }


       mysqli_select_db($con,'project');

       $name=$_POST['uname'];
       $password=$_POST['password'];

    if(!empty($name) and !empty($password))
    {

       $s=" SELECT   * from customer where Name='$name' and password ='$password' ";

       $result=mysqli_query($con,$s);

       $num=mysqli_num_rows($result);

       if($num>0){
         echo "<script>window.location='home.php'</script> ";
       }else{
         echo " user not registered";
       }
    }


    mysqli_close($con);
    exit();
        ?>

  </body>
</html>
