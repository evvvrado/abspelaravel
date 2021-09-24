<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
        <title>Área do Cliente -  ABS PE</title>
  
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' type='image/vnd.microsoft.icon'
        sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256'
        href='{{ asset('favicon.ico') }}' />
    <link rel='apple-touch-icon' sizes='180x180' href='{{ asset('site/img/logo180.png') }}'>
    {{-- <link rel='manifest' href='/_ifl1/manifest.php' type='application/x-web-app-manifest+json'> --}}
    <link rel='preload' type='text/css' as='style'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/reset.css') }}' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/sistema.css') }}' />

    <link rel='preload' type='application/javascript' as='script' href='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous' />
    <link rel='preload' type='application/javascript' as='script' href='{{ asset('site/js/script.js') }}'>
    
    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'/><link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>
   
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='{{ asset("site/css/reset.css") }}'>
    <link rel='stylesheet' href='{{ asset("site/css/sistema.css") }}'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
</head>


  <body class="_minhaArea">
    

     <div style="position: fixed; width: 100%; top: 0; z-index: 9999">
            {{-- NAVBAR SUPEROR --}}
        @include("site.includes.navbar")
        <!-- MENU LATERAL -->
        @include("site.includes.menu_lateral")
        <!-- MENU LATERAL -->
        <section class="container-fluid _menu">
            <div class="container-fav">
                <nav>
                    <ul>
                    <li>
                        <a href="/minha-area">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                            </div>
                            Minha Área
                        </a>
                    </li>
                        <li class="_active">
                            <a href="/minha-area/compras">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/bag.svg')}}" alt="">
                                </div>
                                Meus Pedidos
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/matriculas">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/page.svg')}}" alt="">
                                </div>
                                Minhas Matrículas
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/dados">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/clipboard.svg')}}" alt="">
                                </div>
                                Meus Dados
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="_user">
                    <div class="_img">
                        <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                    </div>
                    <div class="_text">
                        Olá <span class="_username">Everaldo</span>
                        <a href="/" class="_sair">
                            Sair
                        </a></div>
                </div>
            </div>

        </section>
        <div class="_menuMax">
            <img src="{{asset('site/img/arrowright.svg')}}" alt="">
        </div>
        <section class="container-fluid _menu _mobileMenu">
            <div class="_closeButton">
                <img src="{{asset('site/img/arrowleft.svg')}}" alt="">
            </div>
            <div class="container-fav">
                <nav>
                    <ul>
                    <li>
                        <a href="/minha-area/">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                            </div>
                            Minha Área
                        </a>
                    </li>
                        <li class="_active">
                            <a href="/minha-area/compras">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/bag.svg')}}" alt="">
                                </div>
                                Meus Pedidos
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/matriculas">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/page.svg')}}" alt="">
                                </div>
                                Minhas Matrículas
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/dados">
                                <div class="svg">
                                    <img src="{{asset('site/img/sistema/clipboard.svg')}}" alt="">
                                </div>
                                Meus Dados
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="_user">
                    <div class="_img">
                        <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                    </div>
                    <div class="_text">
                        Olá <span class="_username">Everaldo</span>
                        <a href="/" class="_sair">
                            Sair
                        </a></div>
                </div>
            </div>

        </section>
    </div>



    <section class="container-fluid _meusDados">
        <div class="container-fav">
            <div class="_right">
                <div class="_top">
                    <h2>Meus Dados</h2>                
                </div>
                <form action="return 0" class="_dados">
                    <div class="dados-div">
                        <label>                            
                            <input type="text" name="_username" value="Everaldo Cristiano Reis Júnior" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/userData.svg')}}" alt="">
                            </div>
                                
                        </label>

                       <label>
                            <input type="email" name="_useremail" value="everaldocrj@gmail.com" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/mailData.svg')}}" alt="">
                            </div>
                       </label>

                        <label>
                            <input type="tel" name="_usercpf" value="158.828.820-20" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/userData.svg')}}" alt="">
                            </div>
                        </label>                    

                        <label>    
                            <input type="tel" name="_usertel" value="35 9 8809-0305" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/phoneData.svg')}}" alt="">
                            </div>                       
                        </label>
                    </div>

                    <div class="dados-div">

                        <label>                            
                            <input type="text" name="_userendereco" value="Rua João Cesário, 180" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/doorData.svg')}}" alt="">
                            </div>                                
                        </label>

                       <label>
                            <input type="text" name="_usercity" value="Alfenas" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/pinData.svg')}}" alt="">
                            </div>
                       </label>

                        <label>
                            <input type="text" name="_userUF" value="Minas Gerias" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/pinData.svg')}}" alt="">
                            </div>
                        </label>                    

                        <label>    
                            <input type="text" name="_userCountry" value="Brasil" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/flagData.svg')}}" alt="">
                            </div>                       
                        </label>

                        <button class="btn-primary">Salvar</button>
                    </div>
                    
                </form>
                <div class="_top">
                    <h2>Senha de Acesso</h2>                
                </div>
                <form class="_dados">
                    <label>                        
                        <input type="password" name="_useroldpass" value="**********" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/lockData.svg')}}" alt="">
                            </div>
                    </label>
                    <label>                        
                        <input type="password" name="_usernewpass" value="**********" class="_dadosComponent">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/lockData.svg')}}" alt="">
                            </div>
                    </label>

                    <button class="btn-primary">Salvar</button>
                </form>

            </div>
            <div class="_left">
                <div class="userImg">
                    <img src="{{asset('site/img/sistema/userBig.svg')}}" alt="">
                </div>
                <a href="/">Alterar Imagem</a>
            </div>
        </div>
    </section>

  


    <footer class="container-fluid">
      <section class="container-fav s_faleConosco">
        <div class="_text">
          <h3>FALE CONOSCO</h3>
          <h2>Entre em contato com a nossa equipe</h2>
          <p>Estamos prontos para te ajudar</p>
        </div>
        <div class="_buttons">
          <div>
            <img src="{{asset('site/img/sistema/chat.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/call.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/whatsappButton.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/envelopButton.svg')}}" alt="" />
          </div>
        </div>
      </section>
      <section class="container-fav s_info">
        <div class="_left">
          <p>Rua Gaspar Lopes, 34 Centro, 37130-153 Alfenas/MG</p>

          <div class="_siga">
            <p>Siga-nos</p>
            <div class="_social">
              <a href="/"
                ><img src="{{asset('site/img/sistema/instagramLogo.svg')}}" alt=""
              /></a>
              <a href="/"><img src="{{asset('site/img/sistema/facebookLogo.svg')}}" alt="" /></a>
            </div>
          </div>

          <div class="_compraSegura">
            <div class="_svg">
              <img src="{{asset('site/img/sistema/lock.svg')}}" alt="" />
            </div>
            <p>Compra 100% segura</p>
          </div>
        </div>
        <div class="_right">
          <p>Formas de Pagamento</p>
          <div class="_formasPagamento">
            <img src="{{asset('site/img/sistema/pagamentoLogos1.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos2.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos3.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos4.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos5.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos6.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos7.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos8.jpg')}}" alt="" />
          </div>
        </div>
      </section>
    </footer>

   
    <section class="container-fluid _copyRight">
        <div class="container-fav">
          <p>Copyright © ABS Brasil - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens, logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei. CNPJ: 17.190.409/0001-10
          </p>
  
          <p> 
              <strong>
                  Desenvolvido por 
              <a href="https://7seventrends.com"" class="_img">
                  <img src="{{asset('site/img/_logo7seven.png')}}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
      <script>
                  
          $("._menuMax").click(() => {
          $("._mobileMenu").css("display", "flex");
          $("._mobileMenu").animate(
              {
              left: "0",
              top:"0",
              },
              500
          );
          });
  
          $("section._mobileMenu ._closeButton").click(() => {
          $("._mobileMenu").animate(
              {
              left: "-200vw",
              top:"0",
              },
              500
          );
          });
  
          
          $("header main button.hamburguer-menu").click(() => {
              $("div._sidemenu nav").css("height", "497px");
          });
  
          $("div._sidemenu nav .hamburguerClose").click(() => {
              $("div._sidemenu nav").css("height", "0");
          });
  
                  
          const backdrop = {
              visivel: true,
              init: function () {
                  setTimeout(function () {
                      if (backdrop.visivel) {
                          backdrop.esconde();
                      }
                  }, 10 * 1000);
              },
              esconde: function () {
                  $("#backdrop").css("background", "");
                  $("#backdrop>div").fadeOut();
                  $("#backdrop").delay(350).fadeOut("slow");
                  $("body").delay(350).css("overflow", "");
                  backdrop.visivel = false;
              },
          };
  
          backdrop.esconde();
  
  
      </script>
    </body>
  </html>