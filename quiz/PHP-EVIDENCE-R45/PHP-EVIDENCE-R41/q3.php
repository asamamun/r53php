<?php
class student{
	public $sid;
	public $sname;
	public $sbatch;
	function __construct($id,$name,$batch){
		$this->sid = $id;
		$this->sname = $name;
		$this->sbatch = $batch;
		$this->result();
		}
	function result(){
		echo "Student id: ".$this->sid.",<br>Student name: ".$this->sname.",<br>Student batch: ".$this->sbatch;
		}	
	}
	
//$file = fopen("user.txt","r")	
$myfileinfo = file("user.txt");
$line = $myfileinfo[0];
list($i,$n,$b) = explode(",",$line);
$myobject = new student($i,$n,$b);
?>