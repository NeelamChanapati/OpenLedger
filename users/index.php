<?php
$conn=new mysqli("localhost","root","root","test") or die("unable to connect");
if ($conn)
    echo"connected successfully";
?>