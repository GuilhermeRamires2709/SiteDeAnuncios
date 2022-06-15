<?php
require_once "DB.php";

Class user{
    
    private string $nome;
    private int $id;
    
    public function __construct( private string $user, private string $senha){
    }

    public function getNome():string{
        return $this->nome;
    }
    public function getId():int{
        return $this->id;
    }
    public function getSenha():string{
        return $this->senha;
    }
    public function getUser():string{
        return $this->user;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function setUser(string $user){
        $this->user = $user;
    }
    public function setSenha(string $senha){
        $this->senha = $senha;
    }
    
    public function newUser(){
        $sql= "INSERT INTO user (nome, user, senha) VALUES ('$this->nome','$this->user', '$this->senha')";
        $db= new DB();
        $resultado = $db->manipular($sql);
        if($resultado==1){
            session_start();
            return true;    
        } else {
            return false;
        }
    }
    
    public function autenticar(){
        $sql= "SELECT * FROM user WHERE user='$this->user' and senha='$this->senha' LIMIT 1";
        $db= new DB();
        $resultado = $db->consultar($sql);
        if ($resultado){
            session_start();
            $_SESSION['nome']=$resultado[0]['nome'];
            $_SESSION['user']=$resultado[0]['user'];
            $_SESSION['senha']=$resultado[0]['senha'];
            return true;
        } else {
            return false;
        }

    }
    public static function editar($user, $senha){
        $sql="UPDATE user set senha = '$senha' WHERE user= '$user'";
        $db= new DB();
        $resultado=$db->manipular($sql);
        if($resultado==1){
            return true;
        } else{
            return false;
        }
    }
}