<?php


/*conexão com banco de dados*/
include "../../connect/connect.php";

/*atribui os valores ao banco de dados*/

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

/*insert dentro do banco*/

$result_professor = "INSERT INTO professor (nome, cpf, rg, licenciado, matricula, datadenascimento, login, senha, ativo, cidade, estado)
 VALUES ('$nome', '$cpf', '$rg', '$licenciado', '$matricula', '$datadenascimento', '$login', '$senha', '$ativo', '$cidade', '$estado')";

	$result = mysqli_query($con, $result_professor);

	if ($result > 0) {
		header('Location: ../index.php');
	}
	else{
		echo "Houve um erro ao inserir os dados";
	}

?>
