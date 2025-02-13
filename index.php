<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de casa</title>
</head>
<body>
    <?php 
    echo "<strong>Atividade 1</strong><br><br>";//Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.

    $a = 10;
    $b = 20;

    $soma = $a + $b;
    $Multiplicar = $soma * $a;

    echo "A soma de $a + $b é igual a $soma e a multiplicação do resultado mais o primeiro valor é $Multiplicar.";
     
    echo "<br><br>";
    echo "<strong>Atividade 2</strong><br><br>";//Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, 
    //calcule sua média na variável media e exiba para o usuário o resultado

    $var1 = 10;
    $var2 = 20;
    $var3 = 30;
    $media = ($var1 + $var2 + $var3) / 3;

    echo "A média de $var1, $var2 e $var3 é igual a $media.";

    echo "<br><br>";
    echo "<strong>Atividade 3</strong><br><br>";//Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.


    $valor = 100;
    $desconto = 0.15;

    $valorDesconto = $valor * $desconto;

    echo "O valor com desconto de 15% de $valor é igual a $valorDesconto.";

    echo "<br><br>";
    echo "<strong>Atividade 4</strong><br><br>";//Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.

    $salario = 1000;
    $des1 = 0.05;
    $des2 = 0.50;

    $salarioComDesconto1 = $salario * $des1;
    $salarioComDesconto2 = $salario * $des2;

    echo "O salário com desconto de 5% é de $salarioComDesconto1 e com desconto de 50% é de $salarioComDesconto2.";

    echo "<br><br>";
    echo "<strong>Atividade 5</strong><br><br>";//Escreva um algoritmo que leia dois números, calcule o quadrado de cada um,
    //some os quadrados e mostre o resultado.

    $num = 5;
    $num1 = 9;

    $quadrado = $num * $num;
    $quadrado1 = $num1 * $num1;

    echo "O quadrado de $num é $quadrado e o quadrado de $num1 é $quadrado1.";

    echo "<br><br>";
    echo "<strong>Atividade 6</strong><br><br>";//Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo),
    //calcule e exiba para o usuário a velocidade em km/h.

    $velocidade = 30;
    $km = 3.6;

    $velocidadeKm = $velocidade * $km;

    echo "A velocidade de $velocidade m/s é igual a $velocidadeKm em km/h.";

    echo "<br><br>";
    echo "<strong>Atividade 7</strong><br><br>";//Escreva um algoritmo que leia a altura e o peso de uma pessoa, 
    //calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

    $altura = 1.70;
    $peso = 66.8;

    $imc = $peso / $altura ** 2;
    $imcFormatado = number_format($imc, 2);
    echo "Seu IMC é de $imcFormatado.";

    echo "<br><br>";
    echo "<strong>Atividade 8</strong><br><br>";//Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.

    $dinheiro = 80;
    $desconto = 0.09;

    $descontoDinehiro = $dinheiro * $desconto;

    echo "O desconto de 9% de $dinheiro é igual a $descontoDinehiro.";


    







    ?>
</body>
</html>