<?php
  require '../php/connect.php';

  $username = $password = "";
  $username_err = $password_err = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
      $username_err = "Please enter a username";
    }
    else{
      $username = $_POST["username"];
    }

    // Validating password
    if(empty(trim($_POST["password"]))){
      $password_err = "Please enter a password";
    }
    else{
      $password = $_POST["password"];
    }

    //Check for input errors before validating login!
    if(empty($username_err) && empty($password_err)){
      //Prepare mysqli statement
      $sql = "SELECT username, password FROM users WHERE username = ?";
      if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
            // Store result
              mysqli_stmt_store_result($stmt);    
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: ../home.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
// Close connection
mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<form class="center" method="POST" action="../home.php">
  <div class="container">
    <h1>Sign In</h1>
    <p>Enter credentials to login!. <br>If you haven't created an account <a href="signup.php">click here</a></p>
    <hr>

    <label for="uid"><b>Username</b></label>
    <input type="text" placeholder="Enter user id" name="uid" required>

    <label for="upass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="upass" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="pp.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signbtn">Sign In</button>
    </div>
  </div>
</form>
</body>
</html>