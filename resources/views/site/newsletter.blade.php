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
    <title>ABS PE - Associação Brasileira de Sommeliers - Pernambuco</title>
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
    <link rel='icon' type='image/vnd.microsoft.icon' sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256' href="{{ asset('favicon.ico') }}" />
    <link rel='apple-touch-icon' sizes='180x180' href="{{ asset('site/img/logo180.png') }}">
    {{--
    <link rel='manifest' href='/_ifl1/manifest.php' type='application/x-web-app-manifest+json'> --}}
    <link rel='preload' type='text/css' as='style'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap' crossorigin='anonymous' />
    <link rel='preload' type='text/css' as='style' href="{{ asset('site/css/reset.css') }}" />
    <link rel='preload' type='text/css' as='style' href="{{ asset('site/css/custom.css') }}" />

    <link rel='preload' type='application/javascript' as='script' href='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0='
        crossorigin='anonymous' />
    <link rel='preload' type='application/javascript' as='script' href="{{ asset('site/js/script.js') }}">

    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Poppins&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous'>
    <link rel='stylesheet' href="{{ asset('site/css/reset.css') }}">
    <link rel='stylesheet' href="{{ asset('site/css/custom.css') }}">
    <script src='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
</head>

<body class="form _minha-conta" style="overflow:hidden;">

    <div class="container-fluid">
        <div class="container-fav">
            <div class="_top">
                <div class="logos">
                    <a href="/">
                        <img src="{{ asset('site/img/_logo136.png') }}" alt="Logo ABS Pernambuco" />
                    </a>
                    <a href="javascript: void(0)">
                        <img src="{{ asset('site/img/_logoASI_136.png') }}" alt="Logo ASI" />
                    </a>
                </div>

                <a href="/" class="_back">
                    <div class="svg">
                        <img src="{{ asset('site/img/arrowlong_left.svg') }}" alt="" />
                    </div>
                    <p>Voltar a página principal</p>
                </a>
            </div>


            <main class="newsletter_">
                <div class="_form">

                    <div class="title">
                        <div class="svg">
                            <img src="{{ asset('site/img/paperplane_alternative.svg') }}" alt="" />
                        </div>
                        <h2>Assine nosso newsletter!</h2>
                    </div>
                    {{-- MENSAGENS DE ERRO --}}
                    @if (session()->get('erro'))
                    {{-- {{session()->get("erro")}} para escrever a mensagem --}}
                    {{-- EX: <span>{{session()->get("erro")}}</span> --}}
                    <div class="alert alert-danger">
                        {{ session()->get('erro') }}
                    </div>

                    <style>
                        .alert {
                            position: relative;
                            padding: .75rem 1.25rem;
                            margin-bottom: 1rem;
                            border: 1px solid transparent;
                            border-radius: .25rem;
                        }

                        .alert-danger {
                            color: #721c24;
                            background-color: #f8d7da;
                            border-color: #f5c6cb;
                            font-family: "Spartan", sans-serif;
                            font-weight: bold;
                            font-size: 2rem;
                            line-height: 22px;
                        }
                    </style>
                    @endif
                    <form action="{{ route('site.aluno.logar') }}" method="POST">
                        @csrf
                        <label>
                            <span>Meu nome</span>
                            <input type="text" name="nome" required />
                        </label>
                        <label>
                            <span>Meu e-mail</span>
                            <input type="email" name="email" required />
                        </label>
                        <label>
                            <span>Telefone</span>
                            <input type="tel" name="telefone" maxlenght="15" required />
                        </label>
                        <button>ASSINAR <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" /></button>
                    </form>

                </div>
            </main>
        </div>

    </div>



    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="js/main.js"></script>
</body>

</html>


<script>
    $("form label input,form label textarea").focus(function() {
        $(this).parent().find("span").addClass("active");
    });

    $("form label input,form label textarea").focusout(function() {
        if ($(this).val() == "") {
            $(this).parent().find("span").removeClass("active");
        }
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('site/js/script.js') }}"></script>
<script src="{{ asset('site/js/masks.js') }}"></script>

<script src="/_ifl1/ifl1formatador.js"></script>
<script src="/_ifl1/ifl1validador.js"></script>
</body>

</html>