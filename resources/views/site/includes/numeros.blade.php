<section class="container-fluid s_numeros">
    <div class="container-fav showin">
        <div class="img">
            <img src="{{ asset('site/img/nossosnumeros.jpg') }}" alt="Duas taças">
        </div>

        <div class="text">
            <h2>Nossos Números</h2>
            <p>Não são apenas números. São momentos vividos, amizades construídas e muito trabalho dedicado ao longo
                desses anos para oferecer o melhor para os amantes do universo dos vinhos, e com muita alegria e
                satisfação podemos dizer que estamos construindo uma grande história! </p>

            <div class="number-card">
                <div class="cards">
                    <h1>31</h1>
                    <span>Anos de história</span>
                </div>
                <div class="cards">
                    <span>mais de</span>
                    <h1>150</h1>
                    <span>Associados</span>
                </div>
                <div class="cards">
                    <h1>41</h1>
                    <span>Instrutores</span>
                </div>
            </div>

            <button class="btn-primary"
            onclick="window.location.href = '{{ route('site.experiencia')}}'"">
                CONHEÇA AS VANTAGENS DE SER ASSOCIADO
            </button>
        </div>
    </div>
</section>
