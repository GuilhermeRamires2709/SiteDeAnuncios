<?php
require_once "DB.php";
require_once "anuncios.php"; 
if(isset($_POST['entrar'])){
    $novoAnuncio = new anuncio($_POST['title'], $_POST['descricao'], $_POST['preco'], $_POST['dateValid']);
    $resultado=$novoAnuncio->inserir();
    if($resultado){
        header("location: index.php");
    }else{
        echo "Inserção não realizada";
    }
}        


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Anuncios</title>
</head>
    <main class="container">
        <form actiom="anuncios.php" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <div class="form-group row">
                <label for='title'>Título</label>
                <?php echo "<input type='text' name='title' id='title'
                    placeholder='Insira aqui o título do seu anúncio'>" ?>
                </div>
                <div class="form-group row">
                <label for='descricao'>Descrição</label>            
                    <?php echo "<input type='text' name='descricao' id='descricao'
                    placeholder='Descreva seu produto'>" ?>
                    </div>
                    <div class="form-group row">
                    <label for='preco'>Preço</label>            
                    <?php echo "<input type='money-mask' name='preco' id='preco'
                    placeholder='R$'>" ?>
                    </div>
                    <div class="form-group row">
                    <label for='data-de-validade'>Data de validade</label>                        
                    <?php echo "<input type='date' name='dateValid' id='dateValid'>" ?>
                    </div>
            </div>
            <div class="footer">
                <input type="submit" name="entrar" value="Entrar">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </div>
        </form>
    </main>

<body>
    
</body>
</html>