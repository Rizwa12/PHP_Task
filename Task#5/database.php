<?php
 class DB{
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost","root","","user_database");

    }

    function signUp($u,$e,$p)
    {
        $query = "insert into users(name,email,password) values('$u','$e','$p')";
        mysqli_query($this->con,$query);

    }
 }
 $database = new DB;
?>