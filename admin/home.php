<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin login</title>
    <style>
         .halfleft{
            background-color: #f2f2f2;
			width:400px;
			height: 400px;
            margin-left: 20%;
            margin-top: 70px;
            margin-right: 70px;
			padding: 10px 30px 40px 30px ;
			border-radius: 10px;
			box-shadow: 3px 8px 15px rgb(0 0 0 / 0.2);
            padding-right: 70px;
            display:inline-block;


		}
		.halfcenter{
			width: 400px;
            background-color: #f2f2f2;
			height: 400px;
            margin-top: 70px;
            margin-left:10%;
			padding:  10px 30px 40px 30px ;
			border-radius: 10px;
			box-shadow: 3px 8px 15px rgb(0 0 0 / 0.2);
            display:inline-block;
			

		}
        
    </style>

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
                            Profile
                        </a>
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


    <div class="row">
        <div class="col-md-5 halfleft" style="width: 18rem;">
        <div class='child2'> <h4 class="text-center alert alert-info">Glugie Information</h4></div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeeUl9IZDN97pBQNgeunx6dD1df-4g7vkPFw&usqp=CAU" width="100" height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="users.php" class="btn btn-secondary">Explore Me..!</a>
            </div>
        </div>


        <div class="col-md-5 halfcenter" style="width: 18rem;">
        <div class='child2'> <h4 class="text-center alert alert-info">Items Information</h4></div>
        <img src="https://static.thenounproject.com/png/127146-200.png" width="100" height="200" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="users.php" class="btn btn-secondary">Explore Me..!</a>
        </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>



   