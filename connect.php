<?php
$servername = "192.168.178.24";
$username = "bandstart";
$password = "mhz16mhz";
$database = "bandstart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bands = array();

$sql = "SELECT id, name, url, Titel, bio, img FROM bands";
$result = $conn->query($sql);
$num = $result->num_rows;
if ($num > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($bands, 
            array(
                $row['id'],
                $row['name'],
                $row['url'],
                $row['Titel'],
                $row['bio'],
                $row['img']
            )
        );
    }
} else {
    echo "Error loading personen";
}

mysqli_close($conn);

?>