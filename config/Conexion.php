<?php
class Conexion{
    public static function getConexion(){
        $database_username = 'root';
        $database_password = 'Anhn2007';
        $dbname="desarrolloweb";
        $dsn = 'mysql:host=localhost;dbname=' . $dbname;
        // $conexion = null;
        // $link='mysql:host=localhost:3307;dbname=desarrolloweb';
        // $user='root';
        // $password='';

        try{
            $conexion = new PDO($dsn, $database_username, $database_password );
            //$conexion = new PDO($link, $user, $password);
        }catch(Exception $e){
                echo $e;
                die("error " . $e->getMessage());
        }
        return $conexion;
    }
}
