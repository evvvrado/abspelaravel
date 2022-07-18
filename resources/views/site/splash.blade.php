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

    <title> Escolha o melhor para você! | ABS-PE</title>

    <meta name="facebook-domain-verification" content="tb729pfe1wytdm6fmqvx2r2km1cylz" />
    @yield('styles')
</head>

<body class="splash_page">


    <section class="splash">
        <div n-class="niv">
            <div class="niv-content-side">
                <picture>
                    <img src="{{ asset('site/assets/img/bigger_logo_logo.svg') }}" alt="logo">
                </picture>

                <h4>Faça sua inscrição!</h4>
                <h3>
                    Amantes do vinho <br>
                    <small>OBS: O curso não possui caráter profissionalizante. </small>
                </h3>

                <div class="box">
                    <p><strong>R$ 1000,00</strong>
                        Em até 5x</p>
                </div>

                <div class="box">
                    <p><strong>R$ 900,00</strong>
                        à vista</p>

                </div>

                <div class="buttons-row">
                    <a href="https://cielolink.com.br/3zhlr7L" class="btn --filled"><span>Parcelado</span></a>
                    <a href="https://cielolink.com.br/3uSxrtJ" class="btn --filled"><span>À vista</span></a>
                </div>

            </div>

            <div class="niv-picture-side" n-class="fade --initial--no-delay">
                <picture>
                    <img src="{{ asset('site/assets/img/splash_background.jpg') }}" alt="fundo da splash">
                </picture>
            </div>
        </div>
    </section>
</body>

</html>
