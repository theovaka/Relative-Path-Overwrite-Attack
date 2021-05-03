<?php
$servername = "localhost"; $username = "root"; $password = "root"; $dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET profile_name=? WHERE id=0";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET["name"]);
$stmt->execute();
$conn->close();
header("Location: http://localhost/RPO_attack/change_name.php");
?>