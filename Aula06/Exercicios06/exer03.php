<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio03</title>
    <style>
                table {
            border-collapse: collapse;
            width: 50%;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>categoria</th>
        </tr>    
        <?php
        // Array associativo com produtos
        $produtos = [
            ["nome" => "Notebook", "preco" => "3500.00","categoria" =>"eletronicios"],
            ["nome" => "Camiseta", "preco" => "50.00", "categoria" => "Roupas"],
            ["nome" => "Smartphone", "preco" => "2500.00", "categoria" => "Eletrônico"],
            ["nome" => "Calça Jeans", "preco" => "120.00", "categoria" => "Roupas"],
            ["nome" => "Chocolate", "preco" => "15.00", "categoria" => "Alimentos"],

        ];

        // Exibe os produtos na tabela
        foreach ($produtos as $produto) {
            $categoria = $produto["categoria"];
            echo "<tr class='$categoria'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ {$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
?>
</table>
</body>
</html>