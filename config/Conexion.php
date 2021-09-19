<?php
class Conexion{
    public static function getConexion(){
        // $database_username = 'soriano';
        // $database_password = 'Csoriano.12';
        // $dbname="desarrolloweb";
        // $dsn = 'mysql:host=localhost;dbname=' . $dbname;
        $conexion = null;
        $link='mysql:host=localhost;dbname=desarrolloweb';
        $user='soriano';
        $password='Csoriano.12';

        try{
            //$conexion = new PDO($dsn, $database_username, $database_password );
            $conexion = new PDO($link, $user, $password);
        }catch(Exception $e){
                echo $e;
                die("error " . $e->getMessage());
        }
        return $conexion;
    }
}
