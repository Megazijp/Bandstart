<?php
$servername = "192.168.178.24";
$username = "bandstart";
$password = "mhz16mhz";
$database = "bandstart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

echo "id: " . $_POST['id'] . "<br />";
echo "Band Name: " . $_POST['bandName'] . "<br />";
echo "Song Title: " . $_POST['songTitle'] . "<br />";
echo "Song URL: " . $_POST['songUrl'] . "<br />";
echo "Band Bio: " . $_POST['bandBio'] . "<br />";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE bands SET name='" . $_POST['bandName'] . "', url='" . $_POST['songUrl'] . "', Titel='" . $_POST['songTitle'] . "', bio='" . $_POST['bandBio'] . "' WHERE id=" . $_POST['id'];

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>