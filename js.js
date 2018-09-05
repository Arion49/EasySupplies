          var ScrolValue = 0;

          $(document).ready(function(){

            $('input#icon_assunto, textarea#textarea2').characterCounter();

            M.updateTextFields();

            $('.tabs').tabs();

            $('.sidenav').sidenav();

            $('select').formSelect();

            $('.dropdown-trigger').dropdown({
              alignment: 'right',
              constrainWidth: false
            });

            $('.carousel.carousel-slider').carousel({
              fullWidth: true,
              indicators: true

            });

            setTimeout(autoplay, 4500);
            function autoplay() {
              $('.carousel.carousel-slider').carousel('next');
              setTimeout(autoplay, 4500);
            };

            var random = Math.floor((Math.random() *20) +1);

            document.getElementById('background-img').style.backgroundImage = "url('img/back"+random+".jpg')";

            $(window).scroll(function(){

              ScrolValue = $(this).scrollTop();

              if(parseInt(ScrolValue) > 250) {

                $('nav').addClass('sticky-nav');
                $('.ola').removeClass('scale-out');

              }
              else{

                $('nav').removeClass('sticky-nav');
                $('.ola').addClass('scale-out');

              }
            });

            $('.ola').click(function(){
              window.scrollTo(0,0);
            });

          });

          document.getElementById('btn-proximo-cad').onclick = function(){

            var login = document.getElementById('login').value;
            var nameFirst = document.getElementById('nome').value;
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;
            var confSenha = document.getElementById('confSenha').value;

            if(senha != "" && email != "" && nameFirst != "" && confSenha != "" && login != "")
            {

              if (senha.length >= 5) {


                if (senha == confSenha) {
                  if(document.getElementById('scss-cad-b')){
                    document.getElementById('scss-cad-b').style.pointerEvents = "auto";
                  $('#scss-cad-b').removeClass('opacity');
                  $('#scss-cad-b').addClass('fadeIn');
                } else{

                  document.getElementById('btn-att').disabled = false;}
                  
                  


                }
                /*Se as senhas não forem iguais*/
                else{

                  M.toast({html: 'As senhas não coincidem', classes: 'rounded'});
                }

              }
              /*Se s senha for menor que 5*/
              else{

                M.toast({html: 'A senha deve ter no minimo 5 caracteres', classes: 'rounded'});

              }

            } 
            /*Se vazio*/
            else{

              M.toast({html: 'Todos os campos são obrigatorios', classes: 'rounded'});

            }

          };/*Fim function*/




        