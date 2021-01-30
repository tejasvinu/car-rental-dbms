<!DOCTYPE html>
<html lang="" dir="ltr">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



      <!-- icons -->
      <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container-fluid mt-4 pt-4">

          <div class="container-fluid">



              <table class="table table-responsive-sm  table-responsive-md ">
                  <thead class="thead">
                      <h1 class="text-dark text-center"> CAR Details</h1>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col"> Company</th>
                          <th scope="col">Brand</th>
                          <th scope="col">Image</th>
                          <th scope="col">Horsepower</th>
                          <th scope="col">Cost</th>

                      </tr>
                  </thead>


                  <tbody>
    <?php
    $con= mysqli_connect('localhost','root','','project');


    mysqli_select_db($con,'project');



$sql = "SELECT * FROM `car`";

$result = mysqli_query($con ,$sql);

$sql1 = "SELECT * FROM `requested_vechile`";
$result1 = mysqli_query($con ,$sql1);

$count=0;


while($row = mysqli_fetch_assoc($result)and $row1 = mysqli_fetch_assoc($result1)){

$company=$row['Company'];
$brand=$row['Brand'];
$image=$row['Image'];

  $power=$row1['Horsepower'];
  $cost=$row1['Cost'];
$unique=$row['Unique_id'];
$count++;

echo'<tr>
<th scope="row">'.$count.'</th>
<td>'.$company.'</td>
<td>'.$brand.'</td>
<td>';
echo"<img src='$image'style='width:20%;margin-bottom:-6px' ></td>
<td>$power</td>
<td>$cost</td>
</tr>";

}

?>
</tbody>
      </table>

  </div>

</div>

  </body>
</html>
