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
            @include('site.includes.carrinho')
        </div>
    </header>
    <!-- HEADER -->

    <div class="pop-up-confirmacao">

        <div class="pop-up-box">

            <div class="pop-up-header">
                <div class="logos">
                    <img src="{{ asset('site/img/_logo92.png') }}" alt="" />
                    <img src="{{ asset('site/img/_logoASI_92.png') }}" alt="" />
                </div>

                <div class="icon">
                    <img src="{{ asset('site/img/sistema/happyemoji.svg') }}" alt="" />
                </div>

                <p>Tudo pronto para finalizar?</p>

            </div>
            <div class="pop-up-middle">

                <div class="icon">
                    <img src="{{ asset('site/img/sistema/mailData.svg') }}" />
                </div>

                <p>Toda as informações de sua compra<br> serão enviadas para seu email.</p>

            </div>

            <div class="pop-up-buttons">
                <button class="cancel" onclick="activepopup()">Cancelar</button>
                <button class="confirm"
                    onclick="window.location = '{{ route('site.carrinho.finalizar.boleto') }}'">Finalizar
                    Compra</button>
            </div>

        </div>

        <script>
            function activepopup() {
                $('.pop-up-confirmacao').toggleClass('active')
            }
        </script>

        <div class="pop-up-blackground"></div>

    </div>



    <section class="container-fluid s_identificacao">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">
                    <div class="_title _active">
                        <div class="_img">
                            <img src="https://abs-pe.com.br/site/img/sistema/doorData.svg" alt="">
                        </div>
                        <h2><a href="/">Home</a></h2>
                    </div><div class="arrow _title _active">
                        <img src="https://abs-pe.com.br/site/img/sistema/loadingArrow.svg" alt="">
                    </div><div class="_title _active">
                        <div class="_img">
                            <img src="https://abs-pe.com.br/site/img/sistema/personIdentificacao.svg" alt="">
                        </div>
                        <h2><a href="https://abs-pe.com.br/carrinho/identificacao">Identificação</a></h2>
                    </div>
                    

                    <div class="arrow _title _active">
                        <img src="https://abs-pe.com.br/site/img/sistema/loadingArrow.svg" alt="">
                    </div><div class="_title _active">
                        <div class="_img">
                            <img src="https://abs-pe.com.br/site/img/sistema/card.svg" alt="">
                        </div>
                        <h2>Pagamento</h2>
                    </div>
                </div>
                <div class="_pagamento">
                    <div class="_topInfo">
                        <div class="row">
                            <div class="_name">
                                <div class="_img">
                                    <img src="{{ asset('site/img/sistema/user.svg') }}" alt="" />
                                </div>
                                <p>{{ $aluno->nome }}</p>
                            </div>
                            <p>{{ $aluno->email }}</p>
                        </div>
                        {{-- <div class="row">
                            <div>
                                <p>
                                    Rua Rio Grande do Sul - Centro Poços de Caldas - MG Numero
                                    42 Apartamento - 301
                                </p>
                            </div>
                            <div>
                                <span>JAD Log - R$ 19,90</span>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="_cupom">
                        <div class="_text">
                            <span>Cupom de desconto</span>
                            <p>Digite o código de desconto ao lado:</p>
                        </div>
                        <div class="_input">
                            <div class="_form">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/cupom.svg') }}" alt="" />
                                </div>
                                <input type="text" placeholder="#AbsÉ10" />
                                <button>
                                    <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                                </button>
                            </div>
                            <p>- R$ 20 aplicado na sua compra</p>
                        </div>
                    </div> --}}


                    <span style="display: block;padding-top: 20px; font-size: 1.8rem; font-weight: normal">Termos de contrato</span>

                    <a style="font-size: 14px; color: gray; float: right;" target="_blank" href="{{route('site.termos')}}">
                        Clique aqui para ler os termos
                    </a>


                    <p style="color: gray; display: flex; align-items:center; justify-content: flex-start; gap: 12px;"> 
                         <input type="checkbox" name="termos"> 
                         Li e aceito os termos de contrato. 
                    
                    </p>

                    <div class="_choose">
                        <div class="_title">
                            <span>Escolha a forma de pagamento</span>
                            <p>Selecione qual opçao deseja realizar o pagamento</p>
                        </div>
                        <div class="_buttons">
                            <div class="bolet button invalid"
                                onclick="window.location.href = '{{ route('site.carrinho.pagamento.boleto') }}'">
                                <div class="_icon">
                                    <img src="{{ asset('site/img/sistema/boleto.svg') }}" alt="" />
                                </div>
                                <div class="_text">
                                    <span>Boleto Bancário</span>
                                    <p>10% de desconto</p>
                                </div>
                            </div>

                            <div class="creditCard button invalid"
                                onclick="window.location.href = '{{ route('site.carrinho.pagamento.cartao') }}'">
                                <div class="_icon">
                                    <img src="{{ asset('site/img/sistema/creditcard.svg') }}" alt="" />
                                </div>
                                <div class="_text">
                                    <span>Cartão de Crédito</span>
                                    <p>em até 10x sem juros</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a href="https://7seventrends.com"" class="   _img">
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
        
$('input[name = "termos"]').change(()=> {
$('.bolet.button').toggleClass('invalid');
    $('.creditCard.button').toggleClass('invalid');
})
    </script>
  </body>
</html>
