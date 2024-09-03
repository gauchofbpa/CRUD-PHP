<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Criar cadastro</h1>
    <form method="POST" action="create.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <br>
        <input type="submit" value="Adicionar">
    </form>
    <a href="read.php">Ver registros</a>
</body>
</html>
<?php
    include 'db.php';
    // Vai chamar as funções somente se o servidor receber algo do método POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        // A variável $sql é onde se armazena a instrução/script que será executado
        $sql = "INSERT INTO user (user_name, user_email) VALUE ('$name', '$email')";
        // Esse "if" identifica se a query (instrução/script) foi recebido
        if($conn -> query($sql) === TRUE) {
            echo "Novo registro adicionado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>". $conn -> error;
        }
    }
    // Fecha a conexão com o banco de dados, para que o usuário não possa manipulá-lo facilmente
    $conn -> close();
?>