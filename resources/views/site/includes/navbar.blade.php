<header class="container-fluid">
    <div class="container-fav">
        <main>
            <div class="logos _hi">
                <a href="/" class="logo-abspe">
                    <img src="{{ asset('site/img/_logo92.png') }}" alt="Logo ABS-Pernambuco" />
                </a>

                <a href="/" class="logo-asi">
                    <img src="{{ asset('site/img/_logoASI_92.png') }}" alt="Logo ASI" />
                </a>
            </div>

            <nav>
                <ul class="_hi">
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.cursos') }}">Cursos e Eventos</a></li>
                    <li><a href="{{ route('site.quem_somos') }}">ABS - PE</a></li>
                    <li><a href="{{ route('site.experiencia') }}">Experiencias</a></li>
                    <li><a href="{{ route('site.noticias') }}">Blog</a></li>
                    <li><a href="{{ route('site.galerias') }}">Galeria</a></li>
                    <li><a href="{{ route('site.imprensa') }}">Contato</a></li>
                </ul>
            </nav>

            {{-- <button class="menu-item btn-primary">Associado</a></button> --}}
            @if (!session()->get('aluno'))
                <button class="menu-item btn-primary"
                    onclick="window.location.href = '{{ route('site.minha-conta') }}'">Minha conta</a></button>
            @else
                <button class="menu-item btn-primary"
                    onclick="window.location.href = '{{ route('site.minha-area') }}'">Minha área</a></button>
            @endif
            <button class="menu-item hamburguer-menu">
                <img src="{{ asset('site/img/hamburguer.svg') }}" alt="" />
            </button>

            <img class="h_gradient" src="{{ asset('site/img/gradient.png') }}" alt="" />
        </main>
    </div>
</header>

<div id="backdrop">
    <div class="logo"><img src="{{ asset('site/img/_logo91.png') }}" alt="Logo ABS-Brasil"></div>
</div>
