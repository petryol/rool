<?php
	define("dbserver", "c093um.forpsi.com");
    define("dbuser", "f101655");
    define("dbpass", "gs8U2aw");
    define("dbname", "f101655");

    global $db;
    $db = new PDO(
            "mysql:host=" .dbserver. ";dbname=" .dbname,dbuser,dbpass,
            array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"
            )
          );
          
?>