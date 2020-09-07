<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Beeats</title>
        <link rel="icon" href="imagens/icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="beeats.css">
    
    </head>
    <body>
        <!-- *Obs: todos os áudios usados são gratuitos ou de algum amigo que permitiu o uso*-->

        <!--NAVBAR-->
        <?php require_once 'nav.php'?>

        <!--CONTEUDO-->
        <br>
        <h1>Bem vindo ao Beeats</h1>
        <br>
        <h2>Destaques</h2>
        <br>
        <hr>

        <table>

          <tr>
            <td>
              <a href="lo-fi_beats.php">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="imagens/lo-fi.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5><small>Gêneros</small></h5>
                        <h5 class="card-title">Beats de Lo-Fi</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </td> 
                
            <td>
              <a href="prodVini.php">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="imagens/vinivaliati.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5><small>Produtores/ Beatmakers</small></h5>
                        <h5 class="card-title">Vini Valiati</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>  
            </td>

                 
            <td>
              <a href="duzzTypeBeat.php">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="imagens/duzztype.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5><small>Type Beats</small></h5>
                        <h5 class="card-title">Duzz type beat</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </td>
            

            <tr>

            <td>
              <a href="beatsGrat.php">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="imagens/freebeat.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5><small>Categorias</small></h5>
                        <h5 class="card-title">Beats Gratuitos</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </td> 
                
            <td>
              <a href="boomBapBeats.php">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="imagens/boombapbeat.png" class="card-img" alt="Beats de Boom Bap">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5><small>Gêneros</small></h5>
                        <h5 class="card-title">Beats de Boom Bap</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </td>

                 
            <!--<td>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters" >
                  <div class="col-md-4">
                    <img src="imagens/trapbeat.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5><small>Beat Original</small></h5>
                      <h5 class="card-title">Default Beat #01</h5>
                    </div>
                  </div>
                </div>
              </div>
            </td>-->

          </tr>   
          
             
        </table>         
        
        
        <?php require_once 'footer.php' ?>
    </body>
</html>