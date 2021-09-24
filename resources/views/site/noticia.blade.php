@include("site.includes.head")

<body class="_blog-post">

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
        <div class="container-fav">
            <h1></h1>
        </div>

        </section>
        <!-- SECTION HERO -->


        <!-- SECTIONS EXTRAS -->
        <section class="container-fluid s_post">
            
            <div class="container-fav">

                <nav class="post_topbar">
                    <div class="author">
                        <div class="svg">
                            <img src="{{ asset('site/img/bUser.svg') }}" alt="">
                        </div>
                        <p id="post_author">{{$noticia->autor}}</p>
                    </div>
                    <div class="share">
                        <button class="share_btn">
                            <div class="svg">
                                <img src="{{ asset('site/img/share.svg') }}" alt="">
                            </div>
                            <p>Share</p>
                        </button>
                        <div class="svg">
                            <a href=""><img src="{{ asset('site/img/shareYoutube.svg') }}" alt=""></a>
                        </div>
                        <div class="svg">
                            <a><img src="{{ asset('site/img/shareInstagram.svg') }}" alt=""></a>
                        </div>
                        <div class="svg">
                            <a href="mailto:?subject=Artigo blog ABS Pernambuco&amp;body={{ url()->current() }}"><img src="{{ asset('site/img/shareEnvelop.svg') }}" alt=""></a>
                        </div>
                        <div class="svg">
                            <a href="https://twitter.com/home?status={{ url()->current() }}"><img src="{{ asset('site/img/shareTwitter.svg') }}" alt=""></a>
                        </div>
                    </div>
    
            
                </nav>


                <div class="_text">
                    <h2 id="post_title">{{$noticia->titulo}}</h2>
                    <p id="post_content">
                            {{$noticia->subtitulo}}
                        
                        <br><br>
                        {!! $noticia->conteudo !!}
                </div>
            </div>
        </section>
        
        @include('site.includes.vantagens')
  

{{-- PARCEIROS --}}
@include("site.includes.parceiros")

<script>

</script>

@include("site.includes.footer")
