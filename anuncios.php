<?php
require_once "DB.php";

class anuncios{

    private int $id;
    private int $idUser;
    private array|string $foto;
    private int $datac;

    public function __construct( private string $nome, private string $descricao, private float $preco, private int $datav){
    }
        public function getId():int{
            return $this->id;
            
        }
        public function getIdUser():int{
            return $this->idUser;
            
        }
        public function getNome():string{
            return $this->nome;

        }
        public function getFoto():string|array{
            return $this->foto;
        }
        public function getDescrição():string{
            return $this->descricao;

        }
        public function getPreco():int{
            return $this->preco;

        }
        public function getDatav():int{
            return $this->datav;
        }
        public function getDatac():int{
            return $this->datac;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        public function setIdUser(int $idUser){
            $this->id = $idUser;
        }
        public function setNome(string $nome){
            $this->nome=$nome;
        }
        public function setDescricao(string $descricao){
            $this->descricao=$descricao;    
        }
        public function setPreco(int $preco){
            $this->preco=$preco;
        }
        public function setFoto(array|string $foto){
            $this->foto=$foto;    
        }
        public function setDatac(int $datac){
            $this->datac=$datac;
        }
        public function setDatav(int $datav){
            $this->datav=$datav;
        }

        public function inserir(){
            $destino = uniqid().".".pathinfo($this->foto['name'])['extension'];
            move_uploaded_file($this->foto['tmp_name'],"fotos/".$destino);
            $sql = "INSERT INTO anuncio (foto,nome,descricao, preco, datav, idUser) VALUES ('$destino', '$this->nome' , '$this->descricao','$this->preco', '$this->datav', '$this->idUser')";
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
                    $novoAnuncio = new anuncios ($anuncioAux['nome'],$anuncioAux['descricao'],$anuncioAux['preco'],$anuncioAux['datav']);
                    $novoAnuncio->setId($anuncioAux['id']);
                    $novoAnuncio->setId($anuncioAux['idUser']);
                    $novoAnuncio->setDatac($anuncioAux['datac']);
                    $novoAnuncio->setFoto($anuncioAux['foto']);
                    $anuncio[] = $novoAnuncio;
            }
            return $anuncio;
        }else{
            return false;
        }
    }
    public function editar(){
        $sql="UPDATE anuncio set nome=$this->nome, descricao=$this->descricao, preco = $this->preco, datav=$this->datav WHERE id=$this->id AND idUser = $this->idUser";
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
            $sql = "DELETE FROM anuncio WHERE ID = '$id'";
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