<?php
    namespace Projeto\projetoEstacionamento\PHP;
    require_once('EntradaEsaida.php');

    use Projeto\projetoEstacionamento\PHP\EntradaEsaida;
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>ID: </label>
                <input type="text" id="id" name="id"/><br><br>
 
                <label>Data:</label>
                <input type="date" id="data" name="data"/><br><br>
 
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone"/><br><br>
 
                <label>Horário da Entrada:</label>
                <input type="text" id="entrada" name="entrada"/><br><br>
 
                <label>Horário da Saída:</label>
                <input type="text" id="saida" name="saida"/><br><br>
 
                <label>Placa:</label>
                <input type="text" id="placa" name="placa"/><br><br>
                
                
 
                
               
               
                <button>Cadastrar
                <?php
                    try{
       
                        $id =  $_POST['id'];
                        $data =  $_POST['data'];
                        $telefone =  $_POST['telefone'];
                        $entrada =  $_POST['entrada'];
                        $saida =  $_POST['saida'];
                        $placa =  $_POST['placa'];

                      
                        $entradaesaida1 = new EntradaEsaida($id, $data, $telefone, $entrada, $saida, $placa);
                    }catch(Exception $erro){
                    echo $erro;
                    }//fim do try_catch
                ?>
                </button><br><br>
 
                <?php
                    echo $entradaesaida1->imprimir();
                ?>
 
            </form>
        </body>
</HTML>