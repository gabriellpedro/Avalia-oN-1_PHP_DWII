<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'UserFatec';
             header("location: home.php");
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="wrapper" class="css.selector">
        <h1>Login NitMadeiras</h1>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="username" class="form-control" required>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <br>
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>    
</body>
</html>
