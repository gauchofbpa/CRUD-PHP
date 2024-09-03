<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Read</title>
</head>
<body>
    <h1>Visualize os cadastros</h1>
    <!-- Tabela pré-pronta do Bootstrap -->
    <div class="container my-4"></div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">user_id</th>
                    <th scope="col">user_name</th>
                    <th scope="col">user_email</th>
                    <th scope="col">user_created_at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $sql = "SELECT * FROM user";
                    $result = $conn -> query($sql);
                    // Loop para mostrar todos os dados cadastrados no banco
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                            <th scope='row'> {$row['user_id']} </th>
                            <td>{$row['user_name']}</td>
                            <td>{$row['user_email']}</td>
                            <td>{$row['user_created_at']}</td>
                            <td>
                                <a href='update.php?id={$row['user_id']}'>Editar</a> |
                                <a href='delete.php?id={$row['user_id']}'>Excluir</a>
                            </td>
                            </tr>";
                        }
                    } else {
                        echo "Nenhum registro encontrado";
                    }
                    $conn -> close();
                ?>
            </tbody>
        </table>
    </div>
    <a href="create.php">Inserir novo registro</a>
</body>
</html>