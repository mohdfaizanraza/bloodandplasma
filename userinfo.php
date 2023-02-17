<?php 


if (isset($_POST['submit'])) {
	# code...


$user= $_POST['user'];
$email= $_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$city=$_POST['city'];
$blood=$_POST['blood'];

$files=$_FILES['file'];

$filename=$files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];


$filext= explode('.',$filename);



	$destinationfile ='upload/'.$filename;
	move_uploaded_file($filetmp, $destinationfile);





$dob=$_POST['dob'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'youtube');



$query="insert into userinfodata (user,email,mobile,gender,state,city,name,file,dob,bloodgroup) values ('$user','$email','$mobile','$gender','$state','$city','$filename', '$destinationfile','$dob','$blood')";

$i=mysqli_query($con,$query);

if ($i) {
	?>
		<script>
		location.replace("donarpage.php");
	</script>
	<?php
	# code...
}

mysqli_close($con);

}


 ?>