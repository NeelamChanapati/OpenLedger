<?php
// Include config file
$connection = mysqli_connect("localhost", "root", "","test");
 
// Define variables and initialize with empty values
$name ="";
$count=0;
$name_err="";
$count_err=0;
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Id as input
    //$id=trim($_POST["id"]);
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter Item  name.";
    // } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate password
    $input_count = trim($_POST["count"]);
    if(empty($input_count)){
        $count_err = "Items must be greater than 0.";     
    } else{
        $count = $input_count;
    }
    
    // Validate email
    
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($name_err) && empty($count_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO items (iname,status,icount) VALUES (?,1,?)";
         if($stmt = mysqli_prepare($connection, $sql)){
         // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt,"si",$param_name,$param_count);
            
        //     // Set parameters
             $param_name = $name;
            //  $param_status = $status;
             $param_count = $count;
         }
            
            
            // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                   // Records created successfully. Redirect to landing page
                 header("location: items.php");
                 exit();
                 } else{
                     echo "Oops! Something went wrong. Please try again later.";
                 }
             }
         
        // Close statement
    //     mysqli_stmt_close($stmt);
    // }
    
    // Close connection
//     mysqli_close($connection);
// }
            }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add Gluggie record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <!-- <div class="form-group">
                            <label>id</label>
                            <input type="text" name="id" class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
                            <span class="invalid-feedback"><?php echo $id_err;?></span>
                        </div> -->
                        <div class="form-group">
                            <label>Item Name</label>
                            <textarea name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"><?php echo $name; ?></textarea>
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input type="number" name="count" class="form-control <?php echo (!empty($count_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count; ?>">
                            <span class="invalid-feedback"><?php echo $count_err;?></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="users.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>