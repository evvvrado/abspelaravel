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


    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_quem-somos _diretoria" id="quem-somos">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div class="nav-component">
                        <a href="{{ route('site.quem_somos') }}#quem-somos">Quem Somos</a>
                    </div>
                    <div class="nav-component">
                        <a href="{{ route('site.sommelier') }}#quem-somos">Sommelier</a>
                    </div>
                    <div class="nav-component _active">
                        <a href="{{ route('site.diretoria') }}#quem-somos">Diretoria</a>
                    </div>
                </nav>
            </div>
            <div class="_diretores">
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            HERMILO BORBA GRIZ
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            JOSÉ ROBERTO FERREIRA DANTAS
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Vice-presidente
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            PEDRO HENRIQUE DANTAS PERES DE OLIVEIRA
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Tesoureiro
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>
                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            PEDRO JOSÉ DE ALBUQUERQUE PONTES
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Secretário
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            MARCO ANTÔNIO GONÇALVES DE FREITAS
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Executivo
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            ANTÔNIO AGOSTINHO LOPES DA SILVA
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Executivo
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            MARIA EDUARDA VIEIRA DE FIGUEIREDO RAMALHO
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretora Executiva
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            ROBERTO TENÓRIO
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Executivo
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            ALCÉLIO SILVA
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Executivo
                        </div>
                        <div class="_description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus rhoncus diam eros molestie
                                augue volutpat turpis nibh. Sollicitudin non elit vitae egestas tempor consectetur
                                curabitur sapien. Est aliquet a eget amet vel scelerisque. </p>
                        </div>
                    </main>

                </div>


            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
