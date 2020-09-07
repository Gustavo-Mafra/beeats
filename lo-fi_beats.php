<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lo-Fi Beats</title>
        <link rel="icon" href="imagens/icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="beeats.css">
    
    </head>
    <body>
        <!--NAVBAR-->
        <?php require_once 'nav.php'?>

        <!-- CONTEUDO -->
        <br>
        <h1>Beats de Lo-Fi</h1>
        <br>
        <!--Todos os beats nesta página são de uso livre. Clique no título da música para ser redirecioanado ao site original-->
        <p>Lo-Fi é conhecido por beats simples e calmos, sendo originado de produções de baixa qualidade (low fidelity, de onde vem a origem do nome). Aproveite e relaxe com esse beats.</p>
        <br>
        <div class="beat-info">
            <h3><a href="https://www.youtube.com/watch?v=8Th4BWkfFDE">Eric Godlow - Lovely</a></h3>
            <audio controls>            
                <source src="audios/lo-fi-beat-lovely.mpeg" type="audio/mpeg">
            </audio>
        </div>   
        <br>
        <div class="beat-info">
            <h3><a href="https://youtu.be/3df83nUZxFk">Yusei - Hopeless Romantic</a></h3>
            <audio controls>            
                <source src="audios/lo-fi-beat-hopeless-romantic.mpeg" type="audio/mpeg">
            </audio>
        </div>   
        <br>
        <div class="beat-info">
            <h3><a href="https://youtu.be/pdYJtRBPlTw">Lee - Rain</a></h3>
            <audio controls>            
                <source src="audios/lo-fi-beat-rain.mpeg" type="audio/mpeg">
            </audio>
        </div>   
        <?php require_once 'footer.php' ?>
    </body>
</html>
