<?php
require "../Controllers/Connexion.php";

/**
 * 
 */
class UserModel extends Connexion {

    /**
     * $conn
     */
    public $conn;

    public $lastname;
    public $firstname;
    public $username;
    public $email;
    public $password;

    /**
     * verify()
     */
    public function verify($email) {
        $this->email = $email;

        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `hitech_bd`.users WHERE user_email = ?;";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetchAll();
        return $result;
    }

    /**
     * insertUser()
     */
    public function insertUser($lastname, $firstname, $username, $email, $password) {

        $conn = $this->connect();

        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;

        /**
         * $sql
         */
        $sql = "INSERT INTO `hitech_bd`.users VALUES(NULL, :lastname, :firstname, :username, :email, :passwordd, 'client')";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":lastname" => $this->lastname,
            ":firstname" => $this->firstname,
            ":username" => $this->username,
            ":email" => $this->email,
            ":passwordd" => password_hash($this->password, PASSWORD_DEFAULT) 
        ]);

    }
}