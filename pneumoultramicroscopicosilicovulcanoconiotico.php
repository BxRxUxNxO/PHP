[09:53, 28/09/2023] Henrique: <?php
    $num1 = 2;
    $num2 = 4;
    $num3 = 6;
    $num4 = 8;

    // Resultado igual a 2
    $resposta1 = $num2 - $num1;
    echo $resposta1;
    echo "<br>";

    // Resultado igual a 8
    $resposta2 = $num3 + $num1;
    echo $resposta2;
    echo "<br>";

    // Resultado igual a 12 
    $resposta3 = $num1 * $num3;
    echo $resposta3;
    echo "<br>";

    // Resultado igual a 2
    $resposta4 = $num2 / $num1;
    echo $resposta4;
    echo "<br>";

    // Resultado igual a 2, já que o resto da divisõa de 8 por 6 é igual a 2
    $resposta5 = $resposta2 % $num3;
    echo $resposta5;
?>
[13:35, 28/09/2023] Henrique: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Votação</title>
</head>
<body>
    <h1> Insira sua idade </h1>
    <form method = "post" class = "intGroup">
        <label for = "idade"> Idade: <label>
        <br><br>
        <input type = "text" name = "idade" id = "idade">
    </form> 

    <?php
        if (isset($_POST['idade'])) {
            $idade= intval($_POST['idade']);
        
        if ($idade < 16) {
            echo "Você tem $idade anos, não pode votar";
        } 
        else if ($idade >= 16 && $idade <= 18) {
            echo "Você tem $idade anos, voto facultativo";
        }elseif ($idade >= 19 && $idade <= 65){
            echo "Você tem $idade anos, voto é obrigatório";
        } elseif($idade >= 66){
            echo "Voto é facultativo";
        }
        } else {
            echo "Idade não foi informada";
        }
        ?>

</body>
</html>