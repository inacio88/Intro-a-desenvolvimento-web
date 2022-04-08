<?php

$username = 'db_user';
$password = '1101';

$pdo = new PDO('mysql:host=localhost;dbname=banco_dados', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->query("SELECT * FROM aula0704;");

$cor = "#ffffff";

echo "<table border=1>
<tr>
<td>Id </td>
<td>Nome </td>
<td>Fone </td>
<td>Email </td>
<td>Insta </td>
</tr>
";


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if ($cor == "#ffffff"){
        $cor = "#cccccc";
    }
    else {
        $cor = "#ffffff";
    }
    
    echo "<tr style='background-color:$cor'> 
    <td> {$linha['id']} </td>
    <td> {$linha['nome']} </td>
    <td> {$linha['fone']} </td>
    <td> {$linha['email']} </td>
    <td> {$linha['insta']} </td>
    
    </tr>";
}
echo "</table>"
?>
