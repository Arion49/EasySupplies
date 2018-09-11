 <?php
 require_once('openBD.php');



 ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <meta charset="utf-8">

 <title>Easy Supplies - Minhas Assinaturas</title>

 <link rel="stylesheet" type="text/css" href="css.css">

 <link rel="stylesheet" href="animate/animate.css">

 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!--Import materialize.css-->
 <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

 <!-- Icone do titulo -->
 <link rel="shortcut icon" type="image/png" href="img/favicon.png">

 <meta name="description" value="Suprimentos fáceis, trazendo o melhor dos produtos orgânicos da forma mais fácil para você!">

 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <link href="https://fonts.googleapis.com/css?family=Poppins|Slabo+27px" rel="stylesheet">



 <body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;overflow-x: hidden;overflow-y: visible;">

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
  opacity: 0.3" class="animated infinite pulse slower">
</span>

<?php
include_once("nav.php");

$usuarios_con = $_SESSION['id'];
$sqlConsultaUsuario = mysqli_query($conexao, "SELECT * FROM minha_ass WHERE id_usuario='$usuarios_con'");



?>

<div class="width1000" style="color: white; padding-top: 5px; margin-left: 9%;"> <h5>Minhas assinaturas</h5> </div>

<div class="width1000 z-depth-4" style="margin-left: 9%; margin-right: 9%">

  <div class="light-green darken-1" id="id-table" style="height: 100%; margin-bottom: 30px;">
    <div class="container-fluid">


      <div class="row">

        <table class="col s12 centered striped"id="sumir-table">

          <!-- Cabeçalho -->
          <thead style="font-size: 17px;">
            <tr>
              <th>NOME DA ASSINATURA</th>
              <th>QUANTIDADE</th>
              <th>TIPO</th>
              <th>PREÇO (unid)</th>
              <th>ENTREGA</th>
            </tr>
          </thead>

          <tbody>
            <?php

            if(isset($_POST['apagar']))
            {

              mysqli_query($conexao,"DELETE FROM minha_ass WHERE id='".$_POST['apagar']."'");

               echo "<script>window.location.href = 'minhas_assina.php';</script>";

            }

            while($consultando = $sqlConsultaUsuario->fetch_assoc())
            {
              ?>
              <tr>
                <td style="border-right: 1px solid #558b2f;"><?php echo $consultando['titulo_produto']; ?></td>
                <td style="border-right: 1px solid #558b2f;"><?php echo $consultando['quantidade'] ;?></td>
                <td style="border-right: 1px solid #558b2f;"><?php echo $consultando['tipo']; ?></td>
                <td style="border-right: 1px solid #558b2f;"><?php echo $consultando['preco_produto']; ?></td>
                <td style="border-right: 1px solid #558b2f;"><?php echo $consultando['modo_entrega']; ?></td>
                <td>
                  <form method="post">
                    <button 
                    name="apagar"
                    type="submit" 
                    value="<?php echo $consultando['id']; ?>" 
                    style="background-color: transparent; border: none; cursor: pointer;">
                      <a 
                      class="tooltipped" 
                      data-position="bottom" 
                      data-tooltip="Cancelar assinatura">
                        <i class="material-icons red-text">close</i>
                      </a>
                    </button>
                  </form>
                </td>
              </tr>


            <?php }

            $vazio = mysqli_num_rows($sqlConsultaUsuario);
            if ($vazio == 0) 
            {
              ?>

              <div class="col s12 center-align animated fadeInUp" style="margin-top: 50px; margin-bottom: 50px;">
                
                <h4 class="animated fadeInUp" style="font-family: 'Poppins', sans-serif;">Você não possui nenhuma assinatura</h4>

                <div style="margin-top: 50px;">
                  <img class="center-align animated fadeInUp" src="img/caixa-vazia.png">
                </div>
                

                <a href="assina.php" class="btn btn-large waves-effect z-depth-2 animated fadeInUp" 
                style="
                margin-top: 40px; 
                width: 55%; 
                background-color: transparent;
                border: 1px solid black;
                color: black !important;
                ">Ir às compras</a>

              </div>

              <script type="text/javascript">
                document.getElementById('sumir-table').style.display = 'none';

               
              </script>

              <?php                        
            }
            else{
              ?>

              <script type="text/javascript">
                 document.getElementById('id-table').style.paddingBottom = '50px';
              </script>

              <?php
            }          

            ?>
          </tbody>

        </table>
        
      </div>


    </div>

  </div>
  
</div> <!-- Fim container conteudo todo -->







<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript" src="js.js"></script>
<?php  
  include_once 'footer.html';
?>


</body>


</html>