<?php
Router::add("home","MainController","Main");
Router::add("login","LoginController","Main");
Router::add("logout","LoginController","logout");
Router::add("about","AboutController","Main");
Router::add("registrar","RegistrarController","Main");
Router::add("Whatsapp","RedesController","Whatsapp");
Router::add("Facebook","RedesController","Facebook");
Router::add("Telegram","RedesController","Telegram");
Router::add("Discord","RedesController","Telegram");
Router::add("publicar","RedesController","publicar");
?>