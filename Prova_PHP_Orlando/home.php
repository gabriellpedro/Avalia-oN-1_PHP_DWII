<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Seja bem-vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?> 
        <br>
        </b>Quais opções você deseja seguir?</h1>
    </div>
    <p>

        <a href="cadastro_madeiras.php" class="btn btn-primary">Cadastro de Madeiras</a>
        <br><br>

        <a href="logout_conta.php" class="btn btn-danger">Sair da conta</a>

        <br><br>

        <a href="leitura_dados.php" class="btn btn-primary">Ler todos os arquivos inseridos</a>
        
    </p>
    
</body>
</html>