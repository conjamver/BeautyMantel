<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/header.php"); 
    session_start();
    
    //declare variables
    $pwd = $email = "";
    
    include("includes/functions.php");
    
    //if submitted
    if(isset($_POST['adminLogin'])){
        //sanitize the data 
        $email = validateFormData($_POST['email']);
        $pwd = validateFormData($_POST['pwd']);
        
        //connection to the admin database
        include('includes/connection.php');
        
        //make the query to login
        $query = "SELECT first_name, password FROM admin WHERE email = '$email'";
        
        //store the result and query database
        $result = mysqli_query($conn, $query);
        
        //verify that the result has returned
        if(mysqli_num_rows($result) > 0){
            //store the variables from the database
            while($row = mysqli_fetch_assoc($result)){
                $first_name = $row['first_name'];
                $hash_pwd = $row['password'];
            }
            //compare with hash
            if(password_verify($pwd, $hash_pwd)){
                $_SESSION['first_name'] = $first_name;
                header("Location: admin-portal.php");
            }else{
                //display error if the password does not match the hashed version
                $errorMessage = "Error: Wrong username or password.";
            }
        }else{
            //error message as there is no user in database
            $errorMessage = "Error: No such user in the database.";
        }
    }
    
?>
    <body>
        <!--Login section -->
        <section id="section-Account">
            <div class="container">
                <h1 class="text-center">Admin login</h1>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                 <!--Admin login form -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <input type="text" name="email" value="<?php echo $email ?>">
                            <input type="password" name="pwd" value="<?php echo $pwd ?>">
                            <input class="btn btn-primary" type="submit" name="adminLogin" value="Login">
                        </form>
                        <?php echo $errorMessage; ?>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>