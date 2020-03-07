<?php
/*formulario login verificar se possui um POST no button*/

if (isset($_POST['button'])) {
	$code = $_POST['code'];
	$password = $_POST['password'];

/*caso o formulário esteja vazio retorna as mensagens*/
	if ($code == '') {
		echo "<h2>Por favor, digite o código de acesso</h2>";
	}

	if ($password == '') {
		echo "<h2>Por favor, digite a senha</h2>";
	}

/*realiza consulta no banco de dados e da o retorno na variavel result*/

	else{
		$sql = "SELECT * FROM login WHERE code = '$code' AND senha = '$password'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {

/*percorre todos os dados da tabela e verifica status e demais informações*/
			while($res_1 = mysqli_fetch_assoc($result)){
				$status = $res_1['status'];
				$code = $res_1['code'];
				$senha = $res_1['senha'];
				$nome = $res_1['nome'];
				$painel = $res_1['painel'];

				if($status == 'inativo'){
					echo "<h2>usuario inativado</h2>";
				}
/*iniciando uma sessão*/
				else{
					session_start();
					$_SESSION['code'] = $code;
					$_SESSION['nome'] = $nome;
					$_SESSION['senha'] = $senha;
					$_SESSION['painel'] = $painel;

/*se o painel for admin ele ira direcionar para o admin caso contrário ira para outro direcionamento*/

					if($painel == 'admin'){
echo "<script language='javascript'>window.location='admin';</script>";
					}
					if($painel == 'aluno'){
echo "<script language='javascript'>window.location='aluno';</script>";
					}
					if($painel == 'professor'){
echo "<scrit language='javascript'>window.location='professor';</script>";
					}

				}
			}


		}
		else{
			echo "Dados incorretos!";
		}
	}


}
?>
