@include("site.includes.head")

<body class="_galerias _galeria">

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


    <section class="container-fluid s_galeria">
        <div class="container-fav">
            @foreach($galerias as $galeria)
                <h2>$galeria->nome</h2>
                <div class="galleryContent">
                    <div class="_list">
                        @foreach($galeria->fotos as $foto)
                            <a href="{{route('site.galeria', ['slug' => $galeria->slug])}}" class="_img">
                                <img src="{{asset($foto->imagem)}}" alt="Imagem presente na galeria - {{$foto->galeria->nome}}">
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
