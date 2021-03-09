<?php




$hostname = "form.criuxypwt58s.sa-east-1.rds.amazonaws.com";
$user = "admin";
$password = "D4rk0102";
$database = "formulario";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(isset($_POST['enviar'])){
    
}

if (!$conexao){
    print "Falha na conexão com o banco de dados";

}



?>