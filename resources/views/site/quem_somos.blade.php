@include("site.includes.head")

<body class="_quem-somos">

    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{-- BARRA DE LOGIN E CADASTRE-SE --}}
    @include("site.includes.barra_login")


    {{-- NAVBAR SUPEROR --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <!-- SECTION HERO -->
    <section class="container-fluid s_hero">
        <div class="container-fav">
            <h1>Quem somos</h1>
        </div>

    </section>
    <!-- SECTION HERO -->



    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_quem-somos" id="quem-somos">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div class="nav-component _active">
                        <a href="{{ route('site.quem_somos') }}#quem-somos">Quem Somos</a>
                    </div>
                    <div class="nav-component">
                        <a href="{{ route('site.sommelier') }}#quem-somos">Sommelier</a>
                    </div>
                    <div class="nav-component">
                        <a href="{{ route('site.diretoria') }}#quem-somos">Diretoria</a>
                    </div>
                </nav>
            </div>
            <div class="_text">
                <h2>ABS - PE</h2>
                <p>A vontade de transformar vidas através do conhecimento do vinho e de outras bebidas levou José
                    Roberto Dantas e Marco Antônio Freitas, incentivados pelo mestre Arthur Azevedo, a fundarem aquele
                    que seria o maior e mais respeitado centro de ensino do vinho no Nordeste: a ABS – PE. Difundir a
                    cultura do vinho - seu cultivo, produção, elaboração, degustação e avaliação, e qualificar pessoas
                    interessadas em se tornarem especialistas nesse universo é o que mais apreciamos fazer. A todos que
                    desejam conhecer mais sobre a cultura do vinho no mundo e se profissionalizar na área, sejam
                    bem-vindos a nossa casa!
                </p>
            </div>
        </div>
    </section>

    {{-- NUMEROS --}}
    @include("site.includes.numeros")

    {{-- VANTAGENS --}}
    @include("site.includes.vantagens")

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
