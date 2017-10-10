<?php

	$myFile = 'example.json';
	$arr_data = array();
	
	try {
		$formdata = array(
			'firstname'=> $_POST['firstname'],
			'lastname'=> $_POST['lastname']
		);
		
		//gets data from json file
		$jsondata = file_get_contents($myFile);
	
		//converts json into array
		$arr_data = json_decode($jsondata, true);
		
		//push user data to array
		array_push($arr_data, $formdata);
		
		//convert update array to JSOn
		$jsondata = json_decode($arr_data, JSON_PRETTY_PRINT);
		
		if(file_put_contents($myFile, $jsondata)){
			echo 'Data successfully saved.';
		} 
		else {
			echo "Error";
		}
		
	}
	catch (Exception $e){
		echo 'Caught exception: ', $e->getMessage(), "\n";
	}
	
?>
