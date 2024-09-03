<?php
    include 'db.php';
    // Pega o ID da pessoa que o dado deve ser atualizado
    $id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "UPDATE user SET user_name = '$name', user_email = '$email' WHERE user_id = '$id'"; 
        if($conn -> query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>". $conn -> error;
        }
        $conn -> close();
        // Redireciona para a página principal
        header ("Location: read.php");
        exit();
    }
    $sql = "SELECT * FROM user WHERE user_id = '$id'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Atualizar cadastro</h1>
    <form method="POST" action="update.php?id=<?php echo $row['user_id'];?>">
        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['user_name'];?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['user_email'];?>" required>
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>