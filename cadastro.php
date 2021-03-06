<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de Cadastro</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="main.js"></script>
        <link rel="stylesheet" href="estilos.css">
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
        <form action="Controller/UsuarioController.php" method="post" name= "form_cadastro">
        <div class="panel panel-default" style="width: 300px; margin: auto; margin-top: 10vh; ">
            <h4 style="text-align: center;"><b>CADASTRO</b></h4>
            
            <div class= "form-group" style="text-align: center;">
                <input required class="form-control" type="text" name="txtNome" id="txtNome" placeholder="Nome" style="text-align: center;"/><br>
                <input required class="form-control" type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome" style="text-align: center;"/><br>
                <input required class="form-control" type="number" name="txtIdade" id="txtIdade" placeholder="   Idade" style="text-align: center;"/><br>
                <input required class="form-control" type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" style="text-align: center;"/><br>
                <input required class="form-control" type="password" name="txtSenha" id="txtSenha" placeholder="Senha" style="text-align: center;"/><br>
            </div>
            
		    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" width="50px">Cadastrar</button>
		    <button class="btn btn-lg btn-primary btn-block btn-signin" type="reset">Limpar</button>
        </div>
        </form>
    </body>
</html>