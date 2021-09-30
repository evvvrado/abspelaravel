<section class="_meuCarrinho">
    <div class="_top">
        <div class="_title">
            <div class="_icon">
                <img src="{{ asset('site/img/sistema/car.svg') }}" alt="" />
                <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
            </div>
            <span>Meu Carrinho</span>
        </div>
        <div class="_numberofItems">
            <span>{{ $carrinho->produtos->count() }}</span>
        </div>
    </div>
    <div class="_value">
        <p>Total</p>
        <div class="_svg">
            <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
        </div>
        <strong>R$ <span class="_total">{{ number_format($carrinho->total, 2, ',', '.') }}</span></strong>
    </div>
    <div class="_innerCar">
        @foreach ($carrinho->produtos as $produto)
            <div class="_innerItem">
                <div class="_img">
                    <img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
                </div>
                <div class="_content">
                    {{-- <h3 class="isOnline">Curso Online</h3> --}}
                    <h2 class="itemName">{{ $produto->turma->curso->titulo }}</h2>
                    {{-- <p class="itemExtra">Certificado de 10hs</p> --}}
                    <div class="itemValue">
                        <strong>R$ <span
                                class="_itemValue">{{ number_format($produto->total, 2, ',', '.') }}</span></strong>
                        <div class="_controls">
                            <div class="itemControl cancel">
                                <div class="_img">
                                    <img src="{{ asset('site/img/sistema/cancel.svg') }}"
                                        onclick="window.location.href = '{{ route('site.carrinho-remover', ['turma' => $produto->turma]) }}'"
                                        alt="" />
                                </div>
                            </div>
                            {{-- <div class="itemControl more">
                                <div class="_img">
                                    <img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="_bottom">
        <div class="_subTotal _bottomSub">
            <div class="_title">
                <span>Sub Total</span>
            </div>
            <div class="_svg">
                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
            </div>
            <span>R$ <span class="_subtotalValue">{{ number_format($carrinho->total, 2, ',', '.') }}</span></span>
        </div>
        {{-- <div class="_subDesconto _bottomSub">
            <span>Desconto</span>
            <div class="_svg">
                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
            </div>
            <span><span class="_subdescontoValue">-</span></span>
        </div> --}}
    </div>

    <div class="_finalTotal _bottomSub">
        <span>Total</span>
        <div class="_svg">
            <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
        </div>
        <strong>R$ <span class="_finaltotalValue">{{ number_format($carrinho->total, 2, ',', '.') }}</span> </strong>
    </div>
</section>
