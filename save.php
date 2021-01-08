<?php
include('config.php');
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $mess=$_POST['mess'];
 $r=mysqli_query($h,"INSERT INTO message(name,email,mobile,mess)VALUES('$name','$email','$mobile','$mess')");
 if($r)
 {
     echo '<center>Thanks for reaching us</center>';
 }else {
     echo 'failed';
 }
 
 ?>