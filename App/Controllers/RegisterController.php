<?php
require "../Models/UserModel.php";
class Controller {

    /**
     * $usermodel
     */
    public $usermodel;

    public $lastname;
    public $firstname;
    public $username;
    public $email;
    public $password;
    public $confirm_password;

    public function __construct($lastname, $firstname, $username, $email, $password, $confirm_password) {
        $this->firstname = $this->sanitaze(ucwords($firstname));
        $this->lastname = $this->sanitaze(strtoupper($lastname));
        $this->username = $this->sanitaze(strtoupper($username));
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->usermodel = new UserModel();
    }
    
    /**
     * sanitaze()
     */
    public function sanitaze($data) {
        $reg = preg_replace("/\s+/", " ", $data);
        $reg = preg_replace("/^\s*/", "", $reg);
        $data = $reg;
        return $data;
    }

    /**
     * verifyControl()
     */
    public function verifyControl() {
      $res = $this->usermodel->verify($this->email);
      $count = count($res);
       if($count>0) {
        header("Location:../../public/index.php?msg=user_existant&lastname=$this->lastname&firstname=$this->firstname");
        exit();
        } 
        else {
            $this->emptyInputs();
            $this->verifyPassword();
            $this->verifyEmail();
               $insert = $this->usermodel->insertUser($this->lastname, $this->firstname, $this->username, $this->email, $this->password);
               header("Location:../../public/index.php");
               exit();
        }
    }

    public function emptyInputs() {

        if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password) || empty($this->confirm_password)){
            header("Location:../../public/index.php?msg=emptyinput&lastname=$this->lastname&firstname=$this->firstname&email=$this->email");
            exit();
        } 
            else{
            return false;
        }

    }

    /**
     * verifyPassword()
     */
    public function verifyPassword() {

        if ($this->password !== $this->confirm_password) {
            header("Location:../../public/index.php?msg=passwordNotMatch&lastname=$this->lastname&firstname=$this->firstname&username=$this->username&email=$this->email");
            exit();
       } 
       return false;

    }

    /**
     * verifyEmail()
     */
    public function verifyEmail() {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            header("Location:../../public/index.php?msg=users_not_good&lastname=$this->lastname&firstname=$this->firstname");
            exit();
        }
        return false;
        
    }

}