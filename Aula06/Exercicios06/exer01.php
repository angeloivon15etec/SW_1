<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
<style>
        table {
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        .par {
            background-color:rgb(0, 0, 255);
        }
        .impar {
            background-color:rgb(255, 0, 0);
        }
    </style>
</head>
<body>

<table>
        <tr>
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $classe = ($i % 2 == 0) ? 'par' : 'impar';
            echo "<tr class='$classe'>";
            for ($j = 1; $j <= 3; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>
</html>