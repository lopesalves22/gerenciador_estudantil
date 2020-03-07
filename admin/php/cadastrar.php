<?php


/*conexão com banco de dados*/
include "../../connect/connect.php";

/*atribui os valores ao banco de dados*/

$nome = filter_input(INPUT_POST, 'ip_nome', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'ip_curso', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'ip_email', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'ip_rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'ip_cpf', FILTER_SANITIZE_STRING);
$dtnascimento = filter_input(INPUT_POST, 'ip_dtnascimento', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'ip_login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'ip_senha', FILTER_SANITIZE_STRING);
$ativo = filter_input(INPUT_POST, 'ip_ativo', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'ip_cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'ip_estado', FILTER_SANITIZE_STRING);

/*insert dentro do banco*/

$result_aluno = "INSERT INTO aluno (nome, curso, email, rg, cpf, datadenascimento, login, senha, ativo, cidade, estado, created) VALUES ('$nome', '$curso', '$email', '$rg', '$cpf', '$dtnascimento', '$login', '$senha', '$ativo', '$cidade', '$estado', NOW())";

	$result = mysqli_query($con, $result_aluno);

	if ($result > 0) {
		header('Location: ../index.php');
	}
	else{
		echo "Houve um erro ao inserir os dados";
	}

?>