
<?php
include 'database.php';
 class user{
    function __construct()
    { 
     if(isset($_POST["form_signup"])){
        $this->Signup();
     }
     
    }
    function Signup()
    {
    global $database;
    echo "User Name:";
    echo $_POST['name'];
    echo"<br>";
    echo "Email:";
    echo $_POST['email'];
    echo"<br>";
    echo "Password:";
    echo $_POST['password'];

    $database->signUp($_POST['name'],$_POST['email'],$_POST['password']);
    }


 }

$obj = new user();


?>