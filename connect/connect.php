<?php
/*conexão com banco de dados*/

$server = "localhost";
$user = "root";
$password = "root";
$bd = "bdge";

$con = new mysqli($server, $user, $password, $bd);
return $con;
/*con e a variavel onde sera retornado todas as vezes que precisar se conectar com o banco de dados*/
?>




