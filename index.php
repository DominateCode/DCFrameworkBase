<?php
	/**
	 * @title          
	 * @desc           
	 *
	 * @author         Andres David Bolaños <andabopa@gmail.com>
	 * @copyright     
	 * @license        
	 * @link           https://dominatecode-co.com
	 * @package        
	 */

	dirname(__DIR__); //todas las rutas van a ser relativas a la raiz del sitio
	
	define("CORE_PATH","lib/core/");
	define("APP_PATH","app/");
	define("APP_IMG","inc/img/");
	define("THEMES","inc/themes/");
	define("PLUGINS","inc/Plugins/");
	define("LIB_PATH","lib/");
	
	require CORE_PATH."autoloader.php";
	require "http/Routes.php";	
	
	$app = new App();
?>