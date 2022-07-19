
//get method
// var_dump($_GET); // default function to dump all values in array

// echo $_GET['name'];
// echo "<br>";
// echo $_GET['fname'];
 //echo $_get['name'];
 //post method
//  echo "Number 1 : ";
//  echo $_POST['number1'];
//  echo "<br>";
//  echo "Number 2 :";
//  echo $_POST['number2'];
//  $n1 = $_POST['number1'];
//  $n2 = $_POST['number2'];
//  $result = sum($n1,$n2); // calling function
 
//  echo "<br> sum=".$result;
 
//  function sum($a, $b) //create function 
//  {
    
//     $r = $a+$b;
//     return $r;

//  }
 //
// users
//  username
//  email
//  password
 //
//  select * from users;
//  update users set username="newvalue" where email = "xyz@gamil.com";
//  Delete from users where email = "xyz@gmail.com";
//  insert into users (username,email,password) values("ali","a@gmail.com","123");
// class student
// {
//     private:
//     $a,$b;
//     public:
//     // function sum($c,$d)
//     // {
//     //     function body;
//     // }
//     student()
//     {

//     }

// }


// class std{
//     var $r;// public
//     function __construct(){

//     }

//     function std(){

//     }
// }
// for($i=1;$i<=10;$i++)
// {
//     echo "welcome";
// }
//  while($i<=20)
//  {
//     echo "hello";
//     $i++;
//  }
<?php
class Fruits{
    //properties
    public $name;
    public $color;
    //Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}
$apple = new Fruit();
$banana = new Fruits();
$apple->set_name('Apple');
$banana->set-name('Banana');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>