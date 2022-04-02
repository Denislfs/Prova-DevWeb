<?php

//criando variaveis na qual usuario e senha serao fixos
$login = 'denis';
$senha = 'denis123';

//
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    //comparando o conteudo dos campos digitados pelo usuario, se são iguais a variavel caso for determina uma variavel global loggedin 
    //com o valor TRUE, senão loggedin recebe FALSE
    if($_POST['username'] == $login and $_POST['password'] == $senha){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Denis';
         header("location: home.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!-- Codigo html e css para criaçao do formulario-->
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <!-- formulario criado utilizando a funcao htmlspecialchars para converte carecteres especiais 
        assim evitando invasores de injetar codigo html-->
        <form style="text-align: center"; action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="denis">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="denis123">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>