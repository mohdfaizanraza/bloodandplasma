
<?php 





	# code...



$name= $_POST['name'];

$state=$_POST['state'];
$city=$_POST['city'];

$address = $_POST['address'];
$contact = $_POST['contact'];
$pincode = $_POST['Pincode'];

$con=mysqli_connect('localhost','root');



mysqli_select_db($con,'youtube');





$query="insert into hospitaldetail (name,state,city,address,contact,pincode) values ('$name','$state','$city','$address','$contact','$pincode')";

$i=mysqli_query($con,$query);

if ($i) {
	?>
		<script>

		location.replace("adminpage.php");
	</script>
	<?php
	# code...
}

else
{
	echo "not inserted";
}






 ?>