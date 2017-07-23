<?php
if(isset($_POST['submit'])){
$to = "imranabubakar91@gmail.com";
$subject = "Email For BAXS TECH";
$message = $_POST['message'];
$headers = "From: ".$_POST['name']." at ".$_POST['email']." ";
mail($to,$subject,$message,$headers);
header("location:index.html");
}
?>