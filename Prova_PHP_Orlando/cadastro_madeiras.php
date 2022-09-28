<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Informações</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
        <h2>Cadastro | Chapas de Madeira</h2>
        <p>Insira as informações correspondentes às chapas.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome da Madeira</label>
                <input type="text" name="nome_madeira" class="form-control"required placeholder="Eucalipto">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Expessura da Chapa</label>
                <input type="text" name="expessura_chapa" class="form-control" required placeholder="3mm">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Nome da Empresa Fabricante</label>
                <input type="text" name="fabricante_madeira" class="form-control" required placeholder="Duratex">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <p>
                <a href="leitura_dados.php" class="btn btn-primary">Ler todos as informações inseridas</a>
                <br><br>
                <a href="home.php" class="btn btn-danger">Voltar ao Home</a>
            </p>
        </form>
    </div>  

    <?php
        $file_name = "arquivos_madeira.txt";
        if(!file_exists($file_name)){
            $handle = fopen($file_name, "w");
        } else{
            $handle = fopen($file_name, "a");
            fwrite($handle, "Nome da madeira: ".$_POST['nome_madeira'].PHP_EOL);
            fwrite($handle, " | Expessura da Chapa: ".$_POST['expessura_chapa'].PHP_EOL);
            fwrite($handle, " | Nome da Empresa Fabricante: ".$_POST['fabricante_madeira'].PHP_EOL);
            fwrite($handle, PHP_EOL);
            fwrite($handle, "<br>");
            fwrite($handle, "<br>");
            fflush($handle);
            fclose($handle);
        }
    ?>
</body>
</html>