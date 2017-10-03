<?php
	
	//Class
	class Student {
		/* Member variables */
		var $sid;
		var $sname;

		/* Member functions */
		function __construct(){
			echo "<h1>Hello</h1>";
		}
		
		function setData($sid,$sname){
			$this->sid = $sid;
			$this->sname = $sname;
		}

		function getData(){
			 echo $this->sid ."<br/>";
			 echo $this->sname;
			//return array($this->sid, $this->sname);
		}
		
		function __destruct(){
			echo "<h1>Bye!</h1>";
		}
		
	}
	
	$s1 = new Student();
	$s1->sid = 100;
	$s1->sname = "Brijesh" . "<br>";
	
	echo "<br>" . $s1->sid;
	echo "<br>" . $s1->sname;
	echo "<br>";
	
	$s1->setData(200,"Prajapati");
	$s1->getData();
	
	echo "<br>";
	
	
	//Creating Employee
	class Employee {
		/* Member variables */
		var $Eid;
		var $Ename;
	
		/* Member functions */
		function __construct(){
			echo "<h1>Constructor</h1>";
		}
	
		function setData($Eid,$Ename){
			$this->Eid = $Eid;
			$this->Ename = $Ename;
		}
	
		function getData(){
			echo $this->Eid ."<br/>";
			echo $this->Ename;
			//return array($this->sid, $this->sname);
		}
	
		function __destruct(){
			echo "<h1>Destructor</h1>";
		}
	
	}
	
	$E1 = new Employee();
	$E1->Eid = 100;
	$E1->Ename = "Brijesh" . "<br>";
	
	echo "<br>" . $E1->Eid;
	echo "<br>" . $E1->Ename;
	echo "<br>";
	
	$E1->setData(200,"Prajapati");
	$E1->getData();
	
	class Salary extends Employee {
   /*
   		function Employe::(setData($Eid, $Ename) {
     		$this->Eid = $Eid;
      		$this->Ename = $Ename;
   		}
   		
   		function getData($Eid, $Ename) {
   			echo $this->Eid ."<br/>";
			echo $this->Ename;
   		}
	*/
	}
	
	//$E1 = new Employee();
	$Sal = new Salary();
	
	$Sal->setData(3000, "Change");
	$Sal->getData();
	
	
	//OOP Concepts
	
	
	
?>