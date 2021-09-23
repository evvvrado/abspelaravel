@include("site.includes.head")

<body class="_blog">

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


    <!-- SECTIONS EXTRAS -->
    @if($destaques)
        <section class="container-fluid s_blog-vertical">
            <div class="container-fav">
                @foreach($destaques as $destaque)
                    <div class="vertical-blog">
                        <div class="img"><img src="{{asset($destaque->preview)}}" alt="{{$destaque->titulo}}"></div>
                        <div class="_title">{{$destaque->titulo}}</div>
                        <button class="btn-alternative" onclick="{{ asset($destaque->slug) }}">
                            <span>Saiba Mais</span>
                            <div class="svg">
                                <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                            </div>
                        </button>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <section class="container-fluid s_blogmenu">
        <div class="container-fav">
            <h2>Categorias</h2>
            <div class="_menu">
                <nav>
                    <div class="nav-component @if(url()->current() == route('site.noticias', ['slug' => ''])) _active @endif">
                        <a href="{{route('site.noticias')}}" >Todas</a>
                    </div>
                    @foreach(App\Models\Categoria::all() as $categoria)
                        <div class="nav-component @if(url()->current() == route('site.noticias', ['slug' => $categoria->slug])) _active @endif">
                            <a href="{{route('site.noticias', ['slug' => $categoria->slug])}}">{{$categoria->nome}}</a>
                        </div>
                    @endforeach
                </nav>
            </div>
        </div>
    </section>
    <section class="container-fluid s_blog">
        <div class="container-fav">
            @php
                $cont = 0;
            @endphp
            @foreach($noticias as $noticia)
                @if($cont == 0)
                    <div class="blog-group">
                @endif
                        <div class="blog-item">
                            <div class="blog-pic">
                                <div class="img">
                                    <img src="{{asset($noticia->preview)}}" alt="{{$noticia->titulo}}" />
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="row">
                                    <div class="icon-group">
                                        <div class="svg">
                                            <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                        </div>
                                        <span>{{date("d.m.Y", strtotime($noticia->publicacao))}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text" style="margin-top: 15px;">
                                        <span>{!! $noticia->resumo !!}</span>
                                    </div>
                                    <button class="btn-alternative" onclick="window.location = '{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}'">
                                        LEIA MAIS
                                    </button>
                                </div>
                            </div>
                        </div>
                @php
                    $cont++;
                @endphp
                @if($cont == 3)
                    </div>
                @endif
            @endforeach
            {{--  <div class="blog-group">
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia1.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia2.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative" onclick="window.location.href = '/blog-post.html'">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-group">
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia1.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia2.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-pic">
                        <div class="img">
                            <img src="{{asset('site/img/_noticia3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="icon-group">
                                <div class="svg">
                                    <img src="{{asset('site/img/calendarpointed.svg')}}" alt="" />
                                </div>
                                <span>22 junho 2021</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                <span>Simply dummy text of the printing typesetting industry. </span>
                            </div>
                            <button class="btn-alternative" onclick="window.location.href = '/blog-post.html'">
                                LEIA MAIS
                            </button>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
