<?php
    namespace Projeto\projetoEstacionamento\PHP;
 
    require_once("Pessoa.php");
    Use Projeto\projetoEstacionamento\PHP\Mensalista;
    Use Projeto\projetoEstacionamento\PHP\Pessoa;
 
    class Mensalista extends Pessoa{
        protected string $veiculo;
        protected string $placa;
        protected string $cor;
        protected string $dtPagamento;
        protected float $valorMensal;
       
 
         function __construct(string $nome, string $cpf, string $telefone, string $endereco, string $veiculo, string $placa, string $cor, string $dtPagamento, float $valorMensal)
        {
            parent::__construct($nome, $cpf, $telefone, $endereco);
            $this->veiculo = $veiculo;
            $this->placa = $placa;
            $this->cor = $cor;
            $this->dtPagamento = $dtPagamento;
            $this->valorMensal = $valorMensal;
 
        }//fim do construtor
 
        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get
 
        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set
 
        public function imprimir():string
        {
           
            return  parent::imprimir().
                    "<br>Modelo do veículo: ".$this->veiculo.
                    "<br>Placa: ".$this->placa.
                    "<br>Cor: ".$this->cor.
                    "<br>Data de pagamento: ".$this->dtPagamento.
                    "<br>Valor Mensal: ".$this->valorMensal;
 
        }//fim do imprimir
 
    }//fim da classe Cliente