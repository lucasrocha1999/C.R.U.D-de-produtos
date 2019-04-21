<?php
//Conexão
include_once 'connect.php';

if(isset($_GET['id'])):
    $id = $_GET['id'];
    $connect = getConnection();

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){
        header('Location: ../view/listar.php');
    }else{
        echo "Erro ao deletar!";
    }
endif;
?>