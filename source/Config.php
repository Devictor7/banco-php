<?php

define("ROOT", "http://localhost/banco-php");

define("DATABASE", [
    "host"=>"localhost",
    "db_name"=>"usuario",
    "db_user"=>"root",
    "db_password"=>""
]);
function connect():PDO
{
    try {
          $conn = new PDO("mysql:host=".DATABASE["host"].";dbname=".DATABASE["db_name"],DATABASE["db_user"],DATABASE["db_password"],[
              PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
              PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
              PDO::ATTR_CASE=>PDO::CASE_NATURAL
          ]); 
            return $conn;
    } catch (PDOException $e) {
        echo "Erro de Conexão: ".$e->getMessage();
    }
}