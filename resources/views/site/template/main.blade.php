<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TQXZXML');
    </script>
    <!-- End Google Tag Manager -->



    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Description" />
    <meta name="keywords" content="KeyWords" />
    <meta name="author" content="Everaldo Cristiano Reis Júnior" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}" />


    <meta property="og:title" content="Associação Brasileira de Sommelier - Pernambuco" />
    <meta property="og:url" content="https://abs-pe.com.br" />
    <meta property="og:description" content="Associação Brasileira de Sommelier - Pernambuco" />
    <meta property="og:image" content="{{ asset('site/img/_og140.jpg') }}" />







    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet" />

    <title>{{ $titulo }}</title>

    <meta name="facebook-domain-verification" content="tb729pfe1wytdm6fmqvx2r2km1cylz" />
    @yield('styles')
</head>


<body @yield('body_attr')>

    @yield('content')

    <footer n-class="fluid">
        <div n-class="niv">
            <div class="niv-top">
                <picture>
                    <a href="/">
                        <img src="{{ asset('site/assets/img/footer_logo.svg') }}" alt="Logo">
                    </a>
                </picture>

                <ul>
                    <li>
                        <a href="#" title="Acessar Facebook"><img
                                src="{{ asset('site/assets/img/footer_social_facebook.svg') }}"
                                alt="ícone rede social"></a>
                    </li>
                    <li>
                        <a href="#" title="Acessar Instagram"><img
                                src="{{ asset('site/assets/img/footer_social_instagram.svg') }}"
                                alt="ícone rede social"></a>
                    </li>
                    <li>
                        <a href="#" title="Acessar Youtube"><img
                                src="{{ asset('site/assets/img/footer_social_youtube.svg') }}"
                                alt="ícone rede social"></a>
                    </li>
                </ul>
            </div>

            <hr>

            <div class="niv-bottom">
                <span class="copyright">
                    <p>© Todos os direitos reservados</p>
                </span>

                <span class="sign">
                    <p>Desenvolvido com ♥ por</p>
                    <a href="https://hyp8.com.br" title="Vem nos biscoitar B)">
                        <picture>
                            <img src="{{ asset('site/assets/img/footer_hyp8_logo.svg') }}" alt="logo hyp8">
                        </picture>
                    </a>
                </span>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"
        integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('/site/js/niv.js') }}"></script>
    <livewire:scripts />

    @yield('scripts')

</body>

</html>
