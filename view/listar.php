<?php
// header
include_once 'includes/header.php';
// navbar
include_once 'includes/navbar.php';
// Conexão
include_once '../controller/connect.php';
?>
<br>
<div class="container">
    <div class="page-header">
        <h2>Lista de Produtos</h2>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Produtos</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição</th>
      <th scope="col">Imagem</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $connect = getConnection();
    $sql = "SELECT * FROM produtos";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $value): // Exibindo o produto para atualizar.
  ?>
    <tr>
      <th scope="row"><?php echo $value['id'];?></th>
      <td><?php echo $value['nome'];?></td>
      <td><?php echo $value['preco'];?></td>
      <td><?php echo $value['descricao'];?></td>
      <td><img src="../controller/upload/<?php echo $value['imagem'];?>" alt="img" width="50px" height="50px"></td>
      <td ><a href="edit.php?id=<?php echo $value['id'];?>" class="btn btn-warning">Editar</a></td>
      <td><a onclick="return confirm('Deseja excluir o produto?')" href="../controller/delete.php?id=<?php echo $value['id'];?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>  
</div>
<?php
// footer
include_once 'includes/footer.php';
?>