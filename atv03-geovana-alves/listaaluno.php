<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1 style="color:#f27c7c">Sistema de Cadastro Acadêmico</h1>
    </div>

    <div class="titulo">
        <ul>
            <li><a href="index,php">HOME</a></li>
            <li><a href="cadaluno.php">FORMULÁRIO</a></li>
        </ul>
    </div>

    <div class="centrolista">

        <h1>LISTA DE CADASTRO</h1>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$cpf = htmlspecialchars($_POST['cpf']);
$nascimento = htmlspecialchars($_POST['nascimento']);
  $nome = htmlspecialchars($_POST['nome']);
  $sobrenome = htmlspecialchars($_POST['sobrenome']);
  $zap = htmlspecialchars($_POST['zap']);
  $telfix = htmlspecialchars($_POST['telfix']);
  $endereco = htmlspecialchars($_POST['endereco']);
  $bairro = htmlspecialchars($_POST
  ['bairro']);
  $cidade = htmlspecialchars($_POST['cidade']);
  $uf = htmlspecialchars($_POST['uf']);

echo "<table> 

            <tr>
                <th>CPF</th>
                <th>Data de nascimento</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>ZAP</th>
                <th>Telefone fixo</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
            </tr>
<td>$cpf</td>
<td>$nascimento</td>
<td>$nome</td>
<td>$sobrenome</td>
<td>$zap</td>
<td>$telfix</td>
<td>$endereco</td>
<td>$bairro</td>
<td>$cidade</td>
<td>$uf</td>
</table>";
} else {
  echo "<p>Erro: ERRO NO ENVIO DO FORMULÁRIO.</p>";
}
?>
    </div>

    <div class="rodape">
        <div id="div6">Sistema criado por: Geovana Alves (1AII)</div>
    </div>

</body>

</html>