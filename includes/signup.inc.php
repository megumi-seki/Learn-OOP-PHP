<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    //the order matters: parent class goes first and child class second
    require_once "../Class/Dbh.php";
    require_once "..?Classes/Signup.php";

    $signup = new Signup($username, $pwd);
    $signup->signupUser();
}