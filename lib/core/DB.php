<?php
//manejador de base de datos alternativo a illuminate
class DB {
	private function __contruct(){
		
	}
	public static function Query($sql, $params = []){
		$statement = static::Conexion()->prepare($sql) or die("mysql_error()");
		$statement -> execute($params);
		$result = $statement->fetchAll();
		return $result;
	}
	private static function Conexion(){
		try {
			return $connection = new PDO("mysql:host=localhost;dbname=dcgrupos","root","") ;
        } catch (PDOException $e) {
            exit("Error: " . $e->getMessage());
        }
	}
}
?>