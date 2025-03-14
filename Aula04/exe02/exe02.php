<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>
<body>
   <p>Usando o método GET, crie um formulário que receba três números e verifique qual 
deles é o maior. Faça a validação dos campos de modo que usuário tenha que preencher 
todos os campos.</p>
    
    <form method="GET" action="form02.php">
        Número 1: <input type="number" name="num1" >
        Número 2: <input type="number" name="num2">
        Número 3: <input type="number" name="num3">
        <input type="submit" value="o maior é">
    </form>

</body>
</html>