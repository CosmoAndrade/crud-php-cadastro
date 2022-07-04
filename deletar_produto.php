<?php

include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id = $id";

$deletar = mysqli_query($conexao,$sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
 <link rel="stylesheet" href="style.css">

 <div class="container w-50 mx-auto">


    <h3 class="text-center">Deletado com sucesso!</h3>

    <a href="listar_produtos.php" class="btn btn-danger mt-4" >Voltar</a>


 </div>