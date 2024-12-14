<?php include("connect.php");

if(isset($_GET['update_id'])){
  $uid=$_GET['update_id'];
  $select_query="select * from crud where id=$uid";
  $result=mysqli_query($con,$select_query);
  if($result){
    $row=mysqli_fetch_assoc($result); 
    $username=$row['userName'];
    $email=$row['email'];
    $phone=$row['phone'];
    $place=$row['address'];
  
    //UPDATE
    if(isset($_POST['update'])){
      $username2=$_POST['username'];
      $email2=$_POST['email'];
      $phone2=$_POST['phone'];
      $place2=$_POST['place'];
      
    $update_query="update crud set userName='$username2',email='$email2' , phone='$phone2' , address='$place2' where id=$uid";
    
    $result_update=mysqli_query($con,$update_query);
    if($result_update){ 
      echo "<script>alert ('Updated Successfully !!!')</script>";
      
      header('Location: display.php');
    }
    else {die(mysqli_error($con));}
  }
}
  else {die(mysqli_error($con));}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data in PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form_container">
      <form action="" method="post">
        <fieldset>
          <legend>Edit Details</legend>
          <label for="username">Username</label>
          <input type="text" name="username" autocomplete="off" value="<?php echo $username   ?>"/>

          <label for="email">Email</label>
          <input type="email" name="email" autocomplete="off" value="<?php echo $email  ?>"/>

          <label for="phone">Mobile</label>
          <input type="number" name="phone" autocomplete="off" value="<?php echo $phone  ?>"/>

          <label for="place">Place</label>
          <input type="text" name="place" autocomplete="off" value="<?php echo $place   ?>"/>

          <input
            type="submit"
            class="submit_btn"
            name="update"
            value="Update"
            
          />
        </fieldset>
      </form>
    </div>
    
  </body>
</html>
