<?php // header
include_once 'includes/header.php';
// navbar
include_once 'includes/navbar.php';
?>
<br>
<!-- Container -->
<div class = "container">
    <div class = "col-sm-7" style = "height: 650px; background: url('')">
        <div class="page-header">
            <h2>Cadastrar Produto</h1>
        </div>
        <form style = "margin-top: 2em;" action="../controller/add.php" method="POST" enctype="multipart/form-data">
            <div class = "form-group" style ="text-align: left;">
                <label for="nome">Nome</label>
                <input type = "text" class = "form-control" name="nome" id = "nome" placeholder = "Ex: Arroz" required/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="preco">Preço</label>
                <input type = "text" class = "form-control" name="preco" id = "preco" placeholder = "Ex: R$ 2.50" required/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="descricao">Descrição</label>
                <input type = "text" class = "form-control" name="descricao" id = "descricao" placeholder = "Ex: Caracteristica do produto" required/>
            </div>
            <div class = "form-group" style ="text-align: left;">
                <label for="image">Imagem</label>
                <input type = "file" class = "btn btn-light btn-sm " name="image" id="image"  />
            </div>
            <button type = "submit" class = "btn btn-secondary" name="btn">
                Cadastrar
            </button>     
        </form>
    </div>
</div>
<?php
// footer
include_once 'includes/footer.php';
?>