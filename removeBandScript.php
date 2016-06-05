<?php
include("database.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM songs WHERE id=" . $_POST['songsRm'];

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

header("Location: addBand.php");
exit();
?>