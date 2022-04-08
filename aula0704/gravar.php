<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$fone = $_POST["fone"];
$insta = $_POST["insta"];
$username = '';
$password = '';
// echo($nome);
// echo($email);
// echo($fone);
// echo($insta);
try {
    $pdo = new PDO('mysql:host=localhost;dbname=banco_dados', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $pdo->prepare('INSERT INTO aula0704 VALUES(:nome, :email, :fone, :insta, :id)');
    $stmt->execute(array(
      ':nome' => $nome,
      ':email' => $email,
      ':fone' => $fone,
      ':insta' => $insta,
      ':id' => NULL,
    ));
    echo("deu certo");
    //echo $stmt->rowCount();
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

?>
