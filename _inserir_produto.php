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