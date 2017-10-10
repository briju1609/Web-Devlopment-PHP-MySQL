<?php

echo "<h1>Database Page</h1>" . "<br>";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";

// Create database
$sql = "CREATE DATABASE c0707229_brijesh";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error . "<br>";
}

//Use database
$sql = "USE c0707229_brijesh";
if ($conn->query($sql) === TRUE) {
	echo "Database changed successfully . <br>";
} else {
	echo "Error connecting database: " . $conn->error. " <br>";
}

// sql to create table
$sql = "CREATE TABLE Employee (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	gender VARCHAR(6),
	birthday DATE,
	address VARCHAR(60),
	city VARCHAR(15),
	province VARCHAR(15),
	email VARCHAR(60),
	weblink VARCHAR(60),
	reg_date TIMESTAMP,
	pay int(15)
	)";

if ($conn->query($sql) === TRUE) {
	echo "Employee created successfully";
} else {
	echo "Error creating table: " . $conn->error . "<br>";
}

//Insert using prepare
$stmt = $conn->prepare("INSERT INTO Employee (firstname, lastname, gender, birthday, address,
			city, province, email, weblink, pay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssi", $firstname, $lastname, $gender, $birthday, $address,
		$city, $province, $email, $weblink, $pay);

// set parameters and execute
$firstname = "Brijesh";
$lastname = "Prajapati";
$gender = "Male";
$birthday = 19950916;
$address = "1442 Lawrence Ave W";
$city = "Toronto";
$province = "Ontario";
$email = "prajapati.brijesh1995@gmail.com";
$weblink = "https://www.google.com";
$pay = 2300;
$stmt->execute();



//if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
/* } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }*/

	
?>