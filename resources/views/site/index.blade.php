@include("site.includes.head")

<body class="_home">

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
    <section class="container-fluid s_hero">
        @php
        $turma = $turmas->first();


        if($turma){
        $parcelas = $turma->parcelas;
        $valor_parcela = $turma->preco / $parcelas;
        $reais_parcelas = floor($valor_parcela);
        $centavos_parcelas = $valor_parcela - $reais_parcelas;
        };
        @endphp


        @if ($turma)
        <div class="hero_cards">
            <div>
                <img src="{{ asset('site/img/calendarpointed.svg') }}" alt="" />
                <span>{{ date('d.m.y', strtotime($turma->data)) }}</span>
            </div>
            <div>
                <img src="{{ asset('site/img/alarm.svg') }}" alt="" />
                <span>Às {{ date('H:i', strtotime($turma->horario)) }}</span>
            </div>
        </div>

        <div class="container-fav">
            <div class="text">
                <div class="curso_online">
                    <img src="{{ asset('site/img/greenball.svg') }}" alt="" />
                    <p>Curso online</p>
                </div>

                <div class="title">
                    <h1>{{ $turma->curso->titulo }}</h1>
                </div>
                <div class="info">
                    <p class="minitext">Apenas</p>
                    <h1>
                        {{ $turma->parcelas }}x <span class="lowsized">R$</span>@if($reais_parcelas > 1000){{ number_format($reais_parcelas, 0, ",", ".") }}@else{{$reais_parcelas}}@endif<span
                            class="lowsized">,@if ($centavos_parcelas == 0)00
                            @else{{number_format($centavos_parcelas * 100)}}
                            @endif
                        </span>

                        <script>
                            console.log({{number_format($centavos_parcelas)}})
                        </script>
                    </h1>
                </div>
                <button class="btn-primary" onclick="window.location.href = '{{route('site.curso', ['slug' => $turma->curso->slug])}}'">
                    Inscreva-se
                </button>
            </div>

            <div class="hero_indicator">
                <div>
                    <img src="{{ asset('site/img/heroindicator_A.svg') }}" alt="" />
                </div>

                <div>
                    <img src="{{ asset('site/img/heroindicator_B.svg') }}" alt="" />
                </div>
                <!-- 
            <div>
                <img src="{{ asset('site/img/heroindicator_B.svg') }}" alt="" />
            </div> -->
            </div>
        </div>
        @else
        <div class="container-fav">
            <div class="text">
                <div class="curso_online">
                    <img src="{{ asset('site/img/greenball.svg') }}" alt="" />
                    <p>Em Breve</p>
                </div>

                <div class="title">
                    <h1>Aguarde por novidades!</h1>
                </div>
            </div>

            <div class="hero_indicator">
                <div>
                    <img src="{{ asset('site/img/heroindicator_A.svg') }}" alt="" />
                </div>

                <div>
                    <img src="{{ asset('site/img/heroindicator_B.svg') }}" alt="" />
                </div>
                <!-- 
            <div>
                <img src="{{ asset('site/img/heroindicator_B.svg') }}" alt="" />
            </div> -->
            </div>
        </div>

        @endif
    </section>
    <!-- SECTION HERO -->

    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_cursos ">
        <div class="container-fav showin">
            <div class="content">
                <div class="title confira">
                    <h2>Confira nossa agenda para os próximos dias</h2>
                    <p>
                        Acompanhe nossos cursos e eventos e fique por dentro de todas as novidades do mundo dos vinhos.
                    </p>
                </div>

                @php
                $cont = 0;
                @endphp
                @foreach ($turmas as $turma)
                @if ($cont == 0)
                <div class="curso-group">
                    @endif
                    @php
                    $parcelas = $turma->parcelas;
                    $valor_parcela = $turma->preco / $parcelas;
                    $reais_parcelas = floor($valor_parcela);
                    $centavos_parcelas = $valor_parcela - $reais_parcelas;
                    @endphp

                    <div class="curso-item">
                        <div class="curso-pic">
                            <div class="img">
                                <img src="{{ asset($turma->curso->miniatura) }}" alt="" />
                            </div>
                            <div class="curso_online">
                                <img src="{{ asset('site/img/greenball.svg') }}" alt="" />
                                <p>Curso online</p>
                            </div>
                        </div>
                        <div class="curso-content">
                            <div class="row">
                                <div class="icon-group">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/calendar.svg') }}" alt="" />
                                    </div>
                                    <span>{{ date('d.m.y', strtotime($turma->data)) }}</span>
                                </div>
                                <div class="icon-group">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/bUser.svg') }}" alt="" />
                                    </div>
                                    <span>Presencial</span>
                                </div>
                                <div class="icon-group">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/clock.svg') }}" alt="" />
                                    </div>
                                    <span>às {{ date('H:i', strtotime($turma->horario)) }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/cup.svg') }}" alt="" />
                                    </div>
                                    <span>{{ $turma->curso->titulo }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="price">
                                    {{ $turma->parcelas }}x<span class="lowsized">R$</span>@if($reais_parcelas > 1000){{ number_format($reais_parcelas, 0, ",", ".")
                                    }}@else{{$reais_parcelas}}@endif<span class="lowsized">,@if ($centavos_parcelas == 0)00
                                        @else{{number_format($centavos_parcelas * 100)}}
                                        @endif</span>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn-primary" onclick="window.location.href = '{{route('site.curso', ['slug' => $turma->curso->slug])}}'">
                                    Inscreva-se
                                    <div class="svg">
                                        <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @php
                    $cont++;
                    @endphp
                    @if ($cont == 2)
                </div>
                @php
                $cont = 0;
                @endphp
                @endif
                @endforeach

                @if ($cont != 0)
            </div>
            @endif

            {{-- <div class="title">
                <h2>Junho</h2>
            </div>

            <div class="curso-group">
                <div class="curso-item">
                    <div class="curso-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_curso4.png')}}" alt="" />
                        </div>
                        <div class="curso_online">
                            <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                            <p>Curso online</p>
                        </div>
                    </div>
                    <div class="curso-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                </div>
                                <span>às 20hs</span>
                            </div>
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                </div>
                                <span>Presencial</span>
                            </div>
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                </div>
                                <span>às 20hs</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <div class="svg">
                                    <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                </div>
                                <span>Curso de formação de Sommelier</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="price">
                                10X<span class="lowsized">R$</span>550<span class="lowsized">,00</span>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn-primary">
                                Inscreva-se
                                <div class="svg">
                                    <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="curso-item">
                    <div class="curso-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_curso3.png')}}" alt="" />
                        </div>
                        <div class="curso_online">
                            <img src="{{asset('site/img/greenball.svg')}}" alt="" />
                            <p>Curso online</p>
                        </div>
                    </div>
                    <div class="curso-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendar.svg')}}" alt="" />
                                </div>
                                <span>às 20hs</span>
                            </div>
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/bUser.svg')}}" alt="" />
                                </div>
                                <span>Presencial</span>
                            </div>
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/clock.svg')}}" alt="" />
                                </div>
                                <span>às 20hs</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <div class="svg">
                                    <img src="{{asset('site/img/cup.svg')}}" alt="" />
                                </div>
                                <span>Curso de formação de Sommelier</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="price">
                                10X<span class="lowsized">R$</span>550<span class="lowsized">,00</span>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn-primary">
                                Inscreva-se
                                <div class="svg">
                                    <img src="{{asset('site/img/arrowlong.svg')}}" alt="" />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="btn-case">
                <button class="btn-primary" onclick="window.location.href = '{{ route('site.cursos') }}'">Ver agenda completa</button>
            </div>

        </div>

        </div>
    </section>

    <section class="container-fluid s_quem">
        <div class="container-fav showin">
            <div class="title">
                <h3>Quem Somos</h3>
                <h2>O fascinante e sofisticado universo do vinho está aqui</h2>
                <p>
                    Difundir a cultura do vinho - seu cultivo, produção, elaboração, degustação e avaliação, e
                    qualificar pessoas interessadas em se tornarem especialistas nesse universo é o que mais apreciamos
                    fazer.
                </p>
            </div>

            <div class="_options">
                <div>
                    <h4>Nossos Cursos</h4>
                    <p>
                        Especialistas renomados garantem ensino de excelência para amadores e profissionais
                    </p>
                    <button class="btn-alternative" onclick="window.location.href = '{{ route('site.cursos') }}'">AGENDA</button>
                </div>

                <div>
                    <h4>Nossos Eventos</h4>
                    <p>
                        Momentos únicos regados a maravilhosos <br> vinhos compõem as degustações organizadas pela ABS – PE.
                    </p>
                    <button class="btn-alternative" onclick="window.location.href = '{{ route('site.cursos') }}#eventos'">AGENDA</button>
                </div>
            </div>
        </div>

        </div>
    </section>

    {{-- NUMEROS --}}
    @include("site.includes.numeros")

    {{-- VANTAGENS --}}
    @include("site.includes.vantagens")

    <section class="container-fluid s_blog">
        <div class="container-fav">
            <div class="text">
                <h2>Blog</h2>
                <button class="btn-primary" onclick="window.location.href = '{{ route('site.noticias') }}' ">Acessar
                    blog</button>
            </div>

            <div class="blog-group">
                @foreach(\App\Models\Noticia::orderBy('publicacao', 'DESC')->take(3)->get() as $noticia)
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{ asset($noticia->preview) }}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{ asset('site/img/calendarpointed.svg') }}" alt="" />
                                </div>
                                <span>{{ date('d/m/Y', strtotime($noticia->publicacao)) }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>{{ $noticia->titulo }}</span>
                            </div>
                            <button class="btn-alternative" onclick="window.location = '{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}'">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    @include("site.includes.footer")