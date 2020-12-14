<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="admin.php" method="post">
      <div>
        <input type="text" name="uname" placeholder="Enter Username" required>
      </div>
      <div>
        <input type="text" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" >submit </button>

   <?php error_reporting(E_ALL^E_NOTICE);?>

    <?php
    $con= mysqli_connect('localhost','root','','project');


    mysqli_select_db($con,'project');

    $name=$_POST['uname'];
    $password=$_POST['password'];
  if(!empty($name) and !empty($password))
  {

     $s=" SELECT   * from admin where adminName='$name' && password ='$password' ";
     $result=mysqli_query($con,$s);

     $num=mysqli_num_rows($result);

     if($num==1){
       echo "<script>window.location='alter.php'</script> ";
     }else{
       echo " admin details not correct";
     }
   }


     ?>
  </body>
</html>
