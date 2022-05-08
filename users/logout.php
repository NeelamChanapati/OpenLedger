<?php

$conn=new mysqli("localhost","root","","test") or die("unable to connect");


 //Check mac address
$string=exec('getmac'); 
$mac=substr($string, 0, 17);


    $sql = "Update user set address=0 where address='$mac'";

    $result = mysqli_query($conn,$sql);
	header("location:index.html");


?>
