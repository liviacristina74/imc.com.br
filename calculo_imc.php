<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$altura =$_POST['altura'];
$peso =$_POST['peso'];

$imc=$peso/($altura*$altura);
echo "$nome você está com $idade anos e seu imc é: $imc";

?>