<?php
	define("dbserver", "127.0.0.1");
    define("dbuser", "root");
    define("dbpass", "");
    define("dbname", "sneakerx");

    global $db;
    $db = new PDO(
            "mysql:host=" .dbserver. ";dbname=" .dbname,dbuser,dbpass,
            array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"
            )
          );
          
?>