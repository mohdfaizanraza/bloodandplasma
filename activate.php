<?php



include('db.php');



	$updatequery = " update registration set status='active'   ";








	$query = mysqli_query($con,$updatequery);

	if($query)
	{
         echo "email activated successfully";
	}
	else
	{
		header('location:home.php');
	}


?>