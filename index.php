<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário para Alterar $d</title>
</head>
<body>
    <h1>Esquerda ou direita.</h1>
    <form method="post" action="">
        <label for="d_value">Digite 0 (Direita), 1 (Esquerda) ou 2 (parar):</label>
        <input type="text" id="d_value" name="d_value" required>
        <input type="submit" value="Atualizar">
    </form>
    <?php
    // Defina $d com o valor padrão 0
    $d = 2;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pegue o valor do formulário e atualize $d
        $d = isset($_POST["d_value"]) ? intval($_POST["d_value"]) : 0;
    }

    do {
        // Verificar o valor de $d antes de executar qualquer outra operação
        if ($d == 2) {
            echo "BRAKESTOP...<br>";
            break; // Encerra o loop do...while
        }

        // Operações aritméticas básicas
        $a = 1 + 0 - 1; // $a = 0
        $b = 0 + 0; // $b = 0
                
        echo "Resultados:<br>";
        echo "1 + 0 - 1 = $a<br>";
        echo "0 + 0 = $b<br>";
        echo "Valor de \$d = $d<br>";
        
        // Verificar o primeiro resultado
        if ($d == 0) {
            echo "Direita...<br>";
            
            // Verificar o valor de $d
        if ($d == 1) {
            echo "Esquerda<br>";
            
        } else {
            echo "Começo do código novamente...<br>";
            continue; // Volta ao início do loop do...while
        }
        } elseif ($d == 1) {
            echo "Esquerda...<br>";
            
            break; // Encerra o loop do...while
        }

        
    } while (true);
    ?>
</body>
</html>
