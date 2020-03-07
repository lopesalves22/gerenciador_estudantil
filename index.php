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
    

<!-- includes -->
<?php require "connect/connect.php" ?>
<?php require "connect/form-login.php" ?>
<?php require "config.php" ?>


</HEAD>

<link rel="stylesheet" href="css/style-login.css">


<body>



	
        <div class="container">
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

            <div class="content">
                <!-- formulario de login -->
                <div id="login">

                    <form name="form" method="post" action="" enctype="multipart/form-data" class="form-signin">
                    
                    <h1>Login</h1>
                    
                    <p>
                    <label for="codeid">CODIGO DE ACESSO:</label>
                    <input type="text" name="code" id="codeid" class="" placeholder="Código de acesso" style="min-width:300px;" required autofocus/>
                    </p>

                    <p>
                    <label for="senha">SENHA:</label></br>
                    <input type="password" name="password" id="senha" class="" placeholder="Password" style="min-width:300px;" required/>
                    </p>

                    <p>
                    <label>
                        <input type="checkbox" value="remember-me">Lembrar me
                    </label>
                    </p>

                    <p>
                    <input class="" type="submit" name="button" value="Entrar" style="min-width:300px;"/>
                    </p>

                    <p class="link">Ainda não tem conta?
                        <a href="#paracadastro">Cadastre-se</a>
                    </p>

                    </form>
                </div>

                <!-- formulario de cadastro -->
                <div id="cadastro">
                    <form method="post" action="">

                    <h1>Cadastro</h1>

                    <p> 
                        <label for="nome_cad">Seu nome</label>
                        <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="digite seu primeiro nome" />
                    </p>
                    <p> 
                        <label for="email_cad">Seu e-mail</label>
                        <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
                    </p>
                    <p> 
                        <label for="dec_al_prof">Aluno/Professor</label>
                        <input id="dec_al_prof" name="dec_al_prof" required="required" type="text" placeholder="aluno, ou professor"/> 
                    </p>
                    <p> 
                        <input type="submit" value="Cadastrar"/> 
                    </p>
                    <p class="link">Já tem conta?
                        <a href="#paralogin"> Ir para Login </a>
                    </p>

                    </form>
                </div>
            </div>
        </div>




</body>
</HTML>
