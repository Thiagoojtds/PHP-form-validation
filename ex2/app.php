<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>
<body>


<?php
    $isNull = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dados = $_POST['ir_incoming'];
        if(empty($dados[0]) && empty($dados[1]) && empty($dados[2])){
            $error = 'Preencha pelo menos uma renda.';
            header("Location: ./index.php?incoming=$error");
        }
    }
?>

<section">
<div style="width: 300px;
	margin-left: auto;
	margin-right: auto;">

    <?php

    echo
    "<br><b>Primeiro nome:</b> " . $_POST['firstname'] . "<br>" .
    "<b>Ultimo Nome:</b> " . $_POST['lastname'] . "<br>" .
    "<b>Primeiro nome da mae:</b> " . $_POST['parents']['mother']['firstname'] . "<br>" .
    "<b>Ultimo nome da mae:</b> " . $_POST['parents']['mother']['lastname'] . "<br>" .
    "<b>Primeiro nome do pai:</b> " . $_POST['parents']['father']['firstname'] . "<br>" .
    "<b>Ultimo nome do pai:</b> " . $_POST['parents']['father']['lastname'];
    

    $rendaAnoAtual = $_POST['ir_incoming'][0];
    $rendaAnoPassado = $_POST['ir_incoming'][1];
    $rendaAnoRetrasado = $_POST['ir_incoming'][2];

    $rendaSoma = $rendaAnoAtual + $rendaAnoPassado + $rendaAnoRetrasado;

    echo "<br><br><b>Soma da renda nos ultimos 3 anos: </b> R$". $rendaSoma;

    $rendaMedia = $rendaSoma / 3;

    if($rendaMedia < 1200){
        echo "<br><br>Renda mínima para sobreviver";
    }else if($rendaMedia < 2500){
        echo "<br><br>Da pra criar um filho";
    }else if($rendaMedia < 7000){
        echo "<br><br>Da pra criar uma dupla de vôlei de praia já";
    }else{
        echo "<br><br>Filho para que se dá pra ir no bordel toda semana?";
    }
    ?>
</div>
</section>
    
</body>
</html>