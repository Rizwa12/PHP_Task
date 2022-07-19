<?php
//get method
// var_dump($_GET); // default function to dump all values in array

// echo $_GET['name'];
// echo "<br>";
// echo $_GET['fname'];
 //echo $_get['name'];
 //post method
 echo "Name : ";
 echo $_POST['number1'];
 echo "<br>";
 echo "Father Name :";
 echo $_POST['number2'];
 $result = sum(number1,number2);
 echo $result;
 
 function sum($a, $b)
 {
    
    $r = $a+$b;
    return $r;

 }





?>