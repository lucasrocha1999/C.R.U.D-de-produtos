<?php // header 
include_once 'includes/header.php';
?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">C.R.U.D</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="listar.php">Lista de Produtos</a>
                <a class="nav-item nav-link" href="cadastrar.php">Cadastro de Produtos</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>C.R.U.D - de Produtos - Aplicação em MVC em PHP</h3>
            </div>
        </div>
    </div>
<?php
// footer
include_once 'includes/footer.php';
?>