<?php
//create a class of student
//to have 3 data members 
class student 
{ 
       //data members..
var $studentid;
private $fullname;
private $age;
//setter functions...
function setstudid($val)
{
	$this->studentid=$val;
}
function setFn ($val)
{
	$this->fullname =$val;
}
function setAge($val)														
{
	$this->age=$val;
}
//getter functions--get-output 
function getStudID()
{
	return $this->studentid;
}
function getFn()
{
	return $this ->fullname ;
}
function getAge ()
{
	return $this ->age;
}
}
?>
