<?php

include "conexao.php";

$id = $_POST['id'];

//$nro = $_POST['nro'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nome`='$nome',`categoria`='$categoria',`qtd`=$qtd,`fornecedor`='$fornecedor' WHERE id = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
 <link rel="stylesheet" href="style.css">

 <div class="container w-50 mx-auto">


    <h3 class="text-center">Atualizado com sucesso!</h3>

    <a href="listar_produtos.php" class="btn btn-warning mt-4" >Voltar</a>


 </div>