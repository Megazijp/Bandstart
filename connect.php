<?php
include("database.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bands = array();

$sql = "SELECT id, name, url, Titel, description, img FROM songs";
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
                $row['description'],
                $row['img']
            )
        );
    }
} else {
    echo "Error loading personen";
}

mysqli_close($conn);

?>