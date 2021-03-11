<?php

    $hostname = "form.criuxypwt58s.sa-east-1.rds.amazonaws.com";
    $user = "admin";
    $password = "D4rk0102";
    $database = "testepython";
    $conexao = mysqli_connect($hostname,$user,$password,$database);


    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO teste (nome, email) VALUES ('$nome', '$email') ";
       
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }
    
    
    


    




?>