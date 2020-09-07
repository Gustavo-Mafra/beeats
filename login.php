<!DOCTYPE html>
<html>
    <!-- Esta página quero fazer posteriormente com mais calma, a fim de fazê-la funcionar com banco de dados-->
    <head>
        <meta charset="utf-8">
        <title>Beeats | Fazer Login</title>
        <link rel="icon" href="imagens/icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="beeats.css">
    </head>
    <body>
        <?php require_once 'nav.php' ?>
        <br>
        <div class="left login">
            <form method="POST" class="left">                  
                <label for="email">E-mail:</label>
                <input type="email" id="logEmail" name="logEmail"><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="logSenha" name="logSenha"><br><br>                
                <input type="submit" id="submitLog" value="Fazer Log-in">
            </form>        
        </div> 
        <div class="right signup">
            <form method="POST" class="right" action="novo-cadastro-post.php">     
                <label for="nome">Nome:</label>
                <input type="text" id="sigNome" name="sigNome"><br><br>             
                <label for="email">E-mail:</label>
                <input type="email" id="sigEmail" name="sigEmail"><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="sigSenha" name="sigSenha"><br><br>       
                <input type="submit" id="submitSig" value="Cadastrar-se">
               
            </form>        
        </div> 
        <?php require_once 'footer.php' ?>
    </body>
</html>