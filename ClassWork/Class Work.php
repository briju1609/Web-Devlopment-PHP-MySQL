<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Class Work</title>
</head>
<body>

<h1>Hello World</h1>
<h2><mark>Class - 1</mark></h2>
	
	<?php 
	
	$x = 5; $y = 10; //global
	
		echo "This is php!";
		$ex = "W3Schools PHP";
		echo "<br>";
		echo "Variable example -  " . $ex;
	
		function myTest() {
			global $x, $y;
			$y = $x + $y;
		}
		myTest();// run function
		// output the new value for variable $y
		echo "<br>". "Function will run and show output here: "  .$y;
		echo "<br>";
		
		//Global using Array
		echo "<h3>Global using Array</h3>";
		function myTest1() {
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTest1();
		echo "Array value: " . $z . "<br>";
		
		//Static
		echo "<h3>Static</h3>";
		function staticEx(){
			static $x = 0;
			echo $x;
			$x++;
		}
		staticEx();
		echo "<br>";
		staticEx();
		echo "<br>";
		staticEx();
		
		//Print
		print "<h3>Print Example</h3>" . "With Concat (to concat use .dot)";
		print "<br>";
		
		//Constants
		echo "<h3>Constants</h3>";
		define("GREETING", "Welcome to W3Schools.com!");
		echo GREETING;
		
		//Strings
		echo "<h3>Strings</h3>";
		echo "Output will be length of the string(Brijesh): ".strlen("Brijesh");
		
		//Array
		echo "<h3>Array</h3>";
		$arrayEx = array("C0707229","BRIJESH PRAJAPATI");
		echo "Name: " . $arrayEx[0] . " " . $arrayEx[1];
		
			//Indexed Arrays
			echo "<h4>Loop Through an Indexed Array</h4>";
			$cars = array("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);
			for($x = 0; $x < $arrlength; $x++) {
    		echo $cars[$x];
    		echo "<br>";
			}
		
			//Associative arrays
			echo "<h4>Loop Through an Associative Array</h4>";
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

			foreach($age as $x => $x_value) {
    		echo "Key=" . $x . ", Value=" . $x_value;
   			echo "<br>";
			}
			
			//Multi-dimensional Arrays
			echo "<h4>Multi-dimensional Arrays</h4>";
			$cars = array
			(
					array("Volvo",22,18),
					array("BMW",15,13),
					array("Saab",5,2),
					array("Land Rover",17,15)
			);
			
			echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
			echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
			echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
			echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
	
				//Multi-dimensional using for loop
			echo "<h4>Multi-dimensional Arrays using for loop</h4>";
				$cars = array
				(
					array("Volvo",22,18),
					array("BMW",15,13),
					array("Saab",5,2),
					array("Land Rover",17,15)
				);
			
				for ($row = 0; $row < 4; $row++) {
					echo "<p><b>Row number $row</b></p>";
					echo "<ul>";
						for ($col = 0; $col < 3; $col++) {
						echo "<li>".$cars[$row][$col]."</li>";
						}
					echo "</ul>";
				}
				
		//Sorting Arrays
		echo "<h3>Sorting Arrays</h3>";
		$cars = array("Volvo", "BMW", "Toyota");
		rsort($cars);
		//different methods of sorting arrays
		/* 
		 PHP - Sort Functions For Arrays
		In this chapter, we will go through the following PHP array sort functions:

		sort() - sort arrays in ascending order
		rsort() - sort arrays in descending order
		asort() - sort associative arrays in ascending order, according to the value
		ksort() - sort associative arrays in ascending order, according to the key
		arsort() - sort associative arrays in descending order, according to the value
		krsort() - sort associative arrays in descending order, according to the key
		*/
		
		$clength = count($cars);
		for($x = 0; $x < $clength; $x++) {
			echo $cars[$x];
			echo "<br>";
		}
		
		//Sorting Arrays
		echo "<h2><mark>Class - 2</mark></h2><h3>PHP Forms</h3>";
		
		echo "Files are in another form.html and welcome.php";
		
		
		//Date and Time - Oct 3
		echo "<h2><mark>Class - Oct 3</mark></h2><h3>Date and Time</h3>";
		date_default_timezone_set("America/New_York");
		echo "The time is " . date("h:i:sa");
		
		echo "Classes are in other file.";
		
		?>
	
</body>
</html>
