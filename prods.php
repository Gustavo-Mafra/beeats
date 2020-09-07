<?php 
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=aps','root','');//senha aqui
    $query = "SELECT * FROM usuarios;";
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Beeats | Beatmakers </title>
        <link rel="icon" href="imagens/icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="beeats.css">
    </head>
    <body>
        <?php require_once 'nav.php' ?>
        <br>
            <table class="table">
                <thread>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thread>
                <tbody>
                    <?php for($i=0; $i < count($lista); $i++){ ?>

                    <tr>
                        <th scope="row"><?php echo $lista[$i]['id']?></th>
                        <td><?php echo $lista[$i]['nome'] ?></td>                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
                   

        <?php require_once 'footer.php' ?>
    </body>
</html>