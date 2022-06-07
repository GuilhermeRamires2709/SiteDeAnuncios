<?php
require_once "DB.php";

class produto{

    private int $id;

    public function __construct( private string $nome, private string $descricao, private float $preço, private int $dataDeValidade, private int $dataDeCriacao){
    }
        public function getId():int{
            return $this->id;

        }
        public function getNome():string{
            return $this->nome;

        }
        public function getDesrição():string{
            return $this->descricao;

        }
        public function getPreço():int{
            return $this->preço;

        }
        public function getDataDeValidade():int{
            return $this->DataDeValidade;
        }
        public function getDataDeCriacao():int{
            return $this->dataDeCriacao;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        public function setNome(string $nome){
            $this->nome=$nome;
        }
        public function setDescricao(string $descricao){
            $this->descricao=$descricao;    
        }
        public function setPreço(int $preço){
            $this->preço=$preço;
        }
        public function setDataDeCriacao(int $dataDeCriacao){
            $this->dataDeCriacao=$dataDeCriacao;
        }
        public function setDataDeValidade(int $dataDeValidade){
            $this->dataDeValidade=$dataDeValidade;
        }

        public function inserir(){
            $sql = "INSERT INTO anuncio (nome,descricao,preço,dataDeCriacao, dataDeValidade) VALUES ('$this->nome','$this->descricao','$this->preço', '$this->dataDeCriação', '$this->dataDeValidade')";
            $db = new DB();
            $resultado = $db->manipular($sql);
            if($resultado==1){
                return true;
            }else{
                return false;
                }
    }
        public static function listar(){
            $sql = "SELECT * FROM anuncio";
            $db = new DB();
            $resultado = $db->consultar($sql);
            if(is_array($resultado)){
                $produto = array();
                foreach($resultado as $anuncioAux){
                    $novoAnuncio = new Produto($anuncioAux['nome'],$anuncioAux['descricao'],$anuncioAux['preço'],$anuncioAux['preço']);
                    $novoAnuncio->setId($anuncioAux['idProduto']);
                    $novoAnuncio->setDataDeCriacao($anuncioAux['dataDeCriacao']);
                    $anuncio[] = $novoAnuncio;
            }
            return $anuncio;
        }else{
            return false;
        }
    }
    //AQUI COMEÇA A LISTAGEM POR LIGAS
    public static function listarLaliga(){
        $sql = "SELECT * FROM produto WHERE idliga=4";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }

    public static function listarLiganos(){
        $sql = "SELECT * FROM produto WHERE idliga=7";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }

    public static function listarLigue1(){
        $sql = "SELECT * FROM produto WHERE idliga=2";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }
    public static function listarSerieA(){
        $sql = "SELECT * FROM produto WHERE idliga=3";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }
    public static function listarPremier(){
        $sql = "SELECT * FROM produto WHERE idliga=5";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }
    public static function listarBr(){
        $sql = "SELECT * FROM produto WHERE idliga=8";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }
    public static function listarBundesliga(){
        $sql = "SELECT * FROM produto WHERE idliga=6";
        $db = new DB();
        $resultado = $db->consultar($sql);
        if(is_array($resultado)){
            $produto = array();
            foreach($resultado as $produtoAux){
                $novoProduto = new Produto($produtoAux['nome'],$produtoAux['idLiga'],$produtoAux['estoque'],$produtoAux['preço']);
                $novoProduto->setIdProduto($produtoAux['idProduto']);
                $novoProduto->setFoto($produtoAux['foto']);
                $produto[] = $novoProduto;
        }
        return $produto;
        } else {
            return false;
        }
    }
    public function editar(){
        $sql="UPDATE produto set nome=$this->nome, idLiga=$this->idLiga, foto = $this->foto, estoque=$this->estoque, preço=$this->preço WHERE idProduto=$this->idProduto and cpf=$this->cpf";
        $db= new DB();
        $resultado=$db->manipular($sql);
        if($resultado==1){
            return true;
        }
        else{
            return false;
        }
    }
    public static function apagar($idProduto){
            $sql = "DELETE FROM produto WHERE idProduto = $idProduto";
            $db = new DB();
            $resultado = $db->manipular($sql);
            if($resultado==1){
                return true;
            }else{
                return false;
            }
        }
        
    }

?>