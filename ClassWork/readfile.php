<?php


	//echo readfile("brijesh.txt") . "<br>";
	
	$myfile = fopen("brijesh.txt", "r") or die("Unable to open file!");
	//echo fread($myfile,filesize("brijesh.txt"));
	echo "<pre>" . fgets($myfile) . "</pre>";
	fclose($myfile);
	
	//feof
	echo "<br>";
	$myfile = fopen("brijesh.txt", "r") or die("Unable to open file!");
	// Output one line until end-of-file
	while(!feof($myfile)) {
		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
	echo "<br>";
	
	//fgets
	$myfile = fopen("brijesh.txt", "r") or die("Unable to open file!");
	// Output one character until end-of-file
	while(!feof($myfile)) {
		echo fgetc($myfile);
	}
	fclose($myfile);
	
	
	//File create/write
	$myfile = fopen("brijesh.txt", "w") or die("Unable to open file!");
	$txt = "Brijesh";
	fwrite($myfile, $txt);
	$txt = "Prajapati";
	fwrite($myfile, $txt);
	fclose($myfile);
	
?>