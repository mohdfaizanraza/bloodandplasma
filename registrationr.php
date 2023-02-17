<?php

include('db.php');

$msg="";



if (isset($_POST['submit'])) {

	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];

	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];


	$pass= password_hash($password,PASSWORD_BCRYPT);
	$cpass= password_hash($cpassword,PASSWORD_BCRYPT);


	$token =bin2hex(random_bytes(15)) ;

$check = mysqli_num_rows(mysqli_query($con,"select * from registration where email='$email'"));


	if($check>0)
	{
		$msg="EMAIL id already exists";
	}

else
{
	if ($password=== $cpassword) {

		$insertquery = "insert into registration(username,email,mobile,password,cpassword,token,status) values('$name','$email','$number','$pass','$cpass','$token','inactive')";


		$iquery=mysqli_query($con,$insertquery);

		if ($iquery) {

			
$subject = "Email Activation";
$body = "Hi, $username. click here too active your account
http://localhost/bloodandplasma/activate.php?token=$token";
$sender_email = "From: jitcsemohammadfaizan@gmail.com";

if (mail($email, $subject, $body, $sender_email)) {
    $_session['msg'] = "check your mail to activate your $email";
    header('location:loginr.php');
} else {
    echo "Email sending failed...";
}

			}else
			{
                 echo "not inserted";
			}
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
		<h2>Register</h2>
		<p class="hint-text">Enter your account</p>

		<div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
        </div>
       
       
		<div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
        </div>

<div class="form-group">
            <input type="text" class="form-control" name="number" id="number" placeholder="number" >
        </div>

		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder=" Password">
        </div>        


        <div class="form-group">
            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder=" Password">
        </div>      
        
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>

        <div class="message">

        <?php
                echo $msg;

        ?>

    </div>

       
    </form>
	<div class="text-center">Already have  an account? <a href="loginr.php">Sign in</a></div>
</div>
</body>
</html>