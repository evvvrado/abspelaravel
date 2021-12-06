@include("site.includes.head")

<body class="_experiencia">

    <section class="container-fluid _infobox">
        <div class="_box">
            <span id="_info"></span>
        </div>
        <div class="_loadingBox">
        </div>
    </section>



    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{-- BARRA DE LOGIN E CADASTRE-SE --}}
    @include("site.includes.barra_login")


    {{-- NAVBAR SUPEROR --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <!-- SECTION HERO -->
    <section class="container-fluid s_hero" style="background-image: url('{{ asset('site/img/banneraguarde.jpg') }}');">
        <div class="container-fav">
            <div class="text">

                <div class="title">
                    <h1>Novidades lhe esperam em 2022</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION HERO -->


    {{-- NUMEROS --}}
    @include("site.includes.numeros")

    <script>

    </script>

    @include("site.includes.footer")