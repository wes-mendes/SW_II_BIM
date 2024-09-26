<?php

    include 'conecta.php';

    $id_cliente = $_GET['id_cliente'];

    $nome_clienteNovo = $_POST['nome_clienteNovo'];
    $email_clienteNovo = $_POST['email_clienteNovo'];
    $telefoneNovo = $_POST['telefoneNovo'];

    $consulta = "UPDATE clientes SET nome_cliente = '$nome_clienteNovo', email_cliente = '$email_clienteNovo', telefone = '$telefoneNovo' WHERE id_cliente = $id_cliente";
    $conexao->query($consulta);

    header('Location: index.php');

?>