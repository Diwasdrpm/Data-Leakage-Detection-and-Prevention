<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
	<title>user Data</title>
</head>
<body>


<form action="insert.php" method="post">
		<div class="user-details">
			<h1>User Details</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="NAME"
						name="Name" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" placeholder="Gender"
						name="Gender" value="">
			</div>

            <div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" placeholder="Address"
						name="Address" value="">
			</div>

            <div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" placeholder="Email"
						name="Email" value="">
			</div>

			<input class="button" type="submit"
					name="update details" value="Add-details">