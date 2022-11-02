<?php
$servidor= "localhost";
$usuario= "root";
$senha= "";
$dbname= "contato_clientes";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Houve um erro: ".msqli_connect_error());
}

?>
