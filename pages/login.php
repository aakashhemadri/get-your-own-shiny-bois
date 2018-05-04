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