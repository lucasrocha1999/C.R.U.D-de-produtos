<?php   
    function getConnection(){
    $user = 'root';
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=crud;charset=utf8';

    try {
        $conn = new PDO($dsn, $user, $password);
        return $conn;
    } catch (PDOException $th) {
        echo 'Error: '.$th;
    }
}