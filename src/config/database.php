<?php

$conn = null;

class Database{
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);

        try{
            $conn = new PDO(
               "mysql:host={$env['host']};dbname={$env['database']};charset=utf8",
                $env['username'],
                $env['password']
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public static function getResultFromQuery($sql){
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn = null;
        return $result;
    }
}