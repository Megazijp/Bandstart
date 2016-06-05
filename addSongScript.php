<?php

include("database.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
/*
echo "Band Name: " . $_POST['bandName'] . "<br />";
echo "Song Title: " . $_POST['songTitle'] . "<br />";
echo "Song URL: " . $_POST['songUrl'] . "<br />";
echo "YT Thumb: " . $_POST['ytThumb'] . "<br />";
echo "Thumb: " . $_POST['thumb'] . "<br />";
echo "Band Bio: " . $_POST['bandBio'] . "<br />";
*/
$thumbUrl = "";

if(isset($_POST['ytThumb'])){   
	$pieces = explode("watch?v=", $_POST['songUrl']);
	$pieces = explode("&", $pieces[1]);
	$thumbUrl =  "http://img.youtube.com/vi/" . $pieces[0] . "/0.jpg";
	copy($thumbUrl, "uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg");
	//echo "<img src='" . $thumbUrl . "' />";
}else{
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	if(move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)){
		echo "yay";
	}
	//echo $_POST['thumb'];
	
}

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO songs (name, url, Titel, description, img) VALUES ('" . $_POST['bandName'] . "', '" . $_POST['songUrl'] . "', '" . $_POST['songTitle'] . "', '" . $_POST['songDesc'] . "', 'uploads/" . $_POST['bandName'] . " - " . $_POST['songTitle'] . ".jpg')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);

if(!file_exists("bands/{$_POST['bandName']}.php")){
	$bandPage = fopen("bands/{$_POST['bandName']}.php", "w");
	$page = "<?php echo 'hi'; ?>";
	fwrite($bandPage, $page);
	fclose($bandPage);
}



//header("Location: addBand.php");
exit();
?>