          var ScrolValue = 0;

          var senha = document.getElementById('#senha').value;
          var confSenha = document.getElementById('#confSenha').value;

          $(document).ready(function(){

            document.getElementById('btn-proximo-cad').onclick = function(){
            
              if (senha.value.length >= 5) {

                if (senha == confSenha) {

                }else{

                }

              }else{
                alert('TO PUTOO');
                document.getElementById('mengagem_error').style.display = 'block';
                document.getElementById('mengagem_error').innerHTML = 'É permitido no minimo 5 caracteres';
              }
            };

            $('input#input_text, textarea#textarea2').characterCounter();

            M.updateTextFields();

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

         