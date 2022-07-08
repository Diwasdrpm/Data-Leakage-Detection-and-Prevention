<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title><details></details></title>
</head>

<body>
	<center>
	<?php require 'partials/_nav.php' ?>
		<?php
        include 'partials/_dbconnect.php';
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
        $username= $_SESSION['username'];
        // echo $_SESSION['username'];
		$Name = $_POST['Name'];
		$Gender = $_POST['Gender'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$id1 = "select * from  users where username = '$username'";
		$result = mysqli_query($conn, $id1);
		$row = mysqli_fetch_row($result); 
		$id = $row[0];
		 

		$sql = "INSERT INTO userdetails(id,username,Name,Gender,Address,Email) VALUES ('$id','$username','$Name','$Gender','$Address','$Email')";
		if(mysqli_query($conn, $sql)){
			session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
			header("location: login.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
