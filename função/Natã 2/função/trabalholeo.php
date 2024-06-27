<?php
$nome = $_GET["nome"];
$nascimento = $_GET["nasc"];
$idade = date("Y") - $nascimento;

if ($idade > 18) {
    echo "$nome, você tem $idade anos e ainda faltam ", 18 -
        $idade, " ano(s) para o alistamento.";
} elseif ($idade == 18) {
    echo "$nome, você tem $idade anos e ja está na hora de se alistar!";
} elseif ($idade > 18) {
    echo "$nome, você tem $idade anos e já passou ", $idade -
        17, " ano(s) do alistamento.";
}
