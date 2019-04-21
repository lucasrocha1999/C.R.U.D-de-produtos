<?php
include_once '../controller/connect.php';

class produtosDAO{
private $nome;
private $preco;
private $descrisao;
private $connect;

public function __construct(){
    $this->connect = new Connect();
}
}

?>