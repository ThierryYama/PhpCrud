<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);

    $cliente->setId($_GET['id']);
    $stmt = $cliente->consultar();
    $clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url('./img/aurora.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        input[type="text"],
        input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"], a{
            background-color: #2c26d8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 10%;
            text-decoration: none;
        }

        input[type="submit"]:hover{
            background-color: #455dbf;
        }
        .container{
            display:flex;
            flex-direction: row;
            gap:10px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
        }
    </style>

</head>
<body>
    <form action="atualizaCliente.php" method="POST">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
            <input type="text" name="nome" value="<?php echo $clienteSelecionado['nome']; ?>">
            <input type="text" name="telefone" value="<?php echo $clienteSelecionado['telefone']; ?>">
            <input type="email" name="email" value="<?php echo $clienteSelecionado['email']; ?>">
            <input type="text" name="cpf" value="<?php echo $clienteSelecionado['cpf']; ?>">
            <input type="submit" value="Atualizar">
            <a href="listarCliente.php">Voltar</a>
        </div>
    </form>
</body>
</html>

<!-- view -->
