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
            <h1>Fale conosco!</h1>
        </div>

    </section>


    <!-- SECTIONS EXTRAS -->
    <div class="contaienr-fluid filterMenu">
        <div class="container-fav">
            <div class="title">
                <nav class="_filter">
                    <h2 class="_eventosbutton _active">Contato</h2>
                    <h2 class="_cursosbutton">Imprensa</h2>
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
                            <p>Rua Desembargador Gois Cavalcante,<br> 316, Sala 101,<br> Parnamirim, Recife - PE</p>
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
                        <button class="btn-primary" onclick="sendmessage()">
                            Enviar
                            <div class="svg">
                                <img src="{{asset('site/img/arrowlong.svg')}}" alt="">
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="local">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.682527679753!2d-34.9117342846195!3d-8.031631494216535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab19ab9cbc063b%3A0x86f15e42575e7623!2sRua%20Desembargador%20G%C3%B3is%20Cavalcante%2C%20316%20-%20Parnamirim%2C%20Recife%20-%20PE%2C%2052060-000!5e0!3m2!1spt-BR!2sbr!4v1632497925850!5m2!1spt-BR!2sbr"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>
        function sendmessage() {
            var nome = $('input[name = "nome"]').val();
            var email = $('input[name = "email"]').val();
            var cellphone = $('input[name = "telefone"]').val();
            var message = $('textarea[name = "text"]').val();

            window.open(`https://web.whatsapp.com/send?phone=5581982622200&text=Olá, sou ${nome}. ${message}. Me contate! E-mail: ${email}\nCelular: ${cellphone}`)
        }
    </script>

    @include("site.includes.footer")