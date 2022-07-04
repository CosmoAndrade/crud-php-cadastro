<?php

include "conexao.php";

 $id = $_GET['id'];




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title>Crud PHP</title>
</head>
<body>


    <div class="container ">

        <h2 class="text-center mt-4 mb-3">Formulário de Cadastro</h2>

    
        <form action="_atualizar_produto.php"  method="post" class=" w-50  mx-auto " >

        <?php

            $sql = "SELECT * FROM `estoque` WHERE id = $id";
            $buscar = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($buscar)) {
                
                $id = $array['id'];
                $nro = $array['nro'];
                $nome = $array['nome'];
                $categoria = $array['categoria'];
                $qtd = $array['qtd'];
                $fornecedor = $array['fornecedor'];
  
          
            

        ?>


            <div class="form-group">
                <label for="nro">Nro Produto</label>
             <input id="nro" class="form-control" type="number" name="nro" value="<?php echo $nro ?>" disabled>
        <input id="nro" class="form-control" type="number" name="id" value="<?php echo $id ?>" style="display: none;">
    
    
            </div>

            <div class="form-group mt-3">
                <label for="nome">Nome Produto</label>
                <input id="nome" class="form-control" type="text" name="nome" value="<?php echo $nome ?>" >
    
            </div>

            <div class="form-group mt-3">
                <label for="categoria">Categoria</label>
                <select id="categoria" class="form-select" name="categoria" >
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="qtd">Quantidade</label>
                <input id="qtd" class="form-control" type="number" name="qtd" value="<?php echo $qtd ?>" >
    
            </div>

            <div class="form-group mt-3">
                <label for="categoria">Fornecedor</label>
                <select id="fornecedor" class="form-select" name="fornecedor" >
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                   
                </select>
            </div>


            <button type="submit" class="btn btn-success mt-3">Atualizar</button>

            <?php  } ?>
        </form>

       

       
        
    </div>
    
</body>
</html>