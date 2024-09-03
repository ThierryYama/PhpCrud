<?php

    require 'Banco.php';
    require 'Cliente.php';

    $banco  = new Banco();
    $db = $banco->getConexao();

    $cliente = new Cliente($db);
    $stmt = $cliente->read();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC); //Separar as informações (Transforma a matriz em um array associativo)
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            background-image: url('./img/aurora.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        h2 {
            color: #f4f4f4;    
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2c26d8;
            color: white;
        }
        
        td{
            background-color: #f4f4f4;  
        }

        td:hover {
            background-color: #d5d8d5;
        }
        
        a {
            color: #455dbf;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .actions a {
            margin-right: 15px;
        }

        button {
            background-color: #2c26d8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 10%;
        }

        button:hover {
            background-color: #455dbf;
        }

        .abtn{
            color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2>Lista de Clientes</h2>

    <table border="1">
        <tr> <!-- Table row -->
            <th>ID</th> <!-- Header cell -->
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    <?php foreach($clientes as $cliente){ ?> <!-- Para cada cliente do array associativo mostrar cada atributo -->
        <tr>
            <td><?php echo$cliente['id']; ?></td> <!-- Data Cell -->
            <td><?php echo$cliente['nome']; ?></td>
            <td><?php echo$cliente['telefone']; ?></td>
            <td><?php echo$cliente['email']; ?></td>
            <td><?php echo$cliente['cpf']; ?></td>
            <td>
                <a href="form_atualizarCliente.php?id=<?php echo $cliente['id']; ?>">Editar Cliente</a>
                <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir Cliente</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <button><a href="form_cadastroCliente.php" class="abtn">Cadastrar Cliente</a></button>

</body>
</html>
<!-- view -->