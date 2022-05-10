<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>

  body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background-color: #d2f8d2;    
  }
  .main-body {
      padding: 15px;
  }
  .card {
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }

  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: transparent;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, 0.87);
      border-radius: .25rem;
      color:black;
  }


  .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
  }

  .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
  }

  .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
  }
  .mb-3, .my-3 {
      margin-bottom: 1rem!important;
  }

  .bg-gray-300 {
      background-color: black;
  }
  .h-100 {
      height: 100%!important;
  }
  .shadow-none {
      box-shadow: none!important;
  }
  .navbar-nav {
    text-transform: uppercase;
    text-align: center;
    font-weight: bold;
  }

  .navbar-nav * {
    box-sizing: border-box;
    transition: all .35s ease;
  }

  .navbar-nav li {
    display: inline-block;
    list-style: outside none none;
    margin: .5em 1em;
    padding: 0;
  }

  .navbar-nav a {
    padding: .5em .8em;
    color: black;
    position: relative;
    text-decoration: none;
    font-size: 20px;
  }

  .navbar-nav a::before,
  .navbar-nav a::after {
    content: '';
    height: 14px;
    width: 14px;
    position: absolute;
    transition: all .35s ease;
    opacity: 0;
  }

  .navbar-nav a::before {
    content: '';
    right: 0;
    top: 0;
    border-top: 3px solid black;
    border-right: 3px solid black;
    transform: translate(50%, 100%);
  }

  .navbar-nav a:after {
    content: '';
    left: 0;
    bottom: 0;
    border-bottom: 3px solid black;
    border-left: 3px solid black;
    transform: translate(100%, -50%)
  }

  .navbar-nav a:hover:before,
  .navbar-nav a:hover:after{
    transform: translate(0,0);
    opacity: 1;
  }

  .navbar-dark .navbar-nav .nav-item .nav-link{
      color: black;
  }
  .navbar-dark .navbar-nav .nav-link:hover {
      color: black;
  }

  .btn-three {
    color: black;
    transition: all 0.5s;
    position: relative;
  }
  .btn-three::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background-color: rgba(255,255,255,0.1);
    transition: all 0.3s;
  }
  .btn-three:hover::before {
    opacity: 0 ;
    transform: scale(0.5,0.5);
  }
  .btn-three::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    transition: all 0.3s;
    border: 1px solid black;
    transform: scale(1.2,1.2);
  }
  .btn-three:hover::after {
    opacity: 1;
    transform: scale(1,1);
  }
  .mb-0, .mt-3{
      color: black;
  }
</style>
<body>

        <div class="container">
          
            <nav class="navbar navbar-expand-sm navbar-dark text-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Change Password</a>
                </li>
                <form method="POST" action="logout.php">
                 
                  <li class="nav-item">
                    <input style="padding: .5em .8em;font-size: 20px;color: orange;background: none;border: none;" type="submit" value="Logout">
                  </li>
                </form>
              </ul>
            </div>
          </nav>
          </div>
         
            
                  <br>

                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://th.bing.com/th/id/R.f0e484c12aa57292f9bd688eb98b3085?rik=oKU4f%2f1KkSEdQg&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_511291.png&ehk=oFB4ZUkeplC7aajp5sRH1Q60BiZoT%2fAchk%2bbAHjN534%3d&risl=&pid=ImgRaw&r=0" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3"> 
                              <h4>Volunteer</h4><br>
                              <a style="text-decoration: none;color:black"class="btn btn-three" href="#">Edit Profile</a><br><br>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" >
                              Neelam Chanapati
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              n@gmail.com
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              123456789
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Vizianagaram
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">User Since</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              05/08/2022
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!---About Section-->
        <div class="bg-light">
          <div class="container py-5">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <h4 class="display-4">You are an <b>Admin</b></h4><hr><br>
                <h5>You are role is crucial and significant.</h5>
                <p class="lead text-muted"> On requesting for an item by a gluggie as an admin you have all rights to accept or decline that request.</p> 
                <ul>
                  <li>You are the only responsible person for granting and decling requests for taking an item from glug.</li>
                  <li>You have been given access to all glugies and items information.</li>
                  <div class="display: inline;">
                  <a style="margin-top:50px; text-decoration: none;color:black"class="btn btn-three" href="users.php"><h3>Glugies Information</h3></a><br><br>
                  <a style="text-decoration: none;color:black"class="btn btn-three" href="#"><h3>Items Information</h3></a><br><br>
                  <!-- <a style="text-decoration: none;color:black"class="btn btn-three" href="#"><h3>Return Items</h3></a><br><br> -->
                </div>
                </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <!---End About-->

       
        
        
</body>
</html>