

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Listar produtos</title>
</head>

<body>

  <div class="container">

    <h3 class="text-center mt-4 mb-4">Lista de Produtos</h3>

    <div class="w-70 mx-auto">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">NRO</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>

          </tr>
        </thead>
      
      

            <?php

            include "conexao.php";

            $sql = "SELECT * FROM `estoque` ";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)) {
              
              $id = $array['id'];
              $nro = $array['nro'];
              $nome = $array['nome'];
              $categoria = $array['categoria'];
              $qtd = $array['qtd'];
              $fornecedor = $array['fornecedor'];


            ?>


            <tr>

            <td> <?php echo $nro ?> </td>
            <td> <?php echo $nome ?> </td>
            <td> <?php echo $categoria ?> </td>
            <td> <?php echo $qtd ?> </td>
            <td> <?php echo $fornecedor ?> </td>

            <?php  } ?>

              
            </tr>

      </table>


    </div>


  </div>


</body>

</html>