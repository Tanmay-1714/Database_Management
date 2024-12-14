<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css?va=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <h2>Display Student Details</h2>    
<?php

include ("connect.php");
$select_query="select * from crud";
$result=mysqli_query($con,$select_query);
$i=1;        // for better serilization..


if(($result)){
  $cnt=mysqli_num_rows($result);  
if($cnt>0){
  echo'<div class="table_container">
      <table class="table">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Place</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';

// nikal to liya ab table me bhi daal le..
  while($row=mysqli_fetch_assoc($result)){ // 1st entry ab kabu me h.. array ke form me saari info isme aa gai..
  $id=$row['id'];
  $username=$row['userName'];
  $email=$row['email'];
  $phone=$row['phone'];
  $address=$row['address'];

     echo   "  <tr>
            <td>$i</td>
            <td>$username</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$address</td>
            <td>
              <a href='update.php?update_id=$id'
                ><i class='fa-solid fa-pen-to-square'></i
              ></a>
              <a href='delete.php?delete_id=$id'><i class='fa-solid fa-trash'></i></a>
            </td>
          </tr> ";
          $i=$i+1;
  }
  }
  else{echo"<h3 class='no_records'>NO Record is found </h3>";}
}
else {die(mysqli_error($con));}
?>          
        </tbody>

        <tbody></tbody>
      </table>
    </div>
    
  </body>
</html>
