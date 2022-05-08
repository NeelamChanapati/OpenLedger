<?php

$conn=new mysqli("localhost","root","root","test") or die("unable to connect");
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

    }else{
        echo"<script>alert('check')</script>";
        echo"<script>location.replace('index.html')</script>";
    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin login</title>
</head>

<body style="background-color: gray;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-3">
        <!-- <div class="container-fluid"> -->
        <a class="navbar-brand" href="#">
            <h2>Open Ledger</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end btn-group drop start" id="navbarNavDarkDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark-rigt" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Status</a></li>
                        <li><a class="dropdown-item" href="#">Update</a></li>
                        <li><a class="dropdown-item" href="#"><form action="logout.php">
    <input type="submit" value="Logout">
</form></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
<form action="view.php">
    <input type="submit" value="view">
</form>

<form action="take.php">
    <input type="submit" value="Issue">
</form>

<form action="return.php">
    <input type="submit" value="Return">
</form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>