<?php

    $lastname = ""; $firstname = ""; $username = ""; $email = ""; $pwd = ""; $confirm_pwd = "";
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    };
    
    $db_name = "hitech";
    $_server = "mysql:host=localhost;dbname=$db_name";
    $db_username = "root";
    $db_password = "";

        $lastname = test_input($_POST["lastname"]); 
        $firstname = test_input($_POST["firstname"]); 
        $username = test_input($_POST["username"]); 
        $email = test_input($_POST["email"]); 
        $pwd = test_input($_POST["pwd"]); 
        $confirm_pwd = test_input($_POST["c_pwd"]); 

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if(!empty($_POST["lastname"]) || !empty($_POST["firstname"]) || !empty($_POST["username"]) || !empty($_POST["email"]) || !empty($_POST["pwd"]) || !empty($_POST["c_pwd"]) || $pwd === $confirm_pwd){

                try {
                    
                    $conn = new PDO($_server, $db_username, $db_password);
                    $sql = "INSERT INTO users (user_lastname, user_firstname, 	user_username, user_email, user_password) values (:lastname, :firstname, :username, :email, :passwordd)";
                    $sql = $conn->prepare($sql);
                    $sql->execute([
                        ":lastname" => $lastname,
                        ":firstname" => $firstname,
                        ":username" => $username,
                        ":email" => $email,
                        ":passwordd" => $pwd
                    ]);
                    
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            
        };
    
?>