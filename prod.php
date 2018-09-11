
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

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

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
opacity: 0.4" class="animated infinite pulse slower">
</span>  


<body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;">

  <?php
  include_once('nav.php');


  $imagem_assinatura = mysqli_query($conexao, "SELECT * FROM ass_detalhes WHERE id_ass='".$_GET['produto_pesquisa']."'  LIMIT 5");
  
  if(is_numeric($_GET['produto_pesquisa']))
  {
    $consultar_assinatura = mysqli_query($conexao, "SELECT * FROM assinaturas WHERE id='".$_GET['produto_pesquisa']."' LIMIT 1");
    $recebe_assinatura = mysqli_fetch_assoc($consultar_assinatura);
  }else
  {
    die(mysqli_error($conexao));
  }

  ?>

  <div class="containera-fluid width1000" 
  style="
  background-color: white; 
  margin-top: 15px; 
  margin-left: 9%; 
  margin-right: 9%">

  <div class="row">

    <div class="col s12  m12 l6">
      <div class="carousel carousel-slider" style="margin-top: 22px;">
        <?php
        while($imagem = $imagem_assinatura->fetch_assoc())
        {
          ?>
          <a class="carousel-item">

            <img 
            class="deta-responsivo" 
            src="<?php echo $imagem['url']; ?>" 
            style=" width: 100%; height: 350px;">

          </a>
        <?php  } ?> 

      </div>
    </div>

    <div class=" col m12 l6  z-depth-3" style="padding-bottom: 15px; ">

      <input id="titulo" name="titulo" 
      style="
      color: black; 
      font-weight: bold; 
      font-size:26px; 
      border: 0;
      text-align: center;
      margin-top: 10px;
      font-family: 'Poppins', sans-serif;
      pointer-events: none" 
      type="text"
      value="<?php echo $recebe_assinatura['nome_produto']; ?>">

      <div class=" col s12" style="padding-top: 15px;">

        <div class="col s6" style=" margin-left: 0; padding: 0">


          <div class="col s12" style="font-size: 11px; margin-left: 0px; padding: 0">
            Valor
          </div>

          <div class="col s12" style="margin-left: 0px; padding: 0">

            <input type="text" name="valor" 
            style="
            pointer-events: none; 
            font-size: 15pt; 
            color: darkgreen;
            font-weight: bold;
            border: 0" 
            value="<?php echo "R$".$recebe_assinatura['preco']; ?>">            

          </div>

        </div>

        <form 
      action="verificacao_compra.php?id_produto=<?php echo $_GET['produto_pesquisa']; ?>&titulo_produto=<?php echo $recebe_assinatura['nome_produto']; ?>&preco_produto=<?php echo $recebe_assinatura['preco']; ?>" method="post" id="comprar-form">

        <div class="col s6 right-align">

          <div class="col s12" style="font-size: 11px; margin-left: 0px; padding: 0;">
            Tipo do pacote
          </div>

          <div class="col s12 right-align" style="margin-left: 0px; padding: 0">

            
            <input type="text" name="tipo" value="<?php echo $recebe_assinatura['tipo'];?>"
            style="
            pointer-events: none;
            text-align: right !important; 
            font-size: 15pt; 
            color: purple;
            font-weight: bold;
            border: 0;">
            
            </div>

          </div>


        </div>

        <br><hr style="margin-top: 80px">

        <div class="col s12" style="padding: 0; margin: 0">

          <div class="col s12" style="font-size: 11px;margin: 0; ">
            Detalhes
          </div>

          <div class="col s12" style="margin: 0; padding: 0;">
            <p 
            type="text"
            style="
            pointer-events: none;
            border: 0;
            font-size: 13pt;
            text-align: justify; 
            text-indent: 3px;
            padding: 5px" 
            value="">
              <?php echo $recebe_assinatura['descricao_produto']; ?>
            </p>
          </div>
        </div>

        <hr style="margin-top: 120px">

      <legend style="margin-left: 10px">Forma de Pagamento:	
       <span>
         <label>
           <input name="group1"  value="Boleto" type="radio" checked />
           <span>Boleto</span>
         </label>&nbsp;
       </span>
     </legend>

     <hr>

     <input type="number" min="1" max="3" required name="kits" placeholder=" Quantidade de pacotes">
     <select required class="browser-default grey lighten-3" name="entregas_tipo"  required="required">
       <option disabled selected value="">&emsp; Vezes ao mês</option>
       <option value="Mensal">Mensal</option>
       <option value="Quinzenal">Quinzenal</option>
     </select>

     <div class="col s12 center-align" style="padding: 0; margin: 0">

      <div class="col s12" style="margin-bottom: 15px;margin-top: 5px">Data de entrega</div>

       <div class="col s6" style="padding: 0; margin: 0">
         <b>Quinzenal:</b> dias 11 e 26
       </div>

       <div class="col s6" style="padding: 0; margin: 0">
         <b>Mensal:</b> dia 11
       </div>

     </div>

     <hr style="margin-top: 65px">
     <button class="waves-effect purple darken-4 btn"  name="enviar_btn" style="border-color: black 1px;" id="comprar"> Comprar
     </button>
   </form>    

 </div>
 <div class=" col s12 m2 l1 "></div>
</div> 
</div> 
<!--  //////////////////////////////////////////////////////////////////// !-->        



<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript" src="js.js"></script>

<?php

include_once ("footer.html");

?>
</body>
</html>