<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1 style="color:#f27c7c">Sistema de Cadastro Acadêmico</h1>
    </div>

    <div class="titulo">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="cadaluno.php">FORMULÁRIO</a></li>
        </ul>
    </div>

    <div class="centrolista">

        <h1>LISTA DE CADASTRO</h1>
        <table>
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
            <tr>
                <td><?php echo $_POST["cpf"]; ?></td>
                <td><?php echo $_POST["nascimento"]; ?></td>
                <td><?php echo $_POST["nome"]; ?></td>
                <td><?php echo $_POST["sobrenome"]; ?></td>
                <td><?php echo $_POST["zap"]; ?></td>
                <td><?php echo $_POST["tel"]; ?></td>
                <td><?php echo $_POST["endereco"]; ?></td>
                <td><?php echo $_POST["bairro"]; ?></td>
                <td><?php echo $_POST["cidade"]; ?></td>
                <td><?php echo $_POST["uf"]; ?></td>
            </tr>
        </table>
        </div>
    </div>

    <div class="rodape">
        <div id="div6">Sistema criado por: Geovana Alves (1AII)</div>
    </div>

</body>

</html>