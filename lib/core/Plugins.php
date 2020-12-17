<?php
class Plugins{

    public function __construct(){
        
    }

    public function load_plugins(){
        $Plugins = common::FindFiles(PLUGINS);
        $MethodPlugin = 'IniciarPlugin';
        foreach($Plugins as $PluginName){
            require PLUGINS.$PluginName.".php";
            $plugin = new $PluginName();    
            $plugin->$MethodPlugin();
        }
        
   }
}


?>