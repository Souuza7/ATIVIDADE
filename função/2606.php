<?php
$nome = $_GET["nome"];
$nascimento = $_GET["nasc"];
$idade = date("Y") - $nascimento;

if ($idade < 18) {
    echo "$nome, você tem $idade anos e ainda faltam ", 18 -
    $idade, " ano(s) para você tirar carteira.";
} elseif ($idade == 18) {
    echo "$nome, você tem $idade anos e ja pode tirar carteira!";
} elseif ($idade > 18) {
    echo "$nome, você tem $idade anos e já passou ", $idade -
    18, " ano(s) da maioridade";
}
