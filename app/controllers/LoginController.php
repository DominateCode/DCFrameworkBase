<?php

	use app\models\Usuarios;
    
class LoginController
{
    public function Main(){
        $register = "";
        Session::checklogin();
        if (isset($_POST["username"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $register = Session::login($username,$password);
        }
        Response::render("login",["login_msj" => $register]);
    }
    public function logout(){
        Session::logout();
    }
}

?>