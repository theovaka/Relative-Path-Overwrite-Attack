<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>Welcome to my profile page on Fakebook!</h1>
	<img src="C:\xampp\htdocs\RPO_attack\profile_picture.png">
	<?php $servername = "localhost"; $username = "root"; $password = "root"; $dbname = "test";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT profile_name FROM users WHERE id=0";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	    $row = $result->fetch_assoc();
	    $name = $row["profile_name"];
	}
	?>
	
    <p class="name"><span>Hi, my name is <?php echo $name; ?></span></p>
    <p>Press the green button below to friend me or the red to cancel.</p>
    <button class="green"><span>Friend me!</span></button>
    <button class="red"><span>Cancel</span></button>
</body>
</html>