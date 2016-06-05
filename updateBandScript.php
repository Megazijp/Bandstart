<?php
include("database.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

/*
echo "id: " . $_POST['id'] . "<br />";
echo "Band Name: " . $_POST['bandName'] . "<br />";
echo "Song Title: " . $_POST['songTitle'] . "<br />";
echo "Song URL: " . $_POST['songUrl'] . "<br />";
echo "Band Bio: " . $_POST['bandBio'] . "<br />";
*/
// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE songs SET name='" . $_POST['bandName'] . "', url='" . $_POST['songUrl'] . "', Titel='" . $_POST['songTitle'] . "', description='" . $_POST['songDesc'] . "', img ='" . "uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg" . "' WHERE id=" . $_POST['id'];

rename("uploads/" . $_POST['bandNameOld'] . " - " . $_POST['songTitleOld'] . ".jpg", "uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg");


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

header("Location: addBand.php");
//exit();
?>