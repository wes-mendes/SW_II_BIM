<?php
    
    include 'conecta.php';

    $nome_cliente = $_POST['nome'];
    $email_cliente = $_POST['email'];
    $telefone = $_POST['telefone'];

    $consulta = "INSERT INTO clientes (nome_cliente, email_cliente, telefone) VALUES ('$nome_cliente', '$email_cliente', '$telefone')";
    $conexao->query($consulta);

    header('Location: index.php');

?>