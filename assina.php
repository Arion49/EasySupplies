<?php
require_once('openBD.php');

  $consulta_produtos = mysqli_query($conexao, "SELECT * FROM assinaturas ");


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Easy Supplies - Assinaturas</title>

  <link rel="stylesheet" type="text/css" href="css.css">

  <link rel="stylesheet" href="animate/animate.css">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Icone do titulo -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <meta name="description" value="Suprimentos fáceis, trazendo o melhor dos produtos orgânicos da forma mais fácil para você!">

  <!-- Import hover.css -->
  <link rel="stylesheet" type="text/css" href="hover/css/hover.css">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<span id="background-img" 
style="
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
z-index: -1;
position: fixed; 
max-height: 1170px;
height: 1170px;
width: 100%;
opacity: 0.5" class="animated infinite pulse slower">
</span>  


<body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;">

  <?php
  include_once('nav.php');
  ?>

  <div class="container-fluid width1000" 
  style="
  padding-top: 8px; 
  padding-bottom: 18px;
  margin-left: 9%; 
  margin-right: 9%">

    <div style="color: white; margin-left: 10px; padding-bottom: 5px;"><h5>Assinaturas</h5></div>

    <div class="row grey lighten-3 animated fadeIn faster z-depth-4" style="padding-top: 15px; padding-bottom: 18px;">
    <?php
      while($ass = $consulta_produtos->fetch_assoc())
      {
    ?>
      <div class="col s12 m6 l4">

        <div class="card animated fadeIn">

          <div class="card-image z-depth-3 responsive" style="margin-bottom: 15px;">
            <img style=" height: 250px" src="<?php echo $ass['url']; ?>">

            <div class="card-title col s12" style="color: white; font-family: 'Poppins', sans-serif;">
              <b class="center-align" style="text-shadow: 0.1em 0.1em 0.1em black">
              
                <?php echo $ass['nome_produto']; ?>
                  
              </b>
            </div>

          </div>

          <div style=" height: 100%;">            

              <div class="col s6" style="padding: 0;">

                <div class="col s12" style="font-size: 11px; margin-bottom: 4px">
                  Preço ao mês
                </div>

                <div class="col s12">
                  <b style="font-size: 18px; color: purple;">
                    RS <?php echo $ass['preco'] ?> 
                  </b>
                </div>

              </div>

              <div class="col s6 right-align">

                <div class="col s12" style="font-size: 11px; margin-bottom: 4px;">

                  Tipo do pacote
                  
                </div>

                <div class="col s12">

                  <!-- <a class="btn tooltipped" data-position="bottom" data-tooltip="I am a tooltip">Hover me!</a> -->

                  <a style="color: purple !important;font-size: 20px !important; margin: 0; padding: 0"
                  class="tooltipped" 
                  data-position="bottom" 
                  data-tooltip="

                  <?php if($ass['tipo'] =='Pequeno'){

                    ?>
                    O pacote do tipo pequeno possui 10 variações
                    <?php

                  }else if($ass['tipo'] == 'Médio'){

                    ?>
                    O pacote do tipo médio possui 20 variações
                    <?php

                  }else{
                    ?>
                    O pacote do tipo grande possui 35 variações
                    <?php

                  } ?>

                  ">

                      <i style="font-size: 25px !important;" class="material-icons purple-text">
                        arrow_drop_down
                      </i>

                      <i style="font-style: normal;">
                        <?php echo $ass['tipo']; ?>
                      </i>
                  </a>

                </div>
                
              </div>

              <div class="col s12" style="margin-top: 15px; font-size: 11px; margin-bottom: 4px">
                
                Descrição

              </div>

              <div class="col s12 indigo lighten-4" style="padding-bottom: 10px;">
                 <p style=" height: 70px; text-indent: 0.5cm"><?php echo $ass['descricao_produto']; ?></p>
              </div>
            
          </div>

          <a class="center-align" href="prod.php?produto_pesquisa=<?php echo $ass['id']; ?>">

            <div style="color: purple; font-size: 18px; width: 100%;" class="card-action hvr-bounce-to-top">

              Mais detalhes

              <i class="material-icons left animated rotateIn" style="font-size:25px">add</i>

            </div>

          </a>
        </div>

      </div>

    <?php } ?>


    </div>

  </div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript" src="js.js"></script>

<?php

include_once ("footer.html");

?>
</body>
</html>