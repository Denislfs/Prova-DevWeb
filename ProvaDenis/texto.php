<?php
// criando varivel para tornar mais pratico o uso do nome do arquivo txt
$arquivo = 'arquivo.txt';

// Verifica se o arquivo existe
if ( file_exists( $arquivo ) ) {

	// abri o arquivo
	$handle = fopen( $arquivo, 'r' );

    //imprimindo valores utilizando a estrutura while (enquanto), na qual recebe uma linha a partir fgets e os imprimi logo abaixo
	while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
        }
        fclose($handle);
    }

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
            body{ font: 14px sans-serif; text-align: center; }
            .container{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <div class="container">
                <p>    
                    <br><br>
                    <a href="home.php" class="btn btn-danger">Retornar</a>
                </p>
            
            </form>
        </div>   
        
    </body>
    </html>