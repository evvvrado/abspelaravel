<!-- BARRA SUPERIOR DE LOGIN E HEADER-->
@if (!session()->get('aluno'))
<section class="container-fluid s_welcome">
    <div class="main container-fav">
        <div class="text">
            <span>Seja Bem-vindo! Faça <a href="{{ route('site.minha-conta') }}">Login</a> ou
                <a href="{{ route('site.minha-conta') }}">Cadastre-se</a></span>
        </div>
        <div class="content">
            <div class="welcome_item">
                <div class="phone welcome_item">
                    <img height="20px" src="{{ asset('site/img/WhatsappLogoOferta.svg') }}" alt="" />
                </div>
                <span>(81) 9 8262-2200 </span>
            </div>
            <div class="social welcome_item">
                <a href="https://www.facebook.com/abspernambuco/" class="wSVG">
                    <img src="{{ asset('site/img/FacebookLogo.svg') }}" alt="" />
                </a>
                <a href="https://www.instagram.com/abs_pe/" class="wSVG">
                    <img src="{{ asset('site/img/InstagramLogo.svg') }}" alt="" />
                </a>
                <a href="/" class="wSVG">
                    <img src="{{ asset('site/img/YoutubeLogo.svg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>

@else
<section class="container-fluid s_welcome">
    <div class="main container-fav">
        <div class="text">
            <span>Seja Bem-vindo de volta!</span>
        </div>
        <div class="content">
            <div class="welcome_item">
                <div class="phone welcome_item">
                    <img height="20px" src="{{ asset('site/img/WhatsappLogoOferta.svg') }}" alt="" />
                </div>
                <span>(81) 9 8262-2200 </span>
            </div>
            <div class="social welcome_item">
                <a href="https://www.facebook.com/abspernambuco/" class="wSVG">
                    <img src="{{ asset('site/img/FacebookLogo.svg') }}" alt="" />
                </a>
                <a href="https://www.instagram.com/abs_pe/" class="wSVG">
                    <img src="{{ asset('site/img/InstagramLogo.svg') }}" alt="" />
                </a>
                <a href="/" class="wSVG">
                    <img src="{{ asset('site/img/YoutubeLogo.svg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>

@endif