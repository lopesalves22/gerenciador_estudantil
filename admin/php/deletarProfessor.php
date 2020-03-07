<?php

include "../../connect/connect.php";

$cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);

$resultp = "DELETE FROM professor WHERE cod='$cod'";
$result_professor = mysqli_query($con, $resultp);

if(!$result_professor){
  echo "Erro ao atualizar os dados";
}
else{
  echo "Professor deletado com sucesso";
  header('Location: ../index.php');
}


?>
