<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Funcionario</title>
</head>
<body>
        <form action="Atender.php" method="POST">

            <input type="text" name="nome" placeholder="Nome">
            <br>
            <input type="text" name="apelido" placeholder="Apelido">
            <br>
            <input type="text" name="telefone" placeholder="Telefone">
            <br>
            <input type="text" name="bairro" placeholder="Bairro">
            <br>
            <select name="sexo">        
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
            <br>
            <input type="submit" name="registar" value="Registar">
        </form>
</body>
</html>