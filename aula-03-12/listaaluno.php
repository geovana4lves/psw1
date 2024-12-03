<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>aluno</th>
    <th>turma</th> 
  </tr>
  <tr>
    <td>
        <?php echo $_POST['aluno']; ?>
    </td>
</tr>
<tr>
    <td>
        <?php echo $_POST['turma']; ?>
    </td>
  </tr>
</table>

</body>
</html>