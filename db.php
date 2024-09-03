<?php
    // Informa ao PHP os dados do banco, como nome, usuario, senha e nome do banco criado
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "crud_system_gaucho";
    // A variável $conn é para conexão, nela são informados os dados do banco
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Caso a conexão tenha falhado, ele dá um aviso
    if($conn-> connect_error) {
        die("Conexão falhou:" . $conn-> connect_error);
    }
?>