@include("site.includes.head")

<body class="_imprensa">

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

    <section class="container-fluid s_hero">
        <div class="container-fav">
            <h1>Assessoria de Imprensa</h1>
        </div>
       
      </section>
      

    <!-- SECTIONS EXTRAS -->
    <div class="contaienr-fluid filterMenu">
        <div class="container-fav">
            <div class="title">
                <nav class="_filter">
                    <h2 class="_cursosbutton _active">Imprensa</h2>
                    <h2 class="_eventosbutton">Contato</h2>
                </nav>
            </div>
        </div>
    </div>
    <section class="container-fluid s_acessoria">
        <div class="container-fav">
            <div class="_right">
                <div class="_text">
                    <h4>Acessoria de imprensa</h4>
                    <p>Se você é jornalista ou profissional de comunicação e está interessados em falar conosco, entre em contato através dos canais abaixo:</p>
                </div>
                <div class="_info">
                    <div class="_contact">
                        <div class="svg">
                            <img src="{{asset('site/img/imprensaPhone.svg')}}" alt="">
                        </div>
                        <span>(81) 98262-2200</span>
                    </div>
                    <div class="_pin">
                        <div class="svg">
                            <img src="{{asset('site/img/imprensaPin.svg')}}" alt="">
                        </div>
                        <p>contato@abs-pe.com.br</p>
                    </div>
                </div>
            </div>
            <div class="_left">
                <div class="_text">
                    <h4>Baixar mídia kit</h4>
                </div>
                <div class="_buttons">
                    <button class="btn-primary">Arquivo 1</button>
                    <button class="btn-primary">Arquivo 2</button>
                    <button class="btn-primary">Arquivo 3</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid s_acessoria s_contato">
        <div class="container-fav">
            <div class="_content">
                <div class="_right">
                    <div class="_text">
                        <h4>Suporte Online</h4>
                        <p>Nosso suporte online é um canal de comunicação desenvolvido para que possa nos enviar sugestões, solicitações e feedbacks. Fale conosco! </p>
                    </div>
                    <div class="_info">
                        <div class="_contact">
                            <div class="svg">
                                <img src="{{asset('site/img/imprensaPhone.svg')}}" alt="">
                            </div>
                            <span>(81) 98262-2200</span>
                        </div>
                        <div class="_pin">
                            <div class="svg">
                                <img src="{{asset('site/img/imprensaPin.svg')}}" alt="">
                            </div>
                            <p>Av. República do Líbano, 251 <br>Torre 3 - Sala 2801<br> Recife, PE</p>
                        </div>
                        <div class="_pin">
                            <div class="svg">
                                <img src="{{asset('site/img/imprensaEnvelop.svg')}}" alt="">
                            </div>
                            <p>contato@abs-pe.com.br</p>
                        </div>
                    </div>
                </div>
                <div class="_left">
                    <div class="_text">
                        <h2>Fale com a ABS-PE</h2>
                    </div>
                    <form onsubmit="return false" method="POST">
                        <label>
                            <input type="text" name="nome" placeholder="Nome:">
                        </label>
                        <label>
                            <input type="email" name="email" placeholder="E-mail:">
                        </label>
                        <label>
                            <input type="tel" name="telefone" placeholder="Telefone:">
                        </label>
                        <label>
                            <input type="text" name="cidade" placeholder="Cidade:">
                        </label>
                        <label>
                            <textarea name="text" id="" cols="30" rows="10" placeholder="Mensagem:"></textarea>
                        </label>
                        <button class="btn-primary">
                            Enviar
                            <div class="svg">
                                <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="local">
                <img src="{{asset('site/img/local.png')}}" alt="">
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
