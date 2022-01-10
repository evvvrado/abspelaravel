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
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQXZXML"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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
                    </div>

                    <div class="_pagamentoCartao">
                        @if ($forma == 'cartao')
                            <div class="_text">
                                <span>Pagamento Cartão de Crédito</span>
                                <p>Digite os dados do seu cartão abaixo:</p>
                            </div>
                            <div class="_form">
                                <div style="margin-bottom: 20px;">
                                    @if (session()->get('erro') )
                                        <small>{{session()->get('erro')}}</small>
                                    @endif
                                </div>

                                <style>
                                    ._form small {
                                        font-size: 20px;
                                        border-radius: 5px;
                                        padding-left: 20px;
                                        padding-right: 20px;
                                        margin-bottom: 20px;
                                        font-weight: bold;
                                        padding: 20px;
                                        color: red;
                                        background: #ffff0070;
                                        position: relative;
                                        padding-left: 40px;
                                        display: block;
                                    }
    
                                    ._form small::after {
                                        height: 15px;
                                        width: 15px;
                                        background-color: red;
                                        position: absolute;
                                        left: 1.5rem;
                                        content: "";
                                        top: 0;
                                        bottom: 0;
                                        border-radius: 100%;
                                        margin: auto 0;
    
                                    }
                                </style>

                                <form action="{{ route('site.carrinho.finalizar.credito.cielo') }}" method="POST">
                                    @csrf
                                    <label>
                                        <span>N. Cartão</span>
                                        <input type="tel" placeholder="0000 0000 0000 0000" inputmode="numeric" pattern="[0-9\s]{13,19}"
                                            autocomplete="cc-number" name="numero" maxlength="19" required />
                                    </label>
                                    <label>
                                        <span>Nome do cartão</span>
                                        <input type="text" name="nome" placeholder="Nome no cartão" required/>
                                    </label>
                                    <label>
                                        <span>Validade</span>
                                        <input type="tel" inputmode="numeric" name="expiracao" maxlength="7" placeholder="00/0000" required/>
                                    </label>
                                    <label>
                                        <span>CVV</span>
                                        <input type="tel" maxlength="3" name="cvv" placeholder="000"  required/>
                                    </label>
                                    <label>
                                        <span>Parcelas</span>
                                        <select name="parcelas" id="parcelas" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </label>
                                    <button type="submit">
                                        Efetuar pagamento <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                                    </button>
                                </form>
                                <a class="changefom" href="{{ route('site.carrinho-efetuar')}}">Trocar forma de pagamento</a>
                            </div>
                        @else
                            <div class="_text">
                                <span>Pagamento por boleto ou carnê</span>
                                <p>Escolha o número de parcelas desejadas:</p>
                            </div>
                            <div class="_form">
                                <div style="margin-bottom: 20px;">
                                    <small style="    color: red;
                                    font-size: 20px;
                                    border-radius: 5px;
                                    padding-left: 20px;
                                    padding-right: 20px;
                                    margin-bottom: 20px;
                                    padding: 20px;">{{ session()->get('erro') }}</small>
                                </div>

                                <form action="{{ route('site.carrinho.finalizar.boleto') }}" method="POST">
                                    @csrf
                                    <label>
                                        <span>Parcelas</span>
                                        <select name="parcelas" required>
                                            <option value="1">1x de
                                                {{ number_format($carrinho->total - ($carrinho->total * 7.483) / 100, 2, ",", ".") }}</option>
                                            @for($i = 2; ((($carrinho->total / $i) >
                                            $configuracao->min_valor_parcela_boleto) && $i <= $configuracao->
                                                max_parcelas_boleto); $i++)
                                                <option value="{{ $i }}">{{ $i }}x de
                                                    {{ number_format($carrinho->total / $i, 2, ',', '.') }}</option>
                        @endfor
                        </select>
                        </label>
                        <button type="submit">
                            Efetuar pagamento <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                        </button>
                        </form>

                        <a class="changefom" href="{{ route('site.carrinho-efetuar')}}">Trocar forma de pagamento</a>
                    </div>
                    @endif
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
            <p>Copyright © ABS-PERNAMBUCO - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens,
                logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade
                exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a
                expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e
                criminal nos termos da Lei. CNPJ: 21.957.764/0001-40
            </p>

            <p>
                <strong>
                    Desenvolvido por
                    <a href="https://7seventrends.com"" class="      _img">
                        <img src="{{ asset('site/img/_logo7seven.png') }}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


      <script src="{{ asset('site/js/masks.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    @include('site.includes.gerencianet')
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

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
        integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  </body>
</html>
