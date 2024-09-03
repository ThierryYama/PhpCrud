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
                <a href="form_atualizar Cliente.php?id=<?php echo $cliente['id']; ?>">Editar Cliente</a>
                <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir Cliente</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <a href="form_cadastroCliente.php">Cadastrar Cliente</a>

</body>
</html>