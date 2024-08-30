<?php
    namespace Projeto\projetoEstacionamento\PHP;
    require_once('Pessoa.php');
    require_once('Funcionario.php');//Conexão esteja completa
    use Projeto\projetoEstacionamento\PHP\ControllerFuncionario;
    use Projeto\projetoEstacionamento\PHP\Pessoa;
    Use Projeto\projetoEstacionamento\PHP\Funcionario;
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Nome: </label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Cpf:</label>
                <input type="text" id="cpf" name="cpf"/><br><br>
 
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Id:</label>
                <input type="text" id="id" name="id"/><br><br>
 
                <label>Cargo:</label>
                <input type="text" id="cargo" name="cargo"/><br><br>
 
                <label>Salario:</label>
                <input type="text" id="salario" name="salario"><br><br>
 
                <label>Data de Nascimneto:</label>
                <input type="text" id="dtnascimento" name="dtnascimento"/><br><br>
               

                <button>Cadastrar
                <?php
                    try{
       
                        $nome =  $_POST['nome'];
                        $cpf  =  $_POST['cpf'];
                        $telefone =  $_POST['telefone'];
                        $endereco =  $_POST['endereco'];
                        $id =  $_POST['id'];
                        $cargo =  $_POST['cargo'];
                        $salario =  $_POST['salario'];
                        $dtnascimento =  $_POST['dtnascimento'];
           
                        $Funcionario1 = new Funcionario($nome,$cpf, $telefone, $endereco, $id, $cargo, $salario, $dtnascimento);
                    }catch(Exception $erro){
                    echo $erro;
                    }//fim do try_catch
                ?>
                </button><br><br>
 
                <?php
                    echo $Funcionario1->imprimir();
                ?>
 
            </form>
        </body>
</HTML>