<?php

//namespace app\models;

class Grupos extends Model{
	//debemos definir los campos que estan en al base de datos pero antes de eso la tabla.

	protected $table = "dcg_grupos";
    protected $PrimaryKey = "id_grupo";
    public $id_grupo; 
    public $nombre;
    public $descripcion; 
    public $enlace; 
    public $id_plataforma; 
    public $id_user; 
    public $id_cat; 
    public $content18; 
    public $views; 
    public $date;

	//no definimos el id porque ya esta en $primaryKey en Model.php si tuvieramos otro tipo de id si lo definimos aqui
	
}

/* 
en caso de usar el manejador alternativo:

class User extends Model{
	//debemos definir los campos que estan en al base de datos pero antes de eso la tabla.

	protected $table = "User";

	public $name;
	public $age;
	public $email;
	//no definimos el id porque ya esta en $primaryKey en Model.php si tuvieramos otro tipo de id si lo definimos aqui
	
}

en el controlador:

	$User = User::Find(1);
	Response::render("home",["name" => $User->name,"age" => $User->age,"email" =>$User->email]);

en la vista:

	<p>Hola <?= $name ?></p>

*/
?>