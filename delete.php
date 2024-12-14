<?php
include ('connect.php');
$did=$_GET['delete_id'];
$query="delete from crud where id=$did";
$result=mysqli_query($con,$query);
if($result){
    echo"<script>alert ('Data deleted successfully')</script>";
    echo"<script> window.open('display.php' , '_self') </script>" ;
}
?>
