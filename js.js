          var ScrolValue = 0;

          $(document).ready(function(){

            $('input#input_text, textarea#textarea2').characterCounter();

            M.updateTextFields();

            $('.tabs').tabs();

            $('.sidenav').sidenav();

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
                var login = document.getElementById('login').value;
                var nameFirst = document.getElementById('first_name2').value;
                var emails = document.getElementById('login').value;
                var senha = document.getElementById('senha').value;
                var confSenha = document.getElementById('confSenha').value;

              document.getElementById('btn-proximo-cad').onclick = function(){
            if(senha == "" && emails == "" && nameFirst == "" && confSenha == "" && login == "")
            {
              M.toast({html: 'Todos os campos são obrigatorios', classes: 'rounded'});
            }

            if(senha != "" && emails != "" && nameFirst != "" && confSenha != "" && login != ""){

              if (senha.length >= 5) {

                if (senha == confSenha) {

                }else
                {

                }

              }else
              {


             M.toast({html: 'È permitido no mínimo 5 caracteres', classes: 'rounded'});

                document.getElementById('mengagem_error1').style.display = 'block';
                document.getElementById('mengagem_error').innerHTML = 'É permitido no minimo 5 caracteres';

              }
            }
            };

         