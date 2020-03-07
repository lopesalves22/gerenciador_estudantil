<?php

include "../../connect/connect.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'ip_nome', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'ip_curso', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'ip_email', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'ip_rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'ip_cpf', FILTER_SANITIZE_STRING);
$datadenascimento = filter_input(INPUT_POST, 'ip_datadenascimento', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'ip_login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'ip_senha', FILTER_SANITIZE_STRING);
$ativo = filter_input(INPUT_POST, 'ip_ativo', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'ip_cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'ip_estado', FILTER_SANITIZE_STRING);

$result = "UPDATE aluno set id ='$id', nome='$nome', curso='$curso', email= '$email', rg='$rg', cpf='$cpf',
datadenascimento='$datadenascimento', login ='$login', senha='$senha', ativo='$ativo', cidade= '$cidade', estado= '$estado' WHERE id='$id'";
$result_aluno = mysqli_query($con, $result);

if(!$result_aluno){
  echo "Erro ao atualizar os dados";
}
else{
  echo "Dados atualizados com sucesso";
  header('Location: ../index.php');
}



?>
