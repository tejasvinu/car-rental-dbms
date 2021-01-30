<?php

$con= mysqli_connect('localhost','root','','project');



if(isset($_POST['name'])){
    $_GET['name']=$_POST['name'];
}
 $u=$_GET['name'];
 echo $u;
  $card="DELETE  FROM card_details WHERE cardname='$u'";
  $book="DELETE  FROM booking WHERE uname='$u'";
  $bill="DELETE  FROM billing WHERE username='$u'";


  $result=mysqli_query($con,$card);
  $result1=mysqli_query($con,$book);
  $result2=mysqli_query($con,$bill);

  $sql="DELETE  FROM customer WHERE Name='$u'";
  $result3=mysqli_query($con,$sql);

  if (!$result3){
    die( " error deleting");
  }else{
    echo " Record deleted";

  }
      mysqli_close($con);



 ?>
