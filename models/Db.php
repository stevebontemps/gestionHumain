<?php

class Db{

    private static $instance = NULL;

    function __construct(){}

    function __clone(){}

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            // $servername = "localhost";
            // $username = "root";
            // $password = "root";
            // $myDB = "gestionhumain";
            
            //$pdo_option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            //self::$instance = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password); 
            
            self::$instance = new PDO("mysql:host=localhost;dbname=gestionhumain","root","root");

            //self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        }

        return self::$instance;
    }

}

