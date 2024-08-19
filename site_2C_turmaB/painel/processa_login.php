<?php
    require('conecta.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;
    $resultado_usuario = mysqli_fetch_assoc($resultado);
    
    //var_dump($resultado_usuario);

    if($registros == 1){
        //echo "TE ACHEI";       
        header('Location: index.php');

    }
    else{
        //echo "NÃO ACHEI";        
        header('Location: ../index.html');
    }



?>