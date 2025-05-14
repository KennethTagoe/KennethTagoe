<?php
//constructor is a special that is
//automatically called when an object is created
//its main purposes is to assign values to objects.

//Example
class product
{
var product_id;
var product_name;
var quantity;
var price;
//contructor here:
public function_construct($val1,$val2,$val3,$val4)
{
      $this-> product_id=$val1;
      $this-> product_name=$val2;
      $this-> quantity=$val3;
      $this->price=$val4;
}
//destructor is used to destroy object values when the program
//example:
function__destruct()
{	  
    echo' I am the destructor,<br>';
    echo' and I am here to destroy objects<br>';
}
function displayoutput()
{
    echo 'Product_ID: '.$this->product_id.'<br>';
    echo 'Product_Name: '.$this->product_name.'<br>';
    echo 'Qantity: '.$this->quantity.'<br>';
    echo 'Product Price: '.$this->price.' Cedis<br>';
}
}
//create a new object...
$obj=new product(001,'Meat-pie',2,50);
$obj->displayOutput();
//$obj2=new product();
//$obj3=new product();
//$obj4=new product();
?>