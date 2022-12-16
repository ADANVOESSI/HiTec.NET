<?php
require "LoginController.php";

if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

$logincontroller = new LoginController($email, $pwd);
$logincontroller->verifyLoginControl();
} 
else {
    header("Location:../../public/index.php?msg=error");
    exit();
}