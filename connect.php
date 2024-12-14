<?php
$con=mysqli_connect("localhost","root" ,"","crudoperation");
if($con){
    //Successfull-Connection
}
else{
    die ("not connected".mysqli_connect_error());
}
?>
