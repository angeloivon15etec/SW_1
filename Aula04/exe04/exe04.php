<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio04</title>
</head>
<body>
    <h2>Preencha o formulário</h2>
    <form method="POST" action="form04.php">
        Nome: <input type="text" name="nome" >
        E-mail: <input type="email" name="email">
        Data de Nascimento: <input type="date" name="data_nascimento">
        Bandeira do Cartão:
        <select name="bandeira" >
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Elo">Elo</option>
            <option value="American Express">American Express</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
