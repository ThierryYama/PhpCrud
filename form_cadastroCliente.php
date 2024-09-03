<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h3 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 10px 0;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #2c26d8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        a{
            background-color: #2c26d8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin: 10px 10px;
            text-decoration: none;
        }
        
        button:hover {
            background-color: #455dbf;
        }

        a:hover {
            background-color: #455dbf;
        }

        .bt{
            display: flex;
            flex-direction: row;
            width:100%; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h3> 👩‍🎓 Cadastro de Cliente </h3>
            <form method="POST"  action="cadastroCliente.php">
            <p> Nome: <input type="text" name="nome" required> </p>
            <p> Telefone: <input type="text" name="telefone" required> </p>
            <p> Email: <input type="email" name="email" required> </p>
            <p> CPF: <input type="text" name="cpf" required> </p>
            <div class="bt">
                <p> <button type="submit">Cadastrar</button></p>
                <a href="listarCliente.php">Listar Clientes</a>
            </div>
            </form>
    </div>
</body>
</html>