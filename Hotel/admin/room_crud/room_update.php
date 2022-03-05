<?php
$conn=mysqli_connect("localhost","root","","cards");
   if($conn==false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
   }
    
 
// Define variables and initialize with empty values
$name = $image = $type = $description = $link = $information = "";
$name_err = $image_err = $type_err = $description_err = $link_err = $information_err  ="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } 
    else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_image = trim($_POST["image"]);
    if(empty($input_image)){
        $image_err = "Insert Image name.";     
    } else{
        $image = $input_image;
    }

    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $type_err = "Please enter text.";     
    } 
     else{
        $description = $input_description;
    }

    
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter text.";     
    } 
     else{
        $type = $input_type;
    }

    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($image_err) && empty($type_err) && empty($description_err)){
        // Prepare an update statement
        $sql = "UPDATE cards SET name=?, image=?, type=?, description=? WHERE id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_name, $param_image, $param_type, $param_description, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_image = $image;
            $param_type = $type;
            $param_description = $description;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: ../room_edit.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM cards WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value

                    $name = $row["name"];
                    $image = $row["image"];
                    $type= $row["type"];
                    $description=$row["description"];
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image Name</label>
                            <input type="text" name="image" class="form-control" value="<?php echo $image; ?>">
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
                            <label>Room Number</label>
                            <input type="text"  name="type" class="form-control" maxlength="145" value="<?php echo $type; ?>">
                            <span class="help-block"><?php echo $type_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Room Rate</label>
                            <input type="text"  name="description" class="form-control" maxlength="145" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../room_edit.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>