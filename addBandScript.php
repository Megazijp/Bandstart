<?php
$servername = "192.168.178.24";
$username = "bandstart";
$password = "mhz16mhz";
$database = "bandstart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

echo "Band Name: " . $_POST['bandName'] . "<br />";
echo "Song Title: " . $_POST['songTitle'] . "<br />";
echo "Song URL: " . $_POST['songUrl'] . "<br />";
echo "YT Thumb: " . $_POST['ytThumb'] . "<br />";
echo "Thumb: " . $_POST['thumb'] . "<br />";
echo "Band Bio: " . $_POST['bandBio'] . "<br />";

$thumbUrl = "";

if($_POST['ytThumb']){   
    $pieces = explode("watch?v=", $_POST['songUrl']);
    $pieces = explode("&", $pieces[1]);
    $thumbUrl =  "http://img.youtube.com/vi/" . $pieces[0] . "/0.jpg";
    copy($thumbUrl, "uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg");
    echo "<img src='" . $thumbUrl . "' />";
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO bands (name, url, Titel, bio, img) VALUES ('" . $_POST['bandName'] . "', '" . $_POST['songUrl'] . "', '" . $_POST['songTitle'] . "', '" . $_POST['bandBio'] . "', 'uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);

?>