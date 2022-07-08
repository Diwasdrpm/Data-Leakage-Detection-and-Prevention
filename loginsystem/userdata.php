<!DOCTYPE html>
<html>

<head>
	<title>User details</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		// $conn = mysqli_connect("localhost", "root", "", "users");
        include 'partials/_dbconnect.php';
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $username= $_SESSION['username'];
        $sql1="Select username from users where username='$username'";
        $result = mysqli_query($conn,$sql1);
        $row = mysqli_fetch_row($result);
        $id = $row[1];
		$name = $_REQUEST['name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO userdetails(sno,Name,Gender,Address,Email) VALUES ('$id','$name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		// mysqli_close($conn);
		?>
	</center>
</body>

</html>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>user details</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="userdata.php" method="post">
			
<p>
			<label for="Name">Name:</label>
			<input type="text" name="name" id="Name">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
<p>
			<label for="emailAddress">Email:</label>
			<input type="text" name="Email" id="Email">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
