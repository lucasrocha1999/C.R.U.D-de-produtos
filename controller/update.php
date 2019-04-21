<?php

include_once 'connect.php';

if (isset($_FILES['image'])): // Upload da imagem
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];

    if ($file_size > 2097152):
        $errors[] = 'Arquivo excede 2 MB';
    endif;

    $dirUploads = "upload";
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    if (empty($errors) == true):
        if (move_uploaded_file($file_tmp, $dirUploads. DIRECTORY_SEPARATOR . $file_name)):
            echo "Success";
        else:
            echo "Error";
        endif;
    else:
        print_r($errors);
    endif;
endif;

if(isset($_POST['btn-edit'])): // Updade dos dados no banco.
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $connect = getConnection();
    $sql = "UPDATE produtos SET nome = ?, preco = ?, descricao = ?, imagem = ? WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$preco);
    $stmt->bindParam(3,$descricao);
    $stmt->bindParam(4,$file_name);
    $stmt->bindParam(5,$id);

    if($stmt->execute()){
        header('Location: ../view/listar.php');
    }else{
        echo "Erro ao atualizar";
    }                                
endif;
?>