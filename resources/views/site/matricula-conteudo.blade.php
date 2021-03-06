<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TQXZXML');
    </script>
    <!-- End Google Tag Manager -->
  
    <meta name="facebook-domain-verification" content="tb729pfe1wytdm6fmqvx2r2km1cylz" />

    
    <meta charset='utf-8'>
    <title>Área do Cliente - ABS PE</title>

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

    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css'
        crossorigin='anonymous' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Poppins&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='{{ asset('site/css/reset.css') }}'>
    <link rel='stylesheet' href='{{ asset('site/css/sistema.css') }}'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
</head>


<body class="_minhaArea">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQXZXML"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                                    <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                                </div>
                                Minha Área
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/compras">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                                </div>
                                Meus Pedidos
                            </a>
                        </li>
                        <li class="_active">
                            <a href="/minha-area/matriculas">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                                </div>
                                Minhas Matrículas
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/dados">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                                </div>
                                Meus Dados
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="_user">
                    <div class="_img">
                        @if (!$aluno->avatar)
                            <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                        @else
                            <img src="{{ asset($aluno->avatar) }}" style="max-width: 100%;" alt="">
                        @endif
                    </div>
                    <div class="_text">
                        Olá <span
                            class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                        <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                            Sair
                        </a>
                    </div>
                </div>
            </div>

        </section>
        <div class="_menuMax">
            <img src="{{ asset('site/img/arrowright.svg') }}" alt="">
        </div>
        <section class="container-fluid _menu _mobileMenu">
            <div class="_closeButton">
                <img src="{{ asset('site/img/arrowleft.svg') }}" alt="">
            </div>
            <div class="container-fav">
                <nav>
                    <ul>
                        <li>
                            <a href="/minha-area/">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                                </div>
                                Minha Área
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/compras">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                                </div>
                                Meus Pedidos
                            </a>
                        </li>
                        <li  class="_active">
                            <a href="/minha-area/matriculas">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                                </div>
                                Minhas Matrículas
                            </a>
                        </li>
                        <li>
                            <a href="/minha-area/dados">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                                </div>
                                Meus Dados
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="_user">
                    <div class="_img">
                        @if (!$aluno->avatar)
                            <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                        @else
                            <img src="{{ asset($aluno->avatar) }}" style="max-width: 100%;" alt="">
                        @endif
                    </div>
                    <div class="_text">
                        Olá <span
                            class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                        <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                            Sair
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="detalhesdeCurso container-fluid">
        <div class="container-fav">
            <h1>{{ $matricula->turma->curso->titulo }}</h1>

            <main>
                <div class="list">
                    @foreach ($matricula->turma->conteudos->where('publicacao', '<=', date('Y-m-d H:i:s')) as $conteudo)
                        <article>
                            <div class="date">
                                {{ date('d/m/Y', strtotime($conteudo->publicacao)) }}<br>
                                {{-- 20:00 --}}
                            </div>
                            <picture><img src="{{ asset('site/img/sistema/approved.svg') }}" alt="Aprovado">
                            </picture>
                            <div class="content">
                                <span>{{ $conteudo->descricao }}</span>
                                <a href="{{ asset($conteudo->arquivo) }}" download>Baixar</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </main>
        </div>
    </div>





    <footer class="container-fluid">
        <section class="container-fav s_faleConosco">
            <div class="_text">
                <h3>FALE CONOSCO</h3>
                <h2>Entre em contato com a nossa equipe</h2>
                <p>Estamos prontos para te ajudar</p>
            </div>
            <div class="_buttons">
                <div style="cursor: pointer" onclick="window.open('https://web.whatsapp.com/send?phone=8198262-2200')">
                    <img src="{{ asset('site/img/sistema/chat.svg') }}" alt="" />
                </div>
                <div style="cursor: pointer" onclick="window.open('tel:(81) 9 8262-2200')">
                    <img src="{{ asset('site/img/sistema/call.svg') }}" alt="" />
                </div>
                <div style="cursor: pointer" onclick="window.open('https://web.whatsapp.com/send?phone=8198262-2200')">
                    <img src="{{ asset('site/img/sistema/whatsappButton.svg') }}" alt="" />
                </div>
                <div style="cursor: pointer" onclick="window.open('mailto:contato@abs-pe.com.br')">
                    <img src="{{ asset('site/img/sistema/envelopButton.svg') }}" alt="" />
                </div>
            </div>
        </section>
        <section class="container-fav s_info">
            <div class="_left">
                <p>Rua Desembargador Gois Cavalcante, 316, Sala 101, Parnamirim, Recife - PE, 52.06-140</p>

                <div class="_siga">
                    <p>Siga-nos</p>
                    <div class="_social">
                        <a href="https://www.instagram.com/abs_pe/"><img src="{{ asset('site/img/sistema/instagramLogo.svg') }}" alt="" /></a>
                        <a href="https://www.facebook.com/abspernambuco"><img src="{{ asset('site/img/sistema/facebookLogo.svg') }}" alt="" /></a>
                    </div>
                </div>

                <div class="_compraSegura">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/lock.svg') }}" alt="" />
                    </div>
                    <p>Compra 100% segura</p>
                </div>
            </div>
            <div class="_right">
                <p>Formas de Pagamento</p>
                <div class="_formasPagamento">
                    <img src="{{ asset('site/img/sistema/pagamentoLogos1.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos2.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos3.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos4.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos5.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos6.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos7.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos8.jpg') }}" alt="" />
                </div>
            </div>
        </section>
    </footer>



    <section class="container-fluid _copyRight">
        <div class="container-fav">
            <p>Copyright © ABS-PERNAMBUCO - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens,
                logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade
                exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a
                expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e
                criminal nos termos da Lei. CNPJ: 21.957.764/0001-40
            </p>


            <p>
                <strong>
                    Desenvolvido por
                    <a href="https://7seventrends.com"" class="               _img">
                        <img src="{{ asset('site/img/_logo7seven.png') }}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script>
        $("._menuMax").click(() => {
            $("._mobileMenu").css("display", "flex");
            $("._mobileMenu").animate({
                    left: "0",
                    top: "0",
                },
                500
            );
        });

        $("section._mobileMenu ._closeButton").click(() => {
            $("._mobileMenu").animate({
                    left: "-200vw",
                    top: "0",
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
            init: function() {
                setTimeout(function() {
                    if (backdrop.visivel) {
                        backdrop.esconde();
                    }
                }, 10 * 1000);
            },
            esconde: function() {
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
