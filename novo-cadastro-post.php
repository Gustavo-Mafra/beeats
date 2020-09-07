<?php  
    $nome = $_POST['sigNome'];
    $email = $_POST['sigEmail'];
    $senha = $_POST['sigSenha'];    
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=aps','root','');//senha aqui
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmp = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:sigNome, :sigEmail, :sigSenha)");
    $stmp->bindParam(":sigNome", $nome);
    $stmp->bindParam(":sigEmail", $email);
    $stmp->bindParam(":sigSenha", $senha);
    $stmp->execute();
    header('Location: login.php');