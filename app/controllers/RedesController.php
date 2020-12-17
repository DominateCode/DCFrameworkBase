<?php
    //namespace app\controllers;

    // use app\models\categorias;
    // use app\models\Grupos;
    // use app\models\Plataforma;
    //use \Response;
    //use \themes;
    
class RedesController
{   
    public function categorias(){
        $categorias = Categorias::Select();
        return $categorias;
    }
    public function plataformas(){
        $plataformas = plataforma::Select();
        return $plataformas;
    }
    public function Whatsapp(){
        $grupos = Grupos::Find_fk("id_plataforma","1");
        Response::render("whatsapp",["grupos" => $grupos,"categorias" => static::categorias()]);
    }
    public function Facebook(){
        Response::render("facebook",[]);
    }
    public function Telegram(){
        Response::render("telegram",[]);
    }
    public function Discord(){
        Response::render("discord",[]);
    }
    public function Publicar(){
        if(isset($_POST['nombre'])){
            common::console_log(Usuarios::Find($_SESSION["username"]));
            $adult = (isset($_POST['adult'])) ? "1" : "0";
            $id_user = (isset($_SESSION["username"])) ? Usuarios::Find($_SESSION["username"])->id_user : "'NULL'" ;
            Grupos::Insert(
                "`id_grupo`, `nombre`, `descripcion`, `enlace`, `id_plataforma`, `id_user`, `id_cat`, `content18`, `views`, `date`",
                "''".",'".$_POST['nombre']."','".$_POST['descripcion']."','".$_POST['link']."','".$_POST['plataforma']."','".$id_user."','".$_POST['categoria']."','".$adult."','0'".",''");
        }
            Response::render("publicar",["plataformas" => static::plataformas(),"categorias" => static::categorias()]);
    }
}

?>