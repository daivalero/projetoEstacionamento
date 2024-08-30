<?php
namespace Projeto\projetoEstacionamento\PHP;

require_once 'Funcionario.php'; // Inclua o arquivo Funcionario.php

class Gerente extends Funcionario{
    protected string $id;
    protected string $cargo;
    protected string $salario;
    protected string $setor;

    public function __construct(
        string $nome,
        string $cargo,
        string $salario,
        string $telefone,
        string $endereco,
        string $dtnascimento,
        string $id,
        string $cpf
    ){
        parent::__construct($nome,$telefone,$endereco,$cpf);
        $this->id = $id;
        $this->cargo  = $cargo;
        $this->salario = $salario;
        $this->dtnascimento = $dtnascimento;
    }//fim do construtor

    public function __get(string $name):mixed
    {
        return $this->name;
    }//fim dos gets

    public function __set(string $name, mixed $value):void
    {
        $this->$name = $value;
    }//fim do set

    public function imprimir():string
    {
        
        return parent::imprimir().
               "<br><br>Id: "       .$this->id.
               "<br>Cargo: "        .$this->cargo.
               "<br>Salário: "      .$this->salario.
               "<br>dtnascimento: " .$this->dtnascimento;
    }//fim do método



}//fim da classe
?>
?>