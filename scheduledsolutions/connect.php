 <!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/tplogo.jpg">
		<title>
		Schedule Solutions
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="Home.html">Home</a></li>
					<li><a href="details.html">Details</a></li>
					<li><a href="collegedetails.html">Class + CA Input</a></li>
					<li><a href="timetable.html">Timetable</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
				</ul>
			</div>
	</head>
</body>
 
 <?php
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	if (!empty($username)){
		if (!empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "scheduledsolutions";

			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
			}
			else{
				$sql = "INSERT INTO users (username, password)
				values ('$username','$password')";
				if ($conn->query($sql)){
					echo "New record is inserted sucessfully";
				}
				else{
					echo "Error: ". $sql ."
					". $conn->error;
				}
				$conn->close();
			}
		}
		else{
			echo "Password should not be empty";
			die();
		}
	}
		else{
		echo "Username should not be empty";
		die();
	}
?>

