<?php
// header
include_once 'includes/header.php';
// navbar
include_once 'includes/navbar.php';
// conexão
include_once '../controller/connect.php';

if(isset($_GET['id'])):
    $id = $_GET['id'];
    $connect = getConnection();
    $sql = "SELECT * FROM produtos WHERE id= $id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_BOTH);
endif;
?>
<br>
<!-- Container -->
<div class = "container">
    <div class = "col-sm-7" style = "height: 650px; background: url('')">
        <div class="page-header">
            <h2>Editar Produto</h1>
        </div>     
        <form style = "margin-top: 2em;" action="../controller/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id'];?>">
            <div class = "form-group" style ="text-align: left;">
                <label for="nome">Nome</label>
                <input type = "text" class = "form-control" name="nome" id = "nome" value="<?php echo $result['nome']; ?>"/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="preco">Preço</label> 
                <input type = "text" class = "form-control" name="preco" id = "preco" value="<?php echo $result['preco']; ?>"/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="descricao">Descrição</label>
                <input type = "text" class = "form-control" name="descricao" id = "descricao" value="<?php echo $result['descricao']; ?>"/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="image">Imagem</label>
                <input type = "file" class = "btn btn-light btn-sm " name="image" id = "image"  />
            </div>
            <button type = "submit" class = "btn btn-secondary" name="btn-edit">
                Atualizar
            </button>     
        </form>
    </div>
</div>
<?php
// footer
include_once '../view/includes/footer.php';
?>