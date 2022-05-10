<?php

$conn=new mysqli("localhost","root","","test") or die("unable to connect");
if ($conn){
    echo"Connected Successfully";?><br><?php
}

    $id = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE id = '$id' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['id'] == $id && $row['password'] == $password){
        echo "Welcome ".$id;
    
        $string=exec('getmac');
        $mac=substr($string, 0, 17); 
        mysqli_query($conn,"UPDATE user SET address='$mac' where id='$id'");
        header("location:base.html");

    }else{
        echo "Invalid username or password";
    }

?>
