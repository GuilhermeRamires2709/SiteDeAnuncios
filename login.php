<?php
//require_once "usuario.php";
//require_once "DB.php";

/*if(isset($_POST['entrar'])){
            $novousuario= new usuario($_POST['cpf'],$_POST['senha']);
            $resultado=$novousuario->autenticar();
            if($resultado){
                
                if(!isset($_SESSION)){
                    session_start();
                }
                if($_SESSION['cpf']=="1234567899"){
                    header("location: adminsession.php");
                }    
                else {
                    header("location: usersession.php");
                }
                }   else {
                    echo "Falha ao logar | CPF ou senha incorretos.";
                }
}
if(isset($_POST['cadastrar'])){
    header("location: formUser.php");
} */       
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type = "text/css" href="stylelogin.css">
    <script src="https://kit.fontawesome.com/6fcb3c5241.js" crossorigin="anonymous"></script>
</head>
<style>
    body,html{
        text-align: center;
        background-color: black;
        height: 100vh;
        width: 100vw;
        
    }

    .container{
        display: grid;
        place-items: center;
        height: 100%;
        width: 100%;
    }
    h1{
        font-family:Arial;
        font-size: 70px;
        color: white;
    }
    input[type=text] {
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 1px 1px 2px #333333;
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc;
    border: 1px solid #000000;
    font-size: 30px;
    width: 350px;
    padding: 5px;
    margin: 15px;
}
 
input[type=submit] {
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 1px 1px 2px #333333;
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: green;
    border: 1px solid #000000;
    font-size: 30px;
    width: 350px;
    padding: 5px;
    margin: 15px;
    cursor: pointer;
}
a:link, a:visited {
	text-decoration: none
	}
a:hover {
	text-decoration: underline;
	color: #f00
	}
a:active {
	text-decoration: none
	}
.footer{
    font-size: 30px;
}

</style>
<body>        
        <main class="container">
            <div>
            <h1>Acesse sua conta</h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="text" name='cpf' id='cpf'
                        placeholder="Digite seu CPF:">
                        <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name='senha' id='senha'
                        placeholder="Digite sua senha:">
                        <div class="underline"></div>
                </div>
                <input type="submit" name="entrar" value="Entrar">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>
            <div class="footer">
            <a href="forgetpassword.php"><span>Esqueceu sua senha?</span></a>
            </div>
            </div>

        </main>
    </body>
</html>