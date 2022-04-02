<?php

//criando variaveis para receber valores via $_POST
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$ra = $_POST['ra'];
$arquivo = 'arquivo.txt';


//verificando se o arquivo existe ou não, no caso de não existir o arquivo é criado e aberto para leitura e escrita
        $filename = $arquivo;
        if(!file_exists($arquivo)){
            $handle = fopen($arquivo, "w");
        } else {
            $handle = fopen($arquivo, "a");
        }
//escrevendo o conteudo das variaveis para o stream de arquivo apontado por handle
        fwrite($handle, "Nome: ".$nome." - ");
        fwrite($handle, "Sobrenome: ".$sobrenome." - ");
        fwrite($handle, "Ra: ".$ra."\r\n");
        fflush($handle);
        fclose($handle);
        $handle = fopen($arquivo, "r");       
        fclose($handle);

 header("Location: home.php");


?>