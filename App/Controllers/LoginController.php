<?php
require "../Models/UserModel.php";
class LoginController {

    /**
     * $usermodel
     */
    public $usermodel;

    public $email;
    public $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
        $this->usermodel = new UserModel();
    }

    /**
     * verifyControl()
     */
    public function verifyLoginControl() {
      $res = $this->usermodel->verify($this->email);
      $count = count($res);

       if($count>0) {
           $pwd = password_verify($this->password, $res[0]["users_password"]);

           if($pwd === true & $res[0]["users_role"] === "admin") {
               header("Location:../../public/index.php?msg=dashboard_admin");
               exit();
            } 

            elseif($pwd === true & $res[0]["users_role"] !== "admin") {
                header("Location:../../public/index.php?msg=page_customer");
                exit();
            }

             else {
               header("Location:../../public/index.php?msg=password_error&email=$this->email");
               exit();
           }
        } 
        else {
            header("Location:../../public/index.php?msg=user_not_found&email=$this->email");
            exit();
        }
    }
}