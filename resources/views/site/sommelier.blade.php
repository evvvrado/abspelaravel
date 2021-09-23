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
            <h1>Sommelier</h1>
        </div>

    </section>
    <!-- SECTION HERO -->


    <!-- SECTIONS EXTRAS -->
    <section class="container-fluid s_quem-somos" id="quem-somos">
        <div class="container-fav">
            <div class="_menu">
                <nav>
                    <div class="nav-component">
                        <a href="{{ route('site.quem_somos') }}#quem-somos">Quem Somos</a>
                    </div>
                    <div class="nav-component _active">
                        <a href="{{ route('site.sommelier') }}#quem-somos">Sommelier</a>
                    </div>
                    <div class="nav-component">
                        <a href="{{ route('site.diretoria') }}#quem-somos">Diretoria</a>
                    </div>
                </nav>
            </div>
            <div class="_text">
                <h2>Sommelier: conheça a profissão</h2>
                <p>Quando houve a popularização dos restaurantes em Paris, no final do séc. XVIII, convencionou-se que
                    quem trazia ou transportava o vinho ficava com a obrigação de prová-lo para garantir que o produto
                    era de boa qualidade. Assim, nasceu a profissão como é conhecida hoje. O sommelier é responsável
                    pela escolha, compra, recebimento, guarda e pela prova do vinho antes que seja servido ao cliente.
                    Recentemente, a profissão foi regulamentada no Brasil, através da Lei 12.467 de 26 de agosto de
                    2011, reconhecendo a importância desse profissional no setor de alimentos e bebidas.
                    <br><br>
                    <strong>O que faz esse profissional ?</strong><br>
                    Especialista que aconselha os clientes na escolha dos vinhos e outros itens (destilados, café,
                    chocolate, pão, azeite etc.) em restaurantes e bares, com o objetivo de proporcionar o melhor padrão
                    de serviços e garantir a melhor experiência enogastronômica possível. Dependendo da sua
                    responsabilidade e experiência, o sommelier pode ser também responsável pela compra, gestão de
                    estoques e gerenciamento da carta de vinhos e outros produtos dos estabelecimentos aos quais presta
                    serviços.
                    <br><br>
                    <strong>Como é o dia a dia da profissão?</strong><br>
                    A profissão de sommelier hoje é multifacetada e não mais se limita ao trabalho em restaurantes. Cada
                    vez mais, o conhecimento e “expertise” dos sommeliers têm-se tornado essenciais em importadoras,
                    lojas de vinhos, supermercados e à serviço de produtores, brasileiros ou estrangeiros, auxiliando no
                    marketing e divulgação dos vinhos e levando informação qualificada ao consumidor.
                    <br><br>
                    <strong>Como está o mercado de trabalho para o Sommelier?</strong><br>
                    Por motivos óbvios, o mercado foi duramente afetado durante a pandemia, assim como todo o setor de
                    serviços e, particularmente, restaurantes e bares. Por outro lado, nesse período constatou-se um
                    aumento do consumo de vinhos nos domicílios e um crescimento da compra por meios digitais, ampliando
                    consideravelmente o mercado. Espera-se que pelo menos uma parcela dessa expansão do mercado de
                    vinhos se torne permanente, ainda mais com o início do processo de vacinação em massa da população.
                    Tudo isso são sinais positivos de que não faltarão boas oportunidades aos profissionais melhor
                    qualificados, como os que são formados pelas ABS em todo o país.
                    <br><br>
                    <strong>Qual a carga horária e a média salarial no Brasil?</strong><br>
                    O salário inicial de um sommelier em um restaurante gira em torno de R$ 3.000,00 com média de 30
                    horas semanais de trabalho. Já em importadoras, lojas de vinho e produtores, o salário varia de
                    acordo com o tamanho da empresa e o escopo das responsabilidades.
                    <br><br>
                    <strong>Qual a influência da regulamentação da profissão?</strong><br>
                    Esse foi passo fundamental no reconhecimento e valorização da atividade e dos seus profissionais,
                    que pouco a pouco ganham reconhecimento semelhante ao já existente em países com maior tradição na
                    cultura do vinho, a exemplo dos países europeus.
                    <br><br>
                    <strong>O que é preciso para seguir a profissão? Existem muitos cursos disponíveis</strong><br>
                    A principal qualidade que distingue os grandes sommeliers é uma ATITUDE empática e humilde em
                    relação aquele que deve ser sempre o foco de seu trabalho: o cliente, que tem sempre razão! Todos os
                    demais atributos, como conhecimento (teórico e prático), educação e postura adequada podem (e devem)
                    ser desenvolvidos e aperfeiçoados com o passar do tempo e com o aprimoramento constante das suas
                    habilidades por meio de cursos, viagens técnicas e degustações, mas a base será sempre a atitude. O
                    mercado oferece muitos cursos, a maioria deles de pequena duração e baixa carga horária de estudo. O
                    diploma eventualmente recebido ao final de um deles será de pouca valia em um mercado cada vez mais
                    exigente em relação à qualificação dos profissionais que nele atuam. Selecionar um bom curso de
                    formação, reconhecido por sua tradição e reputação, é o passo mais importante que um interessado em
                    abraçar essa nobre profissão deve tomar. O investimento em um curso sério e exigente provavelmente
                    será maior, mas a recompensa que virá ao final também.<br><br>
                </p>
            </div>
        </div>
    </section>

    {{-- VANTAGENS --}}
    @include("site.includes.vantagens")

    {{-- PARCEIROS --}}
    @include("site.includes.parceiros")

    <script>

    </script>

    @include("site.includes.footer")
