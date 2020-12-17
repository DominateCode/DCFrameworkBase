<?php

//namespace app\models;

class Plataforma extends Model{
	//debemos definir los campos que estan en al base de datos pero antes de eso la tabla.

	protected $table = "plataforma";
    protected $PrimaryKey = "id_plataforma";
    public $nombre;
    public $enlace;
    
	//no definimos el id porque ya esta en $primaryKey en Model.php si tuvieramos otro tipo de id si lo definimos aqui
	
}

?>