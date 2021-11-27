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
            <h1>Diretoria</h1>
        </div>

    </section>
    <!-- SECTION HERO -->


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
                            <p>O vinho é uma bebida única, que desperta nossos sentidos e emoções, e cada garrafa aberta nos transporta para o local onde ele foi produzido. Os cuidados com as vinhas, a paixão e o respeito do enólogo em dar o seu máximo para produzir essa bebida é o que chega à nossa taça. O vinho tem uma capacidade incrível de aproximar as pessoas.</p>
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
                            <p>Através do vinho, aprendemos e ensinamos, viajamos, descobrimos lugares, fazemos amigos, sentimos emoções e até nos apaixonamos. </p>
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
                            <p>O mais fascinante do mundo dos vinhos é a capacidade que ele tem de provocar  emoções</p>
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
                            <p>O melhor do vinho é o fato de que ele agrega pessoas, pois degustado sozinho não tem graça.</p>
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
                            <p>A possibilidade de conhecimentos em todos os âmbitos, geográfico, pessoal e principalmente do próximo vinho, é o mais fascinante desse universo</p>
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
                            <p>Sobre vinhos: a certeza de que sempre haverá muito por descobrir e aprender me encanta! </p>
                        </div>
                    </main>

                </div>

                <div class="_diretor showin">
                    <div class="img">
                        <img src="{{ asset('site/img/_dRenato.jpg') }}" alt="">
                    </div>
                    <main>
                        <div class="_name">
                            SHEILA MACIEL
                        </div>
                        <div class="_cargo">
                            <img src="{{ asset('site/img/medal.svg') }}" alt="">
                            Diretor Executivo
                        </div>
                        <div class="_description">
                            <p>O vinho é muito mais que uma bebida, é uma obra de arte! Da videira à taça há um grande processo que envolve pessoas dedicadas, conhecimentos herdados por muitas gerações, tecnologia, enfim, um mundo onde todos buscam a  entrega do melhor sabor do seu terroir </p>
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
