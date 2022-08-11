<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        div.container {
            margin: auto;
            border: 1px solid #000;
            width: 50%;
            text-align: center;
        }

        .table {
            width: 100%;
            border: 1px solid #000;
            margin: auto;
            padding: 5px;
        }

        th {
            border: 1px solid #000;
            margin: 0;
            background-color: #000;
            color: #fff;
        }

        td {
            border: 1px solid #000;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $titulo ?></h1>
        <table class="table">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Endereco</th>
                <th>Telefone</th>
            </tr>
            <?php foreach($data as $cliente): ?>
            <tr>
                <td><?= $cliente->id ?></td>
                <td><?= $cliente->name ?></td>
                <td><?= $cliente->endereco ?></td>
                <td><?= $cliente->telefone ?></td>
            </tr>
            <?php endforeach ?>
        </table>
        
    </div>
</body>
</html>