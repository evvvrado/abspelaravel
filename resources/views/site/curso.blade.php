@include("site.includes.head")

<body class="_curso-detalhes">

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
    <section class="container-fluid s_hero" style="background-image: url('/{{ $curso->banner }}')">
        <div class="container-fav">
            <h1>{{$curso->titulo}}</h1>
            {{--  <h3>Módulo I</h3>  --}}
            @php
                $parcelas = $turma->parcelas;
                $valor_parcela = $turma->preco / $parcelas;
                $reais_parcelas = floor($valor_parcela);
                $centavos_parcelas = $valor_parcela - $reais_parcelas;
            @endphp
            <div class="_curso-card">
                <div class="row">
                    <div class="hour">
                        <img src="{{asset('site/img/clock.svg')}}" alt="">
                        {{ date('H:i', strtotime($turma->horario)) }}
                    </div>
                    <div class="present">
                        <img src="{{asset('site/img/bUser.svg')}}" alt="">
                        Presencial
                    </div>
                    <div class="date">
                        <img src="{{asset('site/img/calendarpointed.svg')}}" alt="">
                        {{ date('d.m.y', strtotime($turma->data)) }}
                    </div>
                </div>
                <div class="row">
                    <h1>
                        {{ $turma->parcelas }}X<span class="lowsized">R$</span>{{ $reais_parcelas }}<span
                                                class="lowsized">,{{ number_format($centavos_parcelas * 100, 0) }}</span>
                </h1>
                        @if($turma->aberto)
                        <button class="btn-primary" onclick="window.location.href ='{!! $turma->botao_comprar !!}'">
                            Inscrever
                        </button>

                            {{--  <a href="{{route('site.carrinho-adicionar', ['turma' => $turma])}}">Inscrever-se</a>  --}}
                        @else
                            Encerrado
                        @endif
                </div>
            </div>
        </div>
       
    </section>
    <!-- SECTION HERO -->


    <!-- SECTIONS EXTRAS -->
    
    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_curso-conteudo" id="conteudo">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div onclick="window.location.href = '{{ route('site.curso', ['slug' => $curso->slug])}}'" class="nav-component @if($aba == 'detalhes') _active @endif">
                        <div class="img">
                            @if($aba == 'detalhes')
                                <img src="{{asset('site/img/active_textalign.svg')}}" alt="">
                            @else
                                <img src="{{asset('site/img/textalign.svg')}}" alt="">
                            @endif
                        </div>
                        <a href="{{route('site.curso', ['slug' => $curso->slug])}}">Detalhes</a>
                    </div>
                    <div onclick="window.location.href = '{{ route('site.curso.programacao', ['slug' => $curso->slug])}}'" class="nav-component @if($aba == 'programacao') _active @endif">
                        <div class="img">
                            @if($aba == 'programacao')
                                <img src="{{asset('site/img/active_folder.svg')}}" alt="">
                            @else
                                <img src="{{asset('site/img/folder.svg')}}" alt="">
                            @endif
                        </div>
                        <a href="{{route('site.curso.programacao', ['slug' => $curso->slug])}}">Programação</a>
                    </div>
                    <div onclick="window.location.href = '{{ route('site.curso.instrutores', ['slug' => $curso->slug])}}'" class="nav-component @if($aba == 'instrutores') _active @endif">
                        <div class="img">
                            @if($aba == 'instrutores')
                                <img src="{{asset('site/img/active_user.svg')}}" alt="">
                            @else
                                <img src="{{asset('site/img/iUser.svg')}}" alt="">
                            @endif
                        </div>
                        <a href="{{route('site.curso.instrutores', ['slug' => $curso->slug])}}">Instrutores</a>
                    </div>
                    <div onclick="window.location.href = '{{ route('site.curso.local', ['slug' => $curso->slug])}}'" class="nav-component @if($aba == 'local') _active @endif">
                        <div class="img">
                            @if($aba == 'local')
                                <img src="{{asset('site/img/active_pin.svg')}}" alt="">
                            @else
                                <img src="{{asset('site/img/pin.svg')}}" alt="">
                            @endif
                        </div>
                        <a href="{{route('site.curso.local', ['slug' => $curso->slug])}}">Local</a>
                    </div>
                </nav>
            </div>
            <div class="_text">
                @if($aba == 'detalhes')
                    <h2>Detalhes</h2>
                    {!! $curso->detalhes_conteudo !!}
                @elseif($aba == 'programacao')
                    <h2>Programação</h2>
                    {!! $curso->programacao_conteudo !!}
                @elseif($aba == 'instrutores')
                    <h2>Instrutores</h2>
                    {!! $curso->instrutores_conteudo !!}
                @else
                    <h2>Local</h2>
                    {!! $curso->local_conteudo !!}
                @endif
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")
    <!-- SECTIONS EXTRAS -->
    @include("site.includes.footer")
