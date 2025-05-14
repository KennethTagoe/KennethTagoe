<?php
include_once 'classes1.php';
//create an object from the class of student
$obj=new student();
//assign values by calling the setter functions
$obj->setstudid(7777);
$obj->setFn('Chris Baidu');
$obj->setAge(32);

//display the output by calling
//the sette functions
echo'<h4 style="background:blue;color:yellow;
text-align:center;">';
echo'WELCOME TO STUDENT INFORMATION SYSTEM</h4><br>';
echo'<hr>';
echo'Student ID: '.$obj->getStudID().'<br>';
echo'Fullname: '.obj->getAge().' years old.<br>';
echo '<hr>';
?>