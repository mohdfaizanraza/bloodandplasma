<?php

include('db.php');


if (isset($_POST['submit'])) 
{

$email = $_POST['email'];
$password = $_POST['password'];

$email_search = "select * from registration where email='$email' and status='active' ";
$query = mysqli_query($con,$email_search);

$email_count = mysqli_num_rows($query);

if ($email_count) {

	$email_pass = mysqli_fetch_assoc($query);

	$db_pass = $email_pass['password'];

	$_SESSION['username'] = $email_pass['username'];

	$pass_decode = password_verify($password, $db_pass);

	if($pass_decode)
	{
		?>
		<script>
		location.replace("donardatatable.php");
	</script>
	<?php
	}

	else
	{
		echo "login credintial wrong";
	}
}

	
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title> Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  

.signup-form .message
{
	color: red;
}

</style>
</head>
<body>
<div class="signup-form">

	<h5 class="text-center text-success"></h5>



    <form  method="post">
		<h2>Login</h2>
		<p class="hint-text">Enter your account</p>
       
		<div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
        </div>



		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder=" Password">
        </div>        


        
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Login Now</button>
        </div>

    


    </div>

       
    </form>
	<div class="text-center">create an account? <a href="registrationr.php">Sign in</a></div>
</div>
</body>
</html>