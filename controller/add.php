<?php
include_once 'connect.php';

if (isset($_POST['btn'])): // Upload da imagem
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    if (isset($_FILES['image'])):
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

        if (empty($errors) == true) {
            if (move_uploaded_file($file_tmp, $dirUploads. DIRECTORY_SEPARATOR . $file_name)):
                echo "Success";
            else:
                echo "Error";
            endif;
        }else {
            print_r($errors);
        }
    endif;
endif;
$connect = getConnection(); // Inserindo os dados no banco.
$sql = "INSERT INTO produtos(nome,preco,descricao,imagem) VALUES(?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $preco);
$stmt->bindParam(3, $descricao);
$stmt->bindParam(4, $file_name);

if ($stmt->execute()) {
    header("Location: ../view/listar.php");
} else {
    echo 'Erro ao salvar!';
}
?>