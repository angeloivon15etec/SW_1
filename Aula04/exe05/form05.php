<?php
$CorEscolhida = isset($_POST["cor"]) ? $_POST["cor"] : "#ffffff";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor Alterada</title>
    <style>
        body {
            background-color: <?php echo $CorEscolhida; ?>;
        }
    </style>
</head>
<body>
    <h2>A cor do fundo foi alterada!</h2>
    <a href="exe05.php">Voltar</a>
</body>
</html>

