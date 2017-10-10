<?php

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	
	echo $target_file;echo "<br>";
	
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	echo $imageFileType; echo "<br>";
	
	
	$uploadOk = 1;
	if(($imageFileType != "jpg") && ($imageFileType != "png")){
		echo "Only png and jpg's are allowed! <br>"; 
	}
	
	if(file_exists($target_file)){
		echo "file alreay there.";
		$uploadOk=0;
	}
	
	if($_FILES["fileToUpload"]["size"] > 400000){
		echo "file is too large. <br>";
		$uploadOk=0;
	}
	
	if($uploadOk == 0){
		echo "Not uploaded.";
	}else{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
			echo "The file " . basename($_FILES["fileToUpload"]["name"]) . "has been upload.";
		}else {
			echo "Error uploading.";
		}
	}
	
	
	
	/*
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	*/
?>