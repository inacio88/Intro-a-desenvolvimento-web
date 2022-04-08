<?php

$username = '';
$password = '';

$pdo = new PDO('mysql:host=daniel.gomes.pro.br;dbname=daniel_contato', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->query("SELECT * FROM pessoas;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} <br/>
    Fone: {$linha['fone']} <br/>
    Email: {$linha['email']} <br/>
    Insta: {$linha['insta']} <br/>";
}
?>
