<?php
  require '../php/connect.php';

  // Define variables and initialize with empty values
  $username = $password = $confirm_password = $email = "";
  $username_err = $password_err = $confirm_password_err = $email_err = "";


  // Processing form data when form is submitted

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      // Validate username
      if(empty(trim($_POST["username"]))){
          $username_err = "Please enter a username.";
      } 
      else{
          // Prepare a select statement
          $sql = "SELECT uid FROM user WHERE username = ?";
          if($stmt = mysqli_prepare($db, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);
              // Set parameters
              $param_username = trim($_POST["username"]);
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  /* store result */
                  mysqli_stmt_store_result($stmt);            
                  if(mysqli_stmt_num_rows($stmt) == 1){
                      $username_err = "This username is already taken.";
                  } 
                  else{
                      $username = trim($_POST["username"]);
                  }
              } 
              else{
                  echo "Oops! Something went wrong. Please try again later.";
              }
          }
          // Close statement
          mysqli_stmt_close($stmt);
      }
      // Validate password
      if(empty(trim($_POST['password']))){
          $password_err = "Please enter a password.";     
      } elseif(strlen(trim($_POST['password'])) < 6){
          $password_err = "Password must have atleast 6 characters.";
      } else{
          $password = trim($_POST['password']);
      }
      // Validate confirm password
      if(empty(trim($_POST["confirm_password"]))){
          $confirm_password_err = 'Please confirm password.';     
      } else{
          $confirm_password = trim($_POST['confirm_password']);
          if($password != $confirm_password){
              $confirm_password_err = 'Password did not match.';
          }
      }
      // Validate email
      if(empty(trim($_POST['email']))){
          $email_err = "Please enter an email.";     
      } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
          $email_err = "Invalid email format";
      } else{
          $email = trim($_POST['email']);
      }
      // Validate confirm password
      if(empty(trim($_POST["confirm_password"]))){
          $confirm_password_err = 'Please confirm password.';     
      } else{
          $confirm_password = trim($_POST['confirm_password']);
          if($password != $confirm_password){
              $confirm_password_err = 'Password did not match.';
          }
      }
      // Check input errors before inserting in database
      if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
          // Prepare an insert statement
          $sql = "INSERT INTO user (username, password, email) VALUES (?, ?, ?)";
          if($stmt = mysqli_prepare($db, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
              // Set parameters
              $param_username = $username;
              $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
              $param_email = $email;
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  // Redirect to login page
                  header("location: login.php");
              } else{
                  echo "Something went wrong. Please try again later.";
              }
          }
          // Close statement
          mysqli_stmt_close($stmt);
      }
      // Close connection
      mysqli_close($db);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<div class="center">

<form method=POST action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
      <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="help-block"><?php echo $email_err; ?></span>
      <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <span class="help-block"><?php echo $username_err; ?></span>
      <label>Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
        <span class="help-block"><?php echo $password_err; ?></span>
      <label>Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
        <span class="help-block"><?php echo $confirm_password_err; ?></span>
      <p>Already have an account? <a href="login.php">Login here</a>.</p>
      <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
    <p>By creating an account you agree to our <a href="pp.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="reset" class="cancelbtn" >Cancel</button>
      <button type="submit" class="signbtn" >Sign Up</button>
    </div>
  </div>
</form>
</div>
</body>
</html>