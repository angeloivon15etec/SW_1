<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
    <p>1. Usando o método GET, crie um formulário que receba o nome do estudante, 3 notas de
Zero à Dez e calcule a média quando um botão de submit for pressionado! Faça a
validação dos campos de modo que usuário tenha que preencher todos os campos e
todos numéricos</p>

    <form method="GET" action="form01.php">
        Nome: <input type="text" name="nam">
        Nota 1: <input type="number" name="num1" min="0" max="10">
        Nota 2: <input type="number" name="num2" min="0" max="10">
        Nota 3: <input type="number" name="num3" min="0" max="10">
        <input type="submit" value="Calculo">
    </form>

   
</form>


</body>
</html>