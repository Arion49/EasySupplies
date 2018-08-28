          var ScrolValue = 0;

          $(document).ready(function(){

            $('input#icon_assunto, textarea#textarea2').characterCounter();

            M.updateTextFields();

            $('.tabs').tabs();

            $('.sidenav').sidenav();

              var random = Math.floor((Math.random() *12) +1);

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
            var nameFirst = document.getElementById('first_name2').value;
            var emails = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;
            var confSenha = document.getElementById('confSenha').value;

            if(senha != "" && emails != "" && nameFirst != "" && confSenha != "" && login != "")
            {

              if (senha.length >= 5) {


                if (senha == confSenha) {



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
         