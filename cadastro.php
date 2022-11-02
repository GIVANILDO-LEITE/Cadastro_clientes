<?php
    include("conexao.php");

    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $mensagem=$_POST["mensagem"];

    $sql= "INSERT INTO contato(nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
    }else {
        echo "Erro" .mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>