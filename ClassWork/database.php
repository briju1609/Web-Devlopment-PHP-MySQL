<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully!" . "<br>";
	
	
	// Create database
	$sql = "USE test";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully" . "<br>";
	}
	/*
	else {
		echo "Error creating database: " . $conn->error;
	}*/
	
	// sql to create table
	$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
	
	
	
	if ($conn->query($sql) === TRUE) {
		echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: " . $conn->error . "<br>";
	}
	
	//Insert
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('John', 'Doe', 'john@example.com')";
	
		//Insert Multiple
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Mary', 'Moe', 'mary@example.com');";
		
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Julie', 'Dooley', 'julie@example.com')";
	
		//FOR SINGLE QUERY
	//if ($conn->query($sql) === TRUE) {
		//$last_id = $conn->insert_id;
		//echo "New record created successfully. Last inserted ID is: " .  $last_id . "<br>";
	
	//FOR MULTIPLE QUERY
		if ($conn->multi_query($sql) === TRUE) {
    //if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "Record inserted successfully : ". $last_id . " <br>";
    } else {
        echo "Error inserteing record: " . $conn->error. " <br>";
    }

    //SELECT Query
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);
    
  	echo "<br>";
    if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    	}
    } else {
    	echo "0 results";
    }
	echo "<br>";
   
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	// set parameters and execute
	$firstname = "John";
	$lastname = "Doe";
	$email = "john@example.com";
	$stmt->execute();

	$firstname = "Mary";
	$lastname = "Moe";
	$email = "mary@example.com";
	$stmt->execute();

	$firstname = "Julie";
	$lastname = "Dooley";
	$email = "julie@example.com";
	$stmt->execute();

	echo "New records created successfully";

	$stmt->close();
    
	$conn->close();
	//mysqli_close($conn);

?>
