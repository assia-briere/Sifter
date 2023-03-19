<?php 
session_start();

class Connection{
    protected function connect(){
        $config = [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'db' => 'App',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
        ];

        try {
            $connection = "mysql:host={$config['host']};dbname={$config['db']};charset=utf8mb4";
            $pdo = new PDO($connection, $config['user'], $config['password'], $config['options']);
            echo "gg";
            return $pdo;
        } catch (PDOException $e) {
            die("Error connection: " . $e->getMessage());
        }
    }
}

$connection = new connect();
?>