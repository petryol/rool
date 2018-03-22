<?php
	define("dbserver", "localhost");//"c093um.forpsi.com");
    define("dbuser", "root");//"f101655"); //nick
    define("dbpass", "");//"gs8U2aw"); //heslo
    define("dbname", "test");//"f101655"); //nickznova

    global $db;
    $db = new PDO(
            "mysql:host=" .dbserver. ";dbname=" .dbname,dbuser,dbpass,
            array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"
            )
          );
          
?>