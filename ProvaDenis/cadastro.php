<?php
//iniciando uma nova sessão
session_start();
//Verificando se o usuario está logado caso não ele é redirecionado para o index.php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .container{ width: 350px; padding: 20px;  }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastras</h2>
        <p>Cadastro de Alunos.</p>
        <!-- Formulario utilizando metodo post para enviar dados para outros formularios-->
        <form action="arquivos.php" method="post" onSubmit="alert('Dados enviado com Sucesso')">
            <div class="form-group">
                <label>Nome do Usuario</label>
                <input type="text" name="nome" class="form-control" id="nome">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="sobrenome">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>RA do Aluno</label>
                <input type="text" name="ra" class="form-control" id="ra">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <p>    
                <a href="home.php" class="btn btn-danger">Retornar</a>
            </p>
        
        </form>
    </div>   
    
</body>
</html>