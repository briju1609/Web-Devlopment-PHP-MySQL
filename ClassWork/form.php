<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Form</title>
<style>
	.error{
		color: red;
	}
</style>
</head>
<body>

		<?php 
		
			$name = $email = $address = $linkedin = $gender = $subscribe = "";
			$nameErr = $emailErr = $addressErr = $linkedinErr = $genderErr =  "";
		
			//Gender - Radio
			$r1 = $r2 = "";
			$radErr="";
			
			$language = array();
			
			
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					
					//Name
					if(isset($_POST["name"])){
						if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
							$nameErr = "Only letters and white space allowed";
						}
						else{
						$name = $_POST["name"];
						}
					}
					if (empty($_POST["name"])){
						$nameErr = "Please enter name!";
					}
				
					//Email
					if(isset($_POST["email"])){
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$emailErr = "Invalid email format";
						}else{
						$email = $_POST["email"];
						}
					}
					
					if (empty($_POST["email"])){
						$emailErr = "Please enter email!";
					}
				
					//Addres
					if(isset($_POST["address"])){
						$address = $_POST["address"];
					}
					if (empty($_POST["address"])){
						$addressErr = "Please enter address!";
					}
					
					//LinkedIn
					if(isset($_POST["linkedin"])){
						if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedin)) {
							$linkedinErr = "Invalid URL";
						}else{
						$linkedin = $_POST["linkedin"];
						}
					}
					if (empty($_POST["address"])){
						$linkedinErr = "Please enter LinkedIn URL!";
					}
					
					//Gender
					if(isset($_POST["gender"])){
						if($_POST["gender"]=="female"){
							$r1="Checked";
						}
						else if($_POST["gender"]=="male"){
							$r2="Checked";
						}
					}
					else {
						$radErr="Please select any one!";
					}
					
					//Select Option (DropDown)
					if(isset($_POST["language"])){
						$language = $_POST["language"];
						}
						
					//Subscribe
					if(isset($_POST["subscribe"])){
						
					}
						
				}
		?>

	<!--  Class 2 -->
	<!-- PHP Forms -->
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h3>Form</h3>
		<table>
		
		<!-- Name -->
		<tr>
		<td><label for="name">Name:</label></td>
		<td><input type="text" name="name"
		 value="<?php echo htmlspecialchars($name); ?>"> </td>
		<td><span class="error"> <?php echo $nameErr;?> </span></td>
		</tr>
		
		<!-- E-mail -->
		<tr>
		<td>E-mail:</td> 
		<td><input type="text" name="email"  
		value="<?php echo htmlspecialchars($email); ?>"></td>
		<td><span class="error"> <?php echo $emailErr;?> </span></td>
		</tr>
		
		<!-- Address -->
		<tr>
		<td>Address:</td> 
		<td><input type="textarea" name="address" rows="5" cols="40" 
		value="<?php echo htmlspecialchars($address); ?>"></td>
		<td><span class="error"> <?php echo $addressErr;?> </span></td>
		</tr>
		
		<!-- LinkedIn -->
		<tr>
		<td>LinkedIn:</td> 
		<td><input type="text" name="linkedin" 
		value="<?php echo htmlspecialchars($linkedin); ?>"></td>
		<td><span class="error"> <?php echo $linkedinErr;?> </span></td>
		</tr>
		
		
		<!-- Gender -->
		<tr>
		<td>Gender:</td>
		<td>
		<input type="radio" name="gender" 
		value="female" <?php echo htmlspecialchars($r1); ?> >Female
		<input type="radio" name="gender" 
		value="male" <?php echo htmlspecialchars($r2); ?> >Male
		</td>
		<td><span class="error"> <?php echo $radErr;?> </span></td>
		</tr>
		
		<!-- Tech -->
		<tr>
		<td>Select Tech...</td>
		<td>
		<select name="language[]">
		<?php 
		$languageList = array("PHP","Java","Android","iOS");
		$cnt = count($languageList);
			
		for ($i=0; $i<$cnt; $i++){
			echo '<option value=""' . $languageList[$i] . "";
		
			if (in_array($languageList[$i], $language)){
				echo "Selected";
			}
		
			echo '>' . $languageList[$i] . '</option>';
		}
		?>
		<!--  
  			<option value="php">PHP</option>
  			<option value="java">Java</option>
  			<option value="ios">iOS</option>
  			<option value="android">Android</option>
  		-->
		</select></td>
		<td></td>
		</tr>
		
		<!-- Subscribe -->
		<tr>
		<td>Click here to Subscribe!</td>
		<td><input type="checkbox" name="subscribe" value="subscribe"></td>
		</tr>
		
		<!-- Pay -->
		<tr>
		<td>For how much duration <br> you would like to pay?</td>
		<td>
		<input type="radio" name="pay" value="3months">3 Months
		<input type="radio" name="pay" value="6months">6 Months
		<input type="radio" name="pay" value="12months">12 Months
		</td>
		</tr>
		
		<!-- Submit -->
		<tr>
		<td align="center"><input type="submit"></td>
		</tr>
		</table>
		</form>
		
		
</body>
</html>