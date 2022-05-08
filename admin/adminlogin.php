<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <style>
     *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

/*login styles*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

/* body {
    background: #ecf0f3
} */

.wrapper {
    width: 350px;
    height: 400px;
    margin: 50px auto;
    padding: 40px 30px 30px 30px;
    /* border-top: 3px solid black;
    border-bottom: 3px solid black; */
    /* background-color: #ecf0f3; */
    border-radius: 10px;
    /* box-shadow: 20px 25px 20px #cbced1, -10px -10px 15px #fff; */
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}
.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px
}
.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid black;
    
    /*box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff*/
}

.wrapper .form-field .fas {
    color: rgb(33, 26, 26)
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: black;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}
.wrapper .btn:hover {
    background-color: #009688
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4
}

.wrapper a:hover {
    color: #039BE5
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>
    <title>Admin login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-3">

        <a class="navbar-brand" href="#">
            <h2>Open Ledger</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-4 offset-5">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile</a>
                        <ul class="dropdown-menu dropdown-menu-dark-rigt" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Status</a></li>
                            <li><a class="dropdown-item" href="#">Update</a></li>
                            <li><a class="dropdown-item" href="#">logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <img src="https://www.kindpng.com/picc/m/171-1712282_profile-icon-png-profile-icon-vector-png-transparent.png"
            alt="" width="60" height="60">
    </nav>
      <div class="wrapper">
        <div class="text-center mt-4 name"> Admin Login </div>
        <form class="p-3 mt-3" method="POST"  action="login2.php">
            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="user" id="user" placeholder="Username"> </div>
            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="pass" name="pass" id="pass" placeholder="Password"> </div> 
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"><a href="#">Forget password?</a></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
   