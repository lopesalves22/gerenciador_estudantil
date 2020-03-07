<?php

include "../../connect/connect.php";

$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'prof_nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'prof_cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'prof_rg', FILTER_SANITIZE_STRING);
$licenciado = filter_input(INPUT_POST, 'prof_licenciado', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'prof_matricula', FILTER_SANITIZE_STRING);
$datadenascimento = filter_input(INPUT_POST, 'prof_datadenascimento', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'prof_login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'prof_senha', FILTER_SANITIZE_STRING);
$ativo = filter_input(INPUT_POST, 'prof_ativo', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'prof_cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'prof_estado', FILTER_SANITIZE_STRING);

$resultp = "UPDATE professor set cod ='$cod', nome='$nome', cpf='$cpf', rg= '$rg', licenciado='$licenciado', matricula='$matricula',
datadenascimento='$datadenascimento', login ='$login', senha='$senha', ativo='$ativo', cidade= '$cidade', estado= '$estado' WHERE cod='$cod'";
$result_professor = mysqli_query($con, $resultp);

if(!$result_professor){
  echo "Erro ao atualizar os dados";
}
else{
  echo "Dados atualizados com sucesso";
  header('Location: ../index.php');
}



?>
