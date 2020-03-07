<?php

include "../../connect/connect.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result = "DELETE FROM aluno WHERE id='$id'";
$result_aluno = mysqli_query($con, $result);

if(!$result_aluno){
  echo "Erro ao atualizar os dados";
}
else{
  echo "Aluno deletado com sucesso";
  header('Location: ../index.php');
}


?>
