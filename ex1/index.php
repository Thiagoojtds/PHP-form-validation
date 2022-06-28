<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
<section style="text-align: center;" >
    <h1>Bem vindo <?php echo $_GET['cadastrante'] ?? ''; ?> </h1>

    <form action="./finalizacao.php" method="POST">
        <p> Nome: <input type="text" name="name" required></p>
        <p> CPF: <input type="text" name="cpf"></p>
        <p>Telefone: <input type="text" name="tel"></p>
        <p>Endereço: <input type="text" name="endereco"></p>
        <input type="submit" name="Submit" value="Submit">
    </form>
</section>


</body>
</html>