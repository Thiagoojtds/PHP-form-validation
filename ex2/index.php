<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


<section style="text-align: center;">
    <form action="./app.php" method="POST">
        <p><input type="text" name="firstname" placeholder="Primeiro Nome" required></p>
        <p><input type="text" name="lastname" placeholder="Ultimo Nome" required></p>
        <p><input type="text" name="parents[mother][firstname]" placeholder="Primeiro Nome da mãe" required></p>
        <p><input type="text" name="parents[mother][lastname]" placeholder="Ultimo Nome da mãe" required></p>
        <p><input type="text" name="parents[father][firstname]" placeholder="Primeiro Nome do pai"></p>
        <p><input type="text" name="parents[father][lastname]" placeholder="Ultimo Nome do pai"></p>
        <p style="color: red"><b><?php echo $_GET['incoming']; ?></b></p>
        <p><input type="number" name="ir_incoming[]" placeholder="Renda declarada ano passado"></p>
        <p><input type="number" name="ir_incoming[]" placeholder="Renda declarada ano retrasado"></p>
        <p><input type="number" name="ir_incoming[]" placeholder="Renda declarada este ano"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</section>

</body>
</html>