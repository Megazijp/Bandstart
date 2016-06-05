<?php

include("database.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


$imageFileType = pathinfo($_FILES["thumb"]["name"], PATHINFO_EXTENSION);
$target_dir = "bands/";
$target_file = "{$target_dir}{$_POST['bandName']}.{$imageFileType}";

if(!isset($_POST['thumb'])){
	move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file);
}

$sql = <<<EOD
SELECT name, img, bio FROM bands WHERE name='{$_POST["bandName"]}';
EOD;
$result = $conn->query($sql);
$num = $result->num_rows;
if ($num > 0) {
	if($_POST['bandBio'] != ""){
			$sql = <<<EOD
UPDATE bands SET name='{$_POST["bandName"]}', img='{$target_file}', bio='{$_POST["bandBio"]}' WHERE name='{$_POST["bandName"]}';
EOD;
	}else{
			$sql = <<<EOD
UPDATE bands SET name='{$_POST["bandName"]}', img='{$target_file}' WHERE name='{$_POST["bandName"]}';
EOD;
	}

}else{
	$sql = <<<EOD
INSERT INTO bands (name, img, bio) VALUES ('{$_POST["bandName"]}', '{$target_file}', '{$_POST["bandBio"]}');
EOD;
}



if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
/*
if(!file_exists("bands/{$_POST['bandName']}.php")){
	$bandPage = fopen("bands/{$_POST['bandName']}.php", "w");
	$page = "<?php echo 'hi'; ?>";
	fwrite($bandPage, $page);
	fclose($bandPage);
}
*/


//header("Location: addBand.php");
exit();
?>