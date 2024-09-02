<?php
namespace Projeto\projetoEstacionamento\PHP;

require_once('EntradaEsaida.php');
require_once('functionCalcular.php');

use Projeto\projetoEstacionamento\PHP\EntradaEsaida;
use function Projeto\projetoEstacionamento\PHP\Fcalcular; // Certifique-se de que o namespace está correto
?>
<!DOCTYPE HTML>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Diarista</title>
</head>

<body>
    <div class="container">
    <h1>CADASTRAR DIARISTA</h1>

    <form method="POST">
        <label>ID: </label>
        <input type="text" id="id" name="id" /><br><br>

        <label>Data: </label>
        <input type="date" id="data" name="data" /><br><br>

        <label>Telefone: </label>
        <input type="text" id="telefone" name="telefone" /><br><br>

        <label>Entrada:</label>
        <input type="text" id="entrada" name="entrada" /><br><br>

        <label>Saida:</label>
        <input type="text" id="saida" name="saida" /><br><br>

        <label>Placa:</label>
        <input type="text" id="placa" name="placa" /><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $id = $_POST['id'];
            $data = $_POST['data'];
            $telefone = $_POST['telefone'];
            $entrada = $_POST['entrada'];
            $saida = $_POST['saida'];
            $placa = $_POST['placa'];

            $EntradaEsaida1 = new EntradaEsaida($id, $data, $telefone, $entrada, $saida, $placa);

            echo '<div class="result">';
            echo $EntradaEsaida1->imprimir();

            // Verifica se o campo de entrada não está vazio antes de calcular
            if (!empty($entrada)) {
                $total = Fcalcular($entrada, 0); 
                echo "<p>Total a pagar: R$ " . number_format($total) . "</p>";
            } else {
                echo "<p class='error'>Preencha o campo de entrada!</p>";
            }
            
            echo '</div>';

        } catch (Exception $erro) {
            echo '<p class="error">Erro: ' . $erro->getMessage() . '</p>';
        }
    }
    ?>
</div>
</body>

</html>
