<?php
require_once "DB.php";

class anuncio{

    private int $id;
    private string $dataDeCriacao;

    public function __construct( private string $nome, private string $descricao, private float $preço, private string $dataDeValidade){
    }
        public function getId():int{
            return $this->id;
            
        }
        public function getNome():string{
            return $this->nome;

        }
        public function getDescrição():string{
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
            $sql = "INSERT INTO anuncio (Titulo,Descrição,Preço, Data_de_Validade) VALUES ('$this->nome','$this->descricao','$this->preço', '$this->dataDeValidade')";
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
                $anuncio = array();
                foreach($resultado as $anuncioAux){
                    $novoAnuncio = new anuncio ($anuncioAux['Titulo'],$anuncioAux['Descrição'],$anuncioAux['Preço'],timestamp($anuncioAux['Data_de_Validade']));
                    $novoAnuncio->setId($anuncioAux['ID']);
                    $novoAnuncio->setDataDeCriacao($anuncioAux['Data_de_Criação']);
                    $anuncio[] = $novoAnuncio;
            }
            return $anuncio;
        }else{
            return false;
        }
    }
    public function editar(){
        $sql="UPDATE anuncio set Titulo=$this->nome, Descrição=$this->descricao, Preço = $this->preço, Data_de_Criação=$this->dataDeCriacao, Data_de_Validade=$this->dataDeValidade WHERE id=$this->id";
        $db= new DB();
        $resultado=$db->manipular($sql);
        if($resultado==1){
            return true;
        }
        else{
            return false;
        }
    }
    public static function apagar($id){
            $sql = "DELETE FROM anuncio WHERE ID = $id";
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