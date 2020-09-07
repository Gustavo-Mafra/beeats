<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Beeats| Beats de Boombap</title>
        <link rel="icon" href="imagens/icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="beeats.css">
    </head>
    <body>
         <!--NAVBAR-->
         <?php require_once 'nav.php'?>
         <br>
         <p class="title">Boom Bap</p>
         <p>O Boom Bap é um estilo de produção muito usado nos anos 80 e 90, 
             e é usado até hoje em meio ao Rap. Seu nome vem das onamotopeia dos 
             instrumentos usados na sua produção.</p> 
             <!--Deixei desse jeito para ser melhor para ler-->
             <br>
             <div class="beat-info">
                <h3><a href="https://youtu.be/5JaUI0d0M7A">BEATOWSKI - Tobacco</a></h3>
                <audio controls>            
                    <source src="audios/boom-bap-beat-tobacco.mpeg" type="audio/mpeg">
                </audio>
             </div>  
             <br>
             <div class="beat-info">
                <h3><a href="https://youtu.be/i8ksXib7cN8">Jiem - 90's</a></h3>
                <audio controls>            
                    <source src="audios/boom-bap-beat-90s.mpeg" type="audio/mpeg">
                </audio>
             </div>  
             <br>
             <div class="beat-info">
                <h3><a href="https://youtu.be/EfqBlHWTaOk">LethalNeedle - Royalty</a></h3>
                <audio controls>            
                    <source src="audios/Joey-badass-wu-tang.mp3" type="audio/mpeg">
                </audio>
             </div>
             <?php require_once 'footer.php' ?>
    </body>
</html>
