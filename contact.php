 <!DOCTYPE html>
  <html lang="pt-br">

      <meta charset="utf-8">

      <title>Contatos - Easy Supplies</title>

      <link rel="stylesheet" type="text/css" href="css.css">

      <link rel="stylesheet" href="animate/animate.css">

      <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

        <!-- Icone do titulo -->
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <meta name="description" value="Suplimentos fáceis, trazendo o melhor dos produtos organicos da forma mais facil para você!">

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
        ?>

        <div class="container-fluid width100" style="margin-top: 5px;margin-right: 9%;margin-left: 9%;">

          <div class="row"> <!-- Row conteudo todo -->

            <div class="col l7 m12" style="margin: 0; padding: 0; float: left; z-index: 50;"> <!-- Parte 1 -->

              <div class="col s12" style="text-align: center;">

                <h5 style="color: white; font-weight: bold;text-shadow: black 0px 0px 5px;">Nossas Informações</h5>

              </div>

              <div class="col s12 z-depth-4" 
              style="margin-bottom: 30px; 
              height: 800px;
              background-color: #e5e5e5;
              ">
                    
                <div class="row">

                  <form class="col s12">

                    <div class="row">

                      <div class="input-field col s12 center-align">
                        <h5
                        style="font-weight: bolder; font-family: 'Poppins', sans-serif;"> 
                          Endereço 
                        </h5>

                        <div id="map" style="margin: 0; padding: 0">
                          <iframe src="https://goo.gl/2B1qfd" frameborder="0" 
                          style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
                        </div>

                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;  padding: 0; margin: 0;">Av. Amazonas, 55 - Centro, Betim - MG, 32600-075</p>

                      </div>

                    </div>

                    <div class="row" style=" padding: 0; margin: 0;">

                      <div class="input-field col s12 center-align" style=" padding: 0; margin: 0;">

                        <h5 
                        style="font-weight: bolder;font-family: 'Poppins', sans-serif;
                        padding: 0; 
                        margin: 0;"> 
                          Telefones para Contato
                        </h5>

                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31) 98730-3500</p>
                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31) 97109-4797</p>
                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31) 99181-4597</p>
                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31) 99601-7384</p>

                      </div>

                    </div >

                    <div class="row" style=" padding: 0; margin: 0;">

                     <div class="input-field col s12 center-align" style=" padding: 0; margin: 0;">

                        <h5 style="font-weight: bolder;font-family: 'Poppins', sans-serif;"> Email </h5>
                        <p style="font-family: 'Slabo 27px', serif; font-size: 13pt; padding: 0; margin: 0;">easysuppliestcc@gmail.com</p>
                      </div>

                    </div>



                  </form>
                </div>

              </div>

            </div>  <!-- Fim PARTE 1 -->


            <div class="col l5 m12" style="margin: 0; padding: 0; z-index: 30;" id="cont-2"> <!-- Início PARTE 2 -->

              <div class="col s12 cont-2" style=" text-align: center">
                <h5 style="color: white; font-weight: bolder; text-shadow: black 0px 0px 5px;">Entre em contato</h5>
              </div>
               

              <div class="col s12 z-depth-4 cont-2" style="margin-bottom: 30px; height: 800px;  background-color: white;">
                    
                <div class="row">

                  <form class="col s12" action="envia_fale.php" method="post" name="form">

                      <div class="row">
                        <div class="col"> </div>
                          <div class="input-field col s10" style="margin-top: 25px;">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" required="required" type="text" class="validate" name="remetenteNome" pattern="[A-Za-z\s]+$">
                            <label for="icon_prefix">Nome</label>
                            <span class="helper-text" data-error="O nome está em formato incorreto" ></span>
                          </div>     
                      </div>


                      <div class="row">
                         <div class="col"> </div>
                          <div class="input-field col s10">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" required="required" type="text" placeholder="(99)99999-9999" class="validate" name="remetenteTel" maxlength="14" pattern="(\([0-9]{2}\))([9]{1})?([0-9]{4})-([0-9]{4})">
                            <label for="icon_telephone">Seu Telefone</label>
                            <span class="helper-text" data-error="Telefone deve estar no formato correto" ></span>
                          </div>
                      </div >



                      <div class="row">
                        <div class = "col"> </div>
                          <div class="input-field col s10">
                            <i class="material-icons prefix">contact_mail</i>
                            <input id="icon_mail" required="required" type="email" class="validate" name="remetenteEmail">
                            <label for="icon_mail">Seu Email</label>
                            <span class="helper-text" data-error="Email no formato incorreto" data-success="Email no formato certo"></span>
                          </div>
                      </div>


                      <div class="row">
                        <div class="col"> </div>
                          <div class="input-field col s10">
                            <i class="material-icons prefix">subject</i>
                            <input id="icon_assunto" required="required" type="text" class="validate" data-length="45" maxlength="45" name="assunto">
                            <label for="icon_assunto">Assunto</label>
                          </div>    
                      </div>


                      <div class="row">
                        <div class = "col"></div>
                          <div class="input-field col s10">
                            <i class="material-icons prefix">description</i>
                            <textarea id="textarea2" required="required" class="materialize-textarea" data-length="310" maxlength="310" name="mensagem"></textarea>
                            <label for="textarea2">Detalhes</label>
                          </div>
                      </div>


                      <div class="row">
                        <button class="btn center-align col s10 offset-s1 waves-effect waves-light cc" type="submit" name="submit" >
                          Enviar
                        </button>
                      </div>

                  </form>

              
                </div>

          
              </div>

            </div> <!-- Fim PARTE 2-->

          </div> <!-- Fim row conteudo todo -->

        </div> <!-- Fim container conteudo todo -->


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

        <script type="text/javascript" src="js.js"></script>

      <?php

        include_once ("footer.html");

      ?>

    </body>

    
  </html>