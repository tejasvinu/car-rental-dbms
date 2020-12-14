<?php

session_start();
$con= mysqli_connect('localhost','root','','project');

                if(!$con)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }

$w="SELECT * FROM requested_vechile";

$result=mysqli_query($con,$w);

$num=mysqli_num_rows($result);
  if($num ==0){
    echo "no car details present";
}else{
  $i=1;
  if ($num>0){
    while($row=mysqli_fetch_assoc($result)){
      echo $i;
      echo ")Car cost\n",$row['Cost'] ;
      $c="SELECT * FROM car WHERE Unique_id='$row[Unique_id]' ";

      $res=mysqli_query($con,$c);

      $no=mysqli_num_rows($res);
        if($no ==1){
            $cc=mysqli_fetch_assoc($res);
            echo $cc['Company'];
            echo "</br>";

          }
      $i++;



    }
}
}



 ?>
