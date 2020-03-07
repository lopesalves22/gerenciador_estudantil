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
    <link rel="icon" href="../img/top-bar.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">

    <title>Gerenciador Estudantil</title>

    <!-- Estilos -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

     <!-- Javascript -->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- includes -->
		<?php include_once "../connect/connect.php"; ?>

    <!-- functions -->
    <?php
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      $sql = "SELECT * FROM aluno WHERE id = '$id'";
      $result =   mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
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

    <!-- Formulario -->
    </br></br>
  <div class="container">
     <h2>Editar aluno</h2>
     <div class="row">
     <div class="col-sm">
     <div class="jumbotron">
          <form method="POST" class="form-horizontal" action="php/editar.php">
            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                  <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="ip_nome" value="<?php echo $row['nome'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Curso:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="curso" name="ip_curso" value="<?php echo $row['curso'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">E-mail:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="ip_email" value="<?php echo $row['email'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Rg:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="rg" name="ip_rg" value="<?php echo $row['rg'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Cpf:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="cpf" name="ip_cpf" value="<?php echo $row['cpf'];?>"/>
                  </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Data de Nascimento:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="dtnasc" name="ip_dtnascimento" value="<?php echo $row['datadenascimento'];?>"/>
                  </div>
            </div>
        </div>
        </div>
        <div class="col-sm">
        <div class="jumbotron">
            <div class="form-group">
                <label class="control-label col-sm-2">Login:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="login" name="ip_login" value="<?php echo $row['login'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Senha:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="senha" name="ip_senha" value="<?php echo $row['senha'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Ativo:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="ativo" name="ip_ativo" value="<?php echo $row['ativo'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Cidade:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="cidade" name="ip_cidade" value="<?php echo $row['cidade'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Estado:</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" id="estado" name="ip_estado" value="<?php echo $row['estado'];?>"/>
                  </div>
            </div>
            <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-2">
                <button type="submit" class="btn btn-primary">Editar</button>
                  </div>
            </div>
        </div>
        </div>
          </form>

        </div>
      </div>









    <!-- Bootstrap javascript
    ================================================== -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
