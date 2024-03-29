<?php

class Session{

    private function __construct(){
        
    }

    public function checklogin(){
        if(isset($_SESSION["username"])){
            // echo "Session is set"; // for testing purposes
            common::console_log("Redireccionando...");
            header("Location: home");
        }
    }

    public static function logout(){
        // Initialize the session
        //session_start();
        
        // Unset all of the session variables
        $_SESSION = array();
        
        // Destroy the session.
        session_destroy();
        
        // Redirect to login page
        header("location: login");
        exit;
    }
 
    public static function registrar_usuario($username,$email,$password,$confirm_password){
        $msj_report = "";        
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = Usuarios::Find_fk("email",$email);

        if($password != $confirm_password){
            $msj_report = '<p class="bg-error">Las contraseñas no coinciden.</p>';
        }else{
            if (Count($query) > 0) {
                $msj_report = '<p class="error">La direccion de correo electronico ya esta registrada, intenta con otra direccion.</p>';
            }
        
            if (Count($query) == 0) {
                $query = DB::conexion()->prepare("INSERT INTO usuarios(USERNAME,PASSWD,EMAIL) VALUES  (:username,:password_hash,:email)") or die(mysql_error());
                $query->bindParam("username", $username, PDO::PARAM_STR);
                $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                $query->bindParam("email", $email, PDO::PARAM_STR);
                $result = $query->execute();
        
                if ($result) {
                    common::alert("Usuario registrado!");
                    $msj_report = '<p class="success">te registrarte con exito!</p>';
                    
                    header("location: home");
                } else {
                    common::alert("Error al registrar!");
                    $msj_report = '<p class="error">error al registrar!</p>';
                }
            }
    
        }

       
        return $msj_report;
    }

    public static function login($username,$password ){
        $msj_report = "";
 
        $result = Usuarios::Find($username);
        if (!$result) {
            $msj_report = '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result->passwd)) {
                $_SESSION['username'] = $result->username;
                common::alert("inicio de session correcto");
                $msj_report = '<p class="success">Inicio de session correcto!</p>';
            } else {
                common::alert("Usuario o contraseña incorrecto!");
                $msj_report = '<p class="error">Usuario o contraseña incorrecto!</p>';
            }
        }
    
        return $msj_report;
    }
}

?>