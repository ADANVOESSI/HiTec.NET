<?php

class Connexion {
    public function connect() {
        /**
         * $DB_HOST 
         */
        $DB_HOST = "localhost";
        /**
         * $DB_NAME
         */
        $DB_NAME = "hitech_bd";
        /**
         * $USERNAME
         */
        $USERNAME = "root";
        /**
         * $PASSWORD
         */
        $PASSWORD = "";
        $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";
        try {
            /**
             * 
             */
            $conn = new PDO($dsn, $USERNAME, $PASSWORD);
            return $conn;
        } catch(PDOException $e) {
            die('Erreur connexion:'.$e->getMessage());
        }
    }
}