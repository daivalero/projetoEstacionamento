<?php
    //Definir o Projeto = Especificar as pastas
    namespace Projeto\projetoEstacionamento\PHP;
    //Específica qual classe eu vou utilizar
    use Projeto\projetoEstacionamento\PHP\EntradaEsaida;
 
    class EntradaEsaida{
        //Encapsular as variáveis
        //Declaração de Variáveis
        protected string $id;
        protected string $data;
        protected string $telefone;
        protected string $entrada;
        protected string $saida;
        protected string $placa;
 
        //Instanciar = dar um valor inicial
        //Método Construtor
        public function __construct(
            string $id,
            string $data,
            string $telefone,
            string $entrada,
            string $saida,
            string $placa
            )
        {
            $this->id      = $id;
            $this->data    = $data;
            $this->telefone    = $telefone;
            $this->entrada = $entrada;
            $this->saida   = $saida;
            $this->placa   = $placa;
        }//fim do método construtor
 
   
        //Métodos Gets e Sets - Acesso e Modificação
 
        public function getid():string
        {
            return $this->id;
        }//fim do método 
        public function setid(string $id):void
        {
            $this->id = $id;
        }//fim do alterar 

 //-------------------------------------------------------------
        public function getdata():string
        {
            return $this->data;
        }//fim do método retornar 
 
        public function setdata(string $data):void
        {
            $this->data = $data;
        }//fim do método alterar
        
        
//-------------------------------------------------------------
         public function gettelefone():string
         {
             return $this->telefone;
         }//fim do método retornar 
  
         public function settelefone(string $telefone):void
         {
             $this->telefone = $telefone;
         }//fim do método alterar 
//-----------------------------------------------------------
        public function getentrada():int
        {
            return $this->entrada;
        }//fim do método
 
        public function setentrada(int $entrada):void
        {
            $this->entrada = $entrada;
        }//fim do método alterar 


// -----------------------------------------------------------
        public function getsaida():string
        {
            return $this->saida;
        }//fim do consultar
 
        public function setsaida(string $saida):void
        {
            $this->saida = $saida;
        }//fim do alterar 

// -----------------------------------------------------------
        public function getplaca():string
        {
            return $this->placa;
        }//fim do consultar
 
        public function setplaca(string $placa):void
        {
            $this->placa = $placa;
        }//fim do alterar 


//------------------------------------------------------------ 
        public function imprimir():string
        {
            return "<br>ID: " .$this->getid().
            "<br>Data: "      .$this->getdata().
            "<br>Telefone: "      .$this->gettelefone().
            "<br>Entrada: "   .$this->getentrada().
            "<br>Saida: "     .$this->getsaida().
            "<br>Placa: "     .$this->getplaca().
            "<br>";
        }//fim do imprimir
 
    }//fim da classe
?>