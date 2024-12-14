<?php include "connect.php" ;

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $place=$_POST['place'];  

$insert_query="insert into crud (userName , email , phone , address) values ('$username','$email','$phone','$place' )"; 
$result=mysqli_query($con,$insert_query);
if($result){echo"<script> alert ('data entered successfully') </script>";
echo"<script> window.open('index.php','_self') </script>";
}
else{ die(mysqli_error($con));}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mission_PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form_container">
      <!-- <form> -->
      <form action="" method="post">
        <fieldset>
          <legend>Personal Details</legend>
          <label for="username"></label>
          <span>Name <span class="required">*</span></span
          ><input
            type="text"
            placeholder="Enter your Username"
            autocomplete="off"
            name="username"
            required
          />

          <label for="email"></label>
          <span>Email <span class="required">*</span></span
          ><input
            type="email"
            placeholder="Enter your Email"
            autocomplete="on"
            name="email"
            value="@gmail.com"
            required
          />

          <label for="phone"></label>
          <span>Phone <span class="required">*</span></span
          ><input
            type="number"
            placeholder="Enter your Mobile"
            autocomplete="off"
            name="phone"
            required
          />

          <label for="place"></label>
          <span>Place <span class="required">*</span></span
          ><input
            type="text"
            name="place"
            placeholder="Enter your Place"
            autocomplete="off"
            required
          />

        
          <input type="submit" class="submit_btn" name="submit" />
         
          <a href="display.php" class="view_data">Details</a>
          <a
            href="https://www.youtube.com/c/StepbyStep_KhanamCoding"
            class="view_data"
            target="_blank"
            >Channel</a
          >
        </fieldset>
      </form>
    </div>

    
  </body>
</html>
