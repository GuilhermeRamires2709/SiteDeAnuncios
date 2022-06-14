<?php
include "anuncios.php";
require_once "DB.php";

$anuncio= anuncio::listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6fcb3c5241.js" crossorigin="anonymous"></script>
    <title>IF Anuncios</title>
</head>
<body>
    <header>    
    <div class="logincar"> 
    <a href="login.php"><img id="login" src="upload/icone.png" alt=""></a>
    </div>
    </header>        
        <div class="container-p">
        <?php 
            if($anuncio!=false){  
                    foreach($anuncio as $anuncioAux){ 
                    echo "<div class='product1'>";
                    echo "<div class='preco'>" .$$anuncioAux->getPreço()."</div>";
                    echo "<div class='nomeproduto'>" .$anuncioAux->getNome()."</div>";
                    echo "<div class='preco'>" .$anuncioAux->getDescrição()."</div>";
                    echo "<div class='dataDeValidade'>" .$anuncioAux->getDataDeValidade()."</div>";
                    echo "<div class='dataDeCriacao'>" .$anuncioAux->getDataDeCriacao()."</div>";
                        echo "<input type='submit' name='Insert' value='Inserir Anúncio'>"; 
                        echo "</div>";
                    }
                }
            ?>        
        </div>    
        </body>
</html>