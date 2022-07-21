@extends('site.template.main', ['titulo' => 'Curso Amantes do Vinho | ABS-PE'])

@section('body_attr', 'class=infinite-page')

@section('content')

    <div class="solitary-logo">
        <picture>
            <img src="{{ asset('site/assets/img/bigger_logo.svg') }}" alt="logo">
        </picture>
    </div>



    <section class="infinite-hero" id="inicio">
        <div n-class="niv">
            <div class="niv-left-area">
                <h1 n-class="fade --initial--no-delay">
                    Inicie sua jornada no apaixonante
                    <strong>
                        universo dos vinhos
                    </strong>
                </h1>

                <p>
                    O Curso Amantes do Vinho foi criado para você, apaixonado pela bebida, para descobrir um pouco mais
                    desse fascinante universo do vinho.
                </p>

                <div class="details">
                    <span>
                        <i class='bx bx-calendar-alt'></i>
                        22/08, 29/08, 05/09, 12/09, e 19/09.
                    </span>
                    <span>
                        <i class="bx bx-time"></i>
                        Das 19h às 22h
                    </span>
                    <span>
                        <i class='bx bx-pin'></i>
                        Senac, Av. Visc. de Suassuna, 500 Santo Amaro, Recife - PE
                    </span>
                </div>
            </div>

            <div class="niv-right-area">
                <picture class="--open-video">
                    <img src="{{ asset('site/assets/img/video_thumb_small.png') }}" alt="vídeo pequeno">
                </picture>
            </div>
        </div>
    </section>


    <section class="infinite-effect">
        <div n-class="niv">
            <h4 n-class="fade">Faça sua inscrição!</h4>
            <h2>Amantes <strong>do vinho</strong></h2>

            <p n-class="fade">
                A escalada do saber é um caminho sem volta e queremos que você dê o primeiro passo. Te convidamos para a
                ação. Para expandir ainda mais a sua paixão por vinhos venha aprender com quem mais aprecia ensinar sobre
                ele – desde o cultivo, produção, elaboração, degustação e avaliação.

            </p>

            <a href="{{ route('site.splash') }}" class="btn --filled animation-expanding">
                <span>inscrever</span>
            </a>
        </div>
    </section>

    <section class="boxes --no-background">
        <div n-class="niv">
            <div class="boxes">
                <div class="box" n-class="fade">
                    <picture>
                        <img src="{{ asset('site/assets/img/boxes_icon.svg') }}" alt="ícone">
                    </picture>

                    <p><strong>R$ 1.000,00</strong>
                        em até 5x</p>

                    <a href="{{ route('site.splash') }}" class="btn --filled">
                        <span>inscrever</span>
                    </a>
                </div>
                <div class="box" n-class="fade">
                    <picture>
                        <img src="{{ asset('site/assets/img/boxes_icon.svg') }}" alt="ícone">
                    </picture>

                    <p><strong>R$ 900,00</strong>
                        à vista</p>


                    <a href="{{ route('site.splash') }}" class="btn --filled">
                        <span>inscrever</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="second --alternative">
        <div n-class="niv">
            <div class="niv-left-area">
                <div n-class="fade">
                    <picture>
                        <img src="{{ asset('site/assets/img/vendas_perfil.png') }}" alt="Foto representativa longa">
                    </picture>
                </div>
            </div>

            <div class="niv-right-area">
                <h3 n-class="fade">
                    Por que você deve<br>
                    <strong>FAZER ESTE CURSO?</strong>
                </h3>

                <p>
                    O Amantes do Vinho não é um curso profissionalizante, é um curso, como indica o nome, para amantes da
                    bebida.
                    <br><br>
                    Se você tem mais de 18 anos, é apaixonado por vinhos, quer aprender mais sobre este universo fascinante
                    junto de especialistas renomados que te guiarão rumo a um conhecimento valioso,
                    <br>
                    ESSE CURSO FOI FEITO
                    PARA VOCÊ!

                </p>

                <a href="{{ route('site.splash') }}" class="btn --filled animation-expanding">
                    <span>inscrever</span>
                </a>
            </div>
        </div>
    </section>


    <div n-class="modal" id="video_modal">
        <div n-class="modal-box">
            <div n-class="modal-content">

                <div n-class="modal-close-icon" class="niv-modal-icon">
                    <img src="{{ asset('/site/assets/default/close_icon.svg') }}" alt="Fechar">
                </div>

                {{-- <iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> --}}

                <video src="{{ asset('site/assets/video.mp4') }}" controls></video>
            </div>
        </div>
    </div>

    <section class="duvidas" id="duvidas">
        <div n-class="niv">
            <div class="niv-title">
                <h3>Módulos</h3>
            </div>

            <div class="niv-area">
                <details open>
                    <summary>1 • Módulo</summary>
                    <p>
                        1. História do vinho<br>
                        2. Tipos de vinho<br>
                        3. Fatores determinantes na qualidade do vinho<br>
                        4. Principais Regiões Vinícolas<br>
                        5. Vinificação Brancos<br>
                        6. Degustação Vinhos Sauvignon Blanc, Riesling, Pinot Gris, Chardonnay
                    </p>
                </details>
                <details>
                    <summary>2 • Módulo</summary>
                    <p>
                        1. O Serviço do Vinho<br>
                        2. Vinificação Rosés<br>
                        3. Degustação Rosés
                    </p>
                </details>
                <details>
                    <summary>3 • Módulo</summary>
                    <p>
                        1. Rótulos<br>
                        2. Como Comprar e Armazenar o Vinho<br>
                        3. Vinificação de Espumantes<br>
                        4. Degustação Espumantes e Champagne
                    </p>
                </details>
                <details>
                    <summary>4 • Módulo</summary>
                    <p>
                        1. Vinho e Saúde<br>
                        2. Vinificação Tintos<br>
                        3. Degustação Espumantes e Champagne
                    </p>
                </details>
                <details>
                    <summary>5 • Módulo</summary>
                    <p>
                        1. Harmonização<br>
                        2. Vinhos Doces e Foritificados<br>
                        3. Degustação Porto, Madeira,Jerez, Sauternes
                    </p>
                </details>
                <details>
                    <summary>6 • Módulo</summary>
                    <p>
                        1. A madeira e o vinho<br>
                        2. A influência da madeira no vinho branco<br>
                        3. A influência da madeira no vinho tinto
                    </p>
                </details>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <div n-class="niv">
            <h2 class="animation-expanding">Garanta já sua <strong>inscrição!</strong></h2>

            <a href="{{ route('site.splash') }}" class="btn --filled"><span>inscrever</span></a>

            <picture>
                <img src="{{ asset('site/assets/img/button_effect_mini.png') }}" alt="efeito botão">
            </picture>

        </div>
    </section>

@endsection

@section('scripts')
    <script>
        < script >
            $('.--open-video').click(() => {
                n$('#video_modal').show();
            })
    </script>
    </script>
@endsection
