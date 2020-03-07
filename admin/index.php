<!-- Gerenciador Estudantil:
	Autor: Welton Lopes Alves
    ================================================== -->
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Welton Lopes" content="Welton Lopes">

    <title>Gerenciador Estudantil</title>

    <!-- Estilos -->
    <link href="../css/style-login.css" rel="stylesheet">


     <!-- Javascript -->

    <!-- includes -->
		<?php include "../connect/connect.php"; ?>




    <!-- functions -->
		<?php
		$result_aluno = "SELECT * FROM aluno";
		$result = mysqli_query($con, $result_aluno);
		?>
    <?php
		$result_professor = "SELECT * FROM professor";
		$resultp = mysqli_query($con, $result_professor);
		?>



  </head>

  <body background-color="#FFFACD">


    <!-- barra de navegação -->


    <nav class="navbar navbar-expand-sm bg-info navbar-dark" style="background-color: #836FFF;">
        <ul class="navbar-nav">

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="index.php">Home</a>
              <a class="dropdown-item" href="cadastrarAlunos.php">Cadastrar Alunos</a>
              <a class="dropdown-item" href="cadastrarProfessor.php">Cadastrar Professor</a>
              <a class="dropdown-item" href="../index.php">Sair</a>
            </div>
        </div>
        </ul>
    </nav>

    <!-- Tabela com os cadastros dos alunos-->

    <div class="bs-example" data-example-id="bordered-table">
    </br><h2>Alunos</h2></br>
    	<table class="table table-hover">
      		<thead>
        		<tr>
          			<th>Código</th>
          			<th>Nome</th>
          			<th>Curso</th>
          			<th>E-mail</th>
          			<th>Rg</th>
          			<th>Cpf</th>
          			<th>Data de nascimento</th>
          			<th>Login</th>
          			<th>Senha</th>
          			<th>Ativo</th>
          			<th>Cidade</th>
          			<th>Estado</th>
          			<th>Ações</th>
        		</tr>
      		</thead>
      		<tbody>

      			<?php while($row = mysqli_fetch_assoc($result)){

                echo '<tr>';
                echo '<th>'; echo $row['id']; echo '</th>';
                echo '<td>'; echo $row['nome']; echo '</td>';
          		  echo '<td>'; echo $row['curso']; echo '</td>';
          		  echo '<td>'; echo $row['email']; echo '</td>';
          		  echo '<td>'; echo $row['rg']; echo '</td>';
          		  echo '<td>'; echo $row['cpf']; echo '</td>';
          		  echo '<td>'; echo $row['datadenascimento']; echo '</td>';
          		  echo '<td>'; echo $row['login']; echo '</td>';
          		  echo '<td>'; echo $row['senha']; echo '</td>';
          		  echo '<td>'; echo $row['ativo']; echo '</td>';
          		  echo '<td>'; echo $row['cidade']; echo '</td>';
          		  echo '<td>'; echo $row['estado']; echo '</td>';
                echo '<td>';
                /*Botão deletar com modal*/
                echo "<a href='php/deletar.php?id=" . $row['id'] . "' class='btn btn-danger'>Apagar</a>";
                /*Botão editar*/
                echo "<a href='editar.php?id=" . $row['id'] . "' class='btn btn-warning'>Editar</a>";

                echo '</td>';
          		  echo '</tr>';
          	    }


          		?>


      		</tbody>
    	 </table>
      </div>
      <!-- fim da tabela com os cadastros dos alunos -->


     <!-- inicio da tabela dos professores -->
      <div class="bs-example" data-example-id="bordered-table">
      </br><h2>Professores</h2></br>
      	<table class="table table-hover">
        		<thead>
          		<tr>
            			<th>Código</th>
            			<th>Nome</th>
            			<th>cpf</th>
            			<th>Rg</th>
            			<th>Licenciado</th>
            			<th>matricula</th>
            			<th>Data de nascimento</th>
            			<th>Login</th>
            			<th>Senha</th>
            			<th>Ativo</th>
            			<th>Cidade</th>
            			<th>Estado</th>
            			<th>Ações</th>
          		</tr>
        		</thead>
        		<tbody>

        			<?php while($row_prof = mysqli_fetch_assoc($resultp)){

                  echo '<tr>';
                  echo '<th>'; echo $row_prof['cod']; echo '</th>';
                  echo '<td>'; echo $row_prof['nome']; echo '</td>';
            		  echo '<td>'; echo $row_prof['cpf']; echo '</td>';
            		  echo '<td>'; echo $row_prof['rg']; echo '</td>';
            		  echo '<td>'; echo $row_prof['licenciado']; echo '</td>';
            		  echo '<td>'; echo $row_prof['matricula']; echo '</td>';
            		  echo '<td>'; echo $row_prof['datadenascimento']; echo '</td>';
            		  echo '<td>'; echo $row_prof['login']; echo '</td>';
            		  echo '<td>'; echo $row_prof['senha']; echo '</td>';
            		  echo '<td>'; echo $row_prof['ativo']; echo '</td>';
            		  echo '<td>'; echo $row_prof['cidade']; echo '</td>';
            		  echo '<td>'; echo $row_prof['estado']; echo '</td>';
                  echo '<td>';
                  /*Botão deletar com modal*/
                  echo "<a href='php/deletarProfessor.php?cod=" . $row_prof['cod'] . "' class='btn btn-danger'>Apagar</a>";
                  /*Botão editar*/
                  echo "<a href='editarProfessor.php?cod=" . $row_prof['cod'] . "' class='btn btn-warning'>Editar</a>";

                  echo '</td>';
            		  echo '</tr>';
            	    }


            		?>


        		</tbody>
      	 </table>
        </div>
        <!-- fim da tabela dos professores -->




    
  </body>
</html>
