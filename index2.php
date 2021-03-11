
<html lang ="pt-BR">
    <head>
        <meta charset ="utf-8" author ="Thiago Borges" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
        <link href="bigger.css" rel="stylesheet" media="screen">
        <link href="large.css" rel="stylesheet" media="screen">
        <link href="medium.css" rel="stylesheet" media="screen">
        <link href="small.css" rel="stylesheet" media="screen">
        <link href="smaller.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Inconsolata|Droid+Sans|Montserrat">
    </head>

    <script>    
        document.getElementById('nome').value='';
        document.getElementById('email').value='';
    </script>

    <body >
        <header id="topo">
            <h1>PYCOMPETITION</h1>
        </header>
        
        <section>
            <br> <h3>Cadastre-se e confirme sua inscrição</h3>
        
            <form action ="" method="post">
                    
                    <input type="text" name="nome" id="nome" maxlength="100" placeholder="Digite seu nome completo.." required="Preencha este campo" autofocus>

                    
                    <input type="email" name="email" id="email" maxlength="100" placeholder="Digite seu e-mail.." required autofocus>

                    <input type="submit" value="enviar" id="enviar" name="enviar">
            </form>
            
        </section>
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
    
    </body>


</html>