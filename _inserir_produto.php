<?php

include "conexao.php";

$nro = $_POST['nro'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$fornecedor = $_POST['fornecedor'];

// echo $nro_produto."<br/>"; 
// echo $nome_produro."<br/>";
// echo $categotia_produto."<br/>";
// echo $quantidade_produto."<br/>";
// echo $fornecedor_produto."<br/>";


$sql = "INSERT INTO `estoque`( `nro`, `nome`, `categoria`, `qtd` ,`fornecedor`) VALUES ($nro,'$nome','$categoria',$qtd,'$fornecedor')";

// INSERT INTO `estoque`( `nro`, `nome`, `categoria`, `qtd` ,`fornecedor`) VALUES (111,'Tv 50','Periféricos',22,'Fornecedor A')

$inserir = mysqli_query($conexao,$sql);

?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="style.css">

<div class="container ">

    <div class="w-50 mx-auto">


    <h4 class="text-center mt-4">Produto Adicionado com sucesso!</h4>

<a href="index.php"  class="btn  btn-primary mt-4">Cadastrar novo produto</a>

    </div>

    
</div>