<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<div class="center">

<form method=POST action="../home.php">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="uid"><b>User Id</b></label>
    <input type="text" placeholder="Enter User Id" name="uid" required>

    <label for="upass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="upass" required>

    <label for="upass-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="upass-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
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