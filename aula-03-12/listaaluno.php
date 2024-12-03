<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>aluno</th>
    <th>Turma</th> 
  </tr>
  <tr>
    <td>
        <?php echo $_POST['aluno']; ?>
    </td>
    <td>
        <?php echo $_POST['turma']; ?>
    </td>
  </tr>
</table>

</body>
</html>