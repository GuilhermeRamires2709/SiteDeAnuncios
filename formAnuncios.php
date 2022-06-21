<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Champion T-shirt</title>
</head>
<body>
    <div class='wrapper'>
    <form action='formProduto.php' method="POST" onsubmit="validar(this);return false;" enctype='multipart/form-data'>
    <?php
      echo "<h1>Novo Produto</h1>";
      ?>
        <div class='input-group'>
            <label for='nome'>Nome</label>
            <?php
                echo "<input type='text' id='nome' name='nome'>";
            ?>
        </div>
        <div class='input-group'>
            <label for='foto'>Imagem</label>
            <?php
                 echo "<input type='file' id='foto' name='foto'>";
                
            ?>
        </div>
        <div class='input-group'>
            <label for='descricao'>Descrição</label>
            <?php
                  echo "<input type='text' id='descricao' name='descrição'>";

            ?>
        </div>
        <div class='input-group'>
            <label for='data-de-vencimento'>Data de Vencimento</label>
            <?php
                  echo "<input type='date' id='data-de-vencimento' name='data de Vencimento'>";

            ?>
        </div>
        <div class='input-group'>
            <label for='preco'>Preço</label>
            <?php
                  echo "<input type='text' id='preco' name='preço'>";

            ?>
        </div>

        <?php
           
             echo "<input type='submit' name='opcao' value='Inserir'>";
             
        ?>
        
    </form>
    <a href="index.php">Voltar</a>
    </div>
</body>
</html>