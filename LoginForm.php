<?php

$credentials = true;

function login() {
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'Attendance';
	$con = mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
	mysql_select_db($db_name); 
	$query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'; "; mysqli_query($conn, $query);
	if (mysqli_result()) {
	header("Location: Attendace.php"); /* Redirect browser */
	exit();
	}
	else {
		$credentials = false;
	}
}
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="POST" style="width:50%;height:50%;margin:auto;margin-top:10%;border:2px solid #cfcfcf;padding:50px">
<fieldset>

<!-- Form Name -->
<legend>LOGIN</legend>

<?php
if (! $credentials) {
	echo '<p style="color: red">Invalid Credentials</p>';
}
?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textemail">Email</label>  
  <div class="col-md-4">
  <input id="textemail" name="textemail" type="text" placeholder="email" class="form-control input-md" required="">
  <span class="help-block">must exist in database</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">LOGIN</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
