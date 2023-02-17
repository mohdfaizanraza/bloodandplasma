
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Document</title>

</head>
<body  style="background-color: #76a6f5;">


<div class="text-center" >
	<h1>list of datas</h1>

	<div class="container">
		<div class="table-responsive" >
			
		
			<table style="border: 1px solid black; padding: 12px;width:100%;"; >
				<thead style="border: 1px solid black;padding: 12px;";>
					<tr style="border: 1px solid black;";>
						
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>id</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>user</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>email</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>contact</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>gender</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>state</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>city</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>file</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>dob</th>
						<th style="border: 1px solid black;padding: 12px;background-color: black;color:white;";>blood</th>
					
					</tr>
				</thead>

				<tbody style="border: 1px solid black;padding: 12px;";>


<?php

$con=mysqli_connect('localhost','root');



mysqli_select_db($con,'youtube');


$selectquery ="select * from userinfodata";
$query = mysqli_query($con,$selectquery);

 $nums = mysqli_num_rows($query);



while($res = mysqli_fetch_array($query))
{

	?>
					<tr style="border: 1px solid black";>
						
							<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['id']; ?></td>
						<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['user']; ?></td>
						<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['email']; ?></td>
						<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['mobile']; ?></td>
							<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['gender']; ?></td>
							<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['state']; ?></td>
							<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['city']; ?></td>
							<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";> <embed type="application/pdf" src="   <?php echo $res['file']; ?>"    
								height="100px" width="100px"></td>
								<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['dob']; ?></td>
									<td style="border: 1px solid black;padding: 12px;background-color: red;color:white;";><?php echo $res['bloodgroup']; ?></td>
						
							
						
					</tr>
<?php	
}



?>

				</tbody>
			</table>
		</div>
	</div>
</div>








	


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>