<?php
require_once "anuncios.php";
 if(isset($_POST['opcao'])){
    if($_POST['opcao'] == "Inserir"){
        $newAnuncio = new anuncio($_POST['nome'],$_POST['descricao'],$_POST['preco'],$_POST['data-de-vencimento']);
        $resultado = $newAnuncio->inserir(); 
        if($resultado){
            header("location: index.php");
        }else{
            echo "Inserção não realizada";
        }
    }
}

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
    <form action='formProduto.php' method="POST" enctype='multipart/form-data'>
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
            <label for='idLiga'>Descrição</label>
            <?php
                  echo "<input type='text' id='descricao' name='descrição'>";

            ?>
        </div>
        <div class='input-group'>
            <label for='estoque'>Data de Vencimento</label>
            <?php
                  echo "<input type='date' id='data-de-vencimento' name='data de Vencimento'>";

            ?>
        </div>
        <div class='input-group'>
            <label for='preço'>Preço</label>
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