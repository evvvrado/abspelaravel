<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    @if (isset($pagina))
        <title>{{ $pagina->titulo }}</title>
        <meta name='keywords' content='{{ $pagina->palavras }}'>
        <meta name='description' content='{{ $pagina->descricao }}'>
        <meta property='og:title' content='{{ $pagina->titulo }}'>
        <meta property='og:site_name' content='{{ $pagina->titulo }}'>
        <meta name='twitter:title' content='{{ $pagina->titulo }}'>
        <meta property='og:description' content='{{ $pagina->descricao }}'>
        <meta name='twitter:description' content='{{ $pagina->descricao }}'>

    @else
    <title>Associação Brasileira de Sommeliers - Pernambuco</title>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <meta property='og:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:site_name' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta name='twitter:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:description' content=''>
        <meta name='twitter:description' content=''>
    @endif
    <link rel='canonical' href='https://homolog.abs-brasil.com'>

    <meta property='og:url' content='https://homolog.abs-brasil.com'>
    <meta http-equiv=Pragma content=no-cache>
    <meta http-equiv=Expires content=-1>
    <meta http-equiv=CACHE-CONTROL content=NO-CACHE>
    <meta name='theme-color' content='#8A143A'>
    <meta name='msapplication-navbutton-color' content='#8A143A'>
    <meta name='apple-mobile-web-app-status-bar-style' content='#8A143A'>
    <meta property='og:type' content='website'>
    <meta name='twitter:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image:secure_url' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta name='twitter:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='630'>
    <meta property='og:image:type' content='image/jpeg'>
    <meta name='robots' content='index,follow' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='twitter:card' content='summary'>
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

<body class="_carrinho">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet" />


    <!-- HEADER -->
    <header class="container-fluid">
        <div class="container-fav">
            <div class="_first">
                <div class="_logos">
                    <a href="/" class="logo-abspe">
                        <img src="{{ asset('site/img/_logo92.png') }}" alt="Logo ABS-Pernambuco" />
                    </a>
    
                    <a href="https://abs-pe.com.br/noticia/abs-pe/association-de-la-sommellerie-internationale-asi" class="logo-asi">
                        <img src="{{ asset('site/img/_logoASI_92.png') }}" alt="Logo ASI" />
                    </a>
                    <div class="_carButton">
                        <img src="{{ asset('site/img/sistema/car.svg') }}" alt="" />
                    </div>
                </div>

                <div class="_duvidas">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/carrinhoPhone.svg') }}" alt="" />
                    </div>
                    <p>Dúvida na compra ligue - 35 992611988</p>
                </div>
            </div>
            {{-- @include('site.includes.carrinho') --}}
        </div>
    </header>
    <!-- HEADER -->

    <section class="s_compraRealizada">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">

                    <picture><img src="{{ asset('site/img/sistema/approved2.svg')}}" alt=""></picture>
                    <h2 style="color: green;">Sua compra foi aprovada!</h2>
                </div>
                <div class="_title">
                    <h2>Pedido - {{ $venda->codigo }}</h2>
                    <div class="_sendtoEmail">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/mailData.svg') }}" alt="" />
                        </div>
                        <div class="_text">
                            <p>
                                Toda as informações de sua compra<br />
                                foi enviada para seu email.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="_info">
                    <div class="_id _infoItem">
                        <div class="_name">
                            <div class="text">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/userData.svg') }}" alt="" />
                                </div>
                                <span>Identificação</span>
                            </div>
                            <div class="_arrow">
                                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                            </div>
                        </div>
                        <div class="_userINFO">
                            <p class="_userNAME">{{ $venda->aluno->nome }}</p>
                        </div>
                        <div class="_userINFO">
                            <p class="_userEMAIL">{{ $venda->aluno->email }}</p>
                        </div>
                    </div>
                    <div class="_pag _infoItem">
                        <div class="_name">
                            <div class="text">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/card.svg') }}" alt="" />
                                </div>
                                <span>Pagamento</span>
                            </div>
                            <div class="_arrow">
                                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                            </div>
                        </div>
                        <div class="_pagInfo">
                            <div class="_cCard">
                                @if ($venda->forma == 0)
                                    <p>Boleto Bancário<br />{{$venda->boleto->codigo_barra}}</p>
                                @elseif($venda->forma == 1)
                                    <p>Cartão de Crédito<br /> {{$venda->cartao->numero}}</p>
                                @else
                                    <p>Carnê<br />Consultar boletos no painel.</p>
                                @endif
                            </div>
							<div class="_payment">R$ {{number_format($venda->total, 2 , ",", ".")}} em {{$venda->parcelas}}x</div>
                        </div>
                    </div>
                </div>

                <div class="_buttons">
                    <button class="btn-primary" onclick="window.location.href = '/minha-area'">
                        Acessar minha área
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="" />
                        </div>
                    </button>
                    <button class="btn-primary _secundary" onclick="window.location.href = '/'">
                        Realizar outra compra
                    </button>
                </div>
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
            <p>Copyright © ABS PERNAMBUCO - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens,
                logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade
                exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a
                expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e
                criminal nos termos da Lei. CNPJ: 21.957.764/0001-40
            </p>


            <p>
                <strong>
                    Desenvolvido por
                    <a href="https://7seventrends.com"" class=" _img">
                        <img src="{{ asset('site/img/_logo7seven.png') }}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script>
        $("form label input,form label textarea").focus(function() {
            $(this).parent().find("span").addClass("active");
        });

        $("form label input,form label textarea").focusout(function() {
            if ($(this).val() == "") {
                $(this).parent().find("span").removeClass("active");
            }
        });


        $("._carButton").click(() => {
            $("._meuCarrinho").animate({
                    top: "0",
                },
                400
            );
        });
        $(" section._meuCarrinho ._top ._title ._icon img:last-child").click(() => {
            $("._meuCarrinho").animate({
                    top: "-200vh",
                },
                400
            );
        });
    </script>
  </body>
</html>
