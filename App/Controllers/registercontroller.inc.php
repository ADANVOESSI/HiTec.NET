<?php
require "RegisterController.php";
if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["inscription"])) {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["c_pwd"];
$controller = new Controller($fname, $lname, $username, $email, $pwd, $confirm_pwd);
$controller->verifyControl();
} 
// else {
//     header("Location:../../public/index.php?msg=error");
//     exit();
// }