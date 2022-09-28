<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leitura Informações</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <p>
    <h1>Segue a listagem dos dados presentes em nosso arquivo:</h1>
    <?php
        $file_name = 'arquivos_madeira.txt';
        if ( file_exists( $file_name ) ) {
            $handle = fopen( $file_name, 'r' );
            $ler = fread( $handle, filesize($file_name) );
            echo $ler;
            fclose($handle);
    }
    ?>
    </p>
    <p>
        <a href="home.php" class="btn btn-danger">Voltar ao Home</a>  
        <br><br>
        
        
        <a href="cadastro_madeiras.php" class="btn btn-primary">Voltar ao Cadastro</a>
    </p>
    
</body>
</html>