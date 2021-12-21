<?php
$host ="localhost";
$user = "postgres";
$pass = "root";
$db = "mydata";
include "functions.php";


$con = pg_connect("host=$host port=8080 dbname=$db user=$user password=$pass")
or die ("could not connect to server\n");

if(!$con){
    echo "Error: Unable to open database \n";
} else {
    echo 'Enviado com Sucesso';
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];

    $query = "INSERT INTO registro (nome, sobrenome, cpf, cidade) 
    VALUES ('$nome','$sobrenome','$cpf','$cidade')";
    $result = pg_query($con,$query);
    }
pg_close($con);

?>

