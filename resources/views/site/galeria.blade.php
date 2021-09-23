@include("site.includes.head")

<body class="_galeria">

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
            <h2>{{$galeria->nome}}</h2>
            <main>
                <div class="_arrowback _arrow"><img src="{{asset('site/img/arrowlong_56_left.svg')}}" alt=""></div>
                    <div class="_mainImage"><img src="{{asset($galeria->fotos->first()->imagem)}}" alt="Imagem presente na galeria da ABS - Pernambuco"></div>
                <div class="_arrownext _arrow"><img src="{{asset('site/img/arrowlong_56_right.svg')}}" alt=""></div>
            </main>
            <div class="galleryContent">
                <div class="_list">
                    @php
                        $primeiro = true;
                    @endphp
                    @foreach($galeria->fotos as $foto)
                        <div class="_img @if($primeiro) _active @endif" onclick="defineMain(this)" data-source="{!! asset($foto->imagem) !!}">
                            <img src="{{asset($foto->imagem)}}" alt="Imagem presente na galeria da ABS - Pernambuco">
                        </div>
                        @php
                            $primeiro = false;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")
    
    
    @include("site.includes.footer")


    <script>
        var galeriaImg = Array();
    </script>
    

    @foreach($galeria->fotos as $foto)
        <script>
            galeriaImg.push('{!! asset($foto->imagem) !!}');
        </script>
    @endforeach

    <script>

        
    var gallerySelectedImage = 0;
    var galleryImages = galeriaImg.length;
    var arrowNext = $("body._galeria section.s_galeria main ._arrow:last-child");
    var arrowPrevious = $("body._galeria section.s_galeria main ._arrow:first-child");
    var mainImage = $("body._galeria section.s_galeria main ._mainImage img");

    arrowPrevious.click(() => {
        if (gallerySelectedImage <= 0) return 0;

        gallerySelectedImage--;

        mainImage.attr(
            "src",
            galeriaImg[gallerySelectedImage]
        );

        $(`body._galeria section.s_galeria ._list ._img`).removeClass("_active");
        $(
            `body._galeria section.s_galeria ._list ._img:nth-child(${
                gallerySelectedImage + 1
            })`
        ).addClass("_active");

    });


    arrowNext.click(() => {
        if (gallerySelectedImage + 1 >= galleryImages) return 0;

        gallerySelectedImage++;

        mainImage.attr(
            "src",
            galeriaImg[gallerySelectedImage]
        );
        $(`body._galeria section.s_galeria ._list ._img`).removeClass("_active");
        $(
            `body._galeria section.s_galeria ._list ._img:nth-child(${
                gallerySelectedImage + 1
            })`
        ).addClass("_active");
    });

    function defineMain(obj) {
        mainImage.attr(
            "src",
            $(obj).attr('data-source')
        );        

        $('body._galerias._galeria section.s_galeria ._img, body._galeria section.s_galeria ._list ._img').removeClass('_active');
        $(obj).addClass('_active');
        

        gallerySelectedImage = galeriaImg.indexOf(`${$(obj).attr('data-source')}`)


    }

        



    </script>

