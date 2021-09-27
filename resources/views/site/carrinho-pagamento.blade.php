<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    @if (isset($pagina))
        <title>{{ $pagina->titulo }}</title>
        <meta name='keywords' content='{{ $pagina->palavras }}'>
        <meta name='description' content='{{ $pagina->descricao }}'>
        <meta property='og:title' content='{{ $pagina->titulo }}'>
        <meta property='og:site_name' content='{{ $pagina->titulo }}'>
        <meta name='twitter:title' content='{{ $pagina->titulo }}'>
        <meta property='og:description' content='{{ $pagina->descricao }}'>
        <meta name='twitter:description' content='{{ $pagina->descricao }}'>

    @else
        <title>Associação Brasileira de Sommeliers - Brasil</title>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <meta property='og:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:site_name' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta name='twitter:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:description' content=''>
        <meta name='twitter:description' content=''>
    @endif
    <link rel='canonical' href='https://homolog.abs-brasil.com'>

    <meta property='og:url' content='https://homolog.abs-brasil.com'>
    <meta http-equiv=Pragma content=no-cache>
    <meta http-equiv=Expires content=-1>
    <meta http-equiv=CACHE-CONTROL content=NO-CACHE>
    <meta name='theme-color' content='#8A143A'>
    <meta name='msapplication-navbutton-color' content='#8A143A'>
    <meta name='apple-mobile-web-app-status-bar-style' content='#8A143A'>
    <meta property='og:type' content='website'>
    <meta name='twitter:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image:secure_url' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta name='twitter:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='630'>
    <meta property='og:image:type' content='image/jpeg'>
    <meta name='robots' content='index,follow' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='twitter:card' content='summary'>
    <link rel='icon' type='image/vnd.microsoft.icon'
        sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256'
        href='{{ asset('favicon.ico') }}' />
    <link rel='apple-touch-icon' sizes='180x180' href='{{ asset('site/img/logo180.png') }}'>
    {{-- <link rel='manifest' href='/_ifl1/manifest.php' type='application/x-web-app-manifest+json'> --}}
    <link rel='preload' type='text/css' as='style'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/reset.css') }}' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/sistema.css') }}' />

    <link rel='preload' type='application/javascript' as='script' href='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous' />
    <link rel='preload' type='application/javascript' as='script' href='{{ asset('site/js/script.js') }}'>

    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css'
        crossorigin='anonymous' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Poppins&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='{{ asset('site/css/reset.css') }}'>
    <link rel='stylesheet' href='{{ asset('site/css/sistema.css') }}'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
</head>


<body class="_carrinho">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet" />


    <!-- HEADER -->
    <header class="container-fluid">
        <div class="container-fav">
            <div class="_first">
                <div class="_logos">
                    <img src="{{ asset('site/img/_logo92.png') }}" alt="" />
                    <img src="{{ asset('site/img/_logoASI_92.png') }}" alt="" />
                    <div class="_carButton">
                        <img src="{{ asset('site/img/sistema/car.svg') }}" alt="" />
                    </div>
                </div>

                <div class="_duvidas">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/carrinhoPhone.svg') }}" alt="" />
                    </div>
                    <p>Dúvida na compra ligue - 35 992611988</p>
                </div>
            </div>
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
                        <span>{{$carrinho->produtos->count()}}</span>
                    </div>
                </div>
                <div class="_value">
                    <p>Total</p>
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                    </div>
                    <strong>R$ <span class="_total">{{number_format($carrinho->total, 2, ",", ".")}}</span></strong>
                </div>
                <div class="_innerCar">
					@foreach($carrinho->produtos as $produto)
						<div class="_innerItem">
							<div class="_img">
								<img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
							</div>
							<div class="_content">
								{{--  <h3 class="isOnline">Curso Online</h3>  --}}
								<h2 class="itemName">{{$produto->turma->curso->titulo}}</h2>
								{{--  <p class="itemExtra">Certificado de 10hs</p>  --}}
								<div class="itemValue">
									<strong>R$ <span class="_itemValue">{{number_format($produto->total, 2, ",", ".")}}</span></strong>
									<div class="_controls">
										<div class="itemControl cancel">
											<div class="_img">
												<img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
											</div>
										</div>
										{{--  <div class="itemControl more">
											<div class="_img">
												<img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
											</div>
										</div>  --}}
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
                        <span>R$ <span class="_subtotalValue">{{number_format($carrinho->total, 2, ",", ".")}}</span></span>
                    </div>
                    {{--  <div class="_subDesconto _bottomSub">
                        <span>Desconto</span>
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                        </div>
                        <span><span class="_subdescontoValue">-</span></span>
                    </div>  --}}
                </div>

                <div class="_finalTotal _bottomSub">
                    <span>Total</span>
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                    </div>
                    <strong>R$ <span class="_finaltotalValue">{{number_format($carrinho->total, 2, ",", ".")}}</span> </strong>
                </div>
            </section>
        </div>
    </header>
    <!-- HEADER -->

    <section class="container-fluid s_identificacao">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">
                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/personIdentificacao.svg') }}" alt="" />
                        </div>
                        <h2>Identificação</h2>
                    </div>
                    <div class="arrow _title _active">
                        <img src="{{ asset('site/img/sistema/loadingArrow.svg') }}" alt="" />
                    </div>

                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/card.svg') }}" alt="" />
                        </div>
                        <h2>Pagamento</h2>
                    </div>
                </div>
                <div class="_pagamento">
                    <div class="_topInfo">
                        <div class="row">
                            <div class="_name">
                                <div class="_img">
                                    <img src="{{ asset('site/img/sistema/user.svg') }}" alt="" />
                                </div>
                                <p>{{ $aluno->nome }}</p>
                            </div>
                            <p>{{ $aluno->email }}</p>
                        </div>
                    </div>

                    <div class="_pagamentoCartao">
                        @if($forma == 'cartão')
                            <div class="_text">
                                <span>Pagamento Cartão de Crédito</span>
                                <p>Digite os dados do seu cartão abaixo:</p>
                            </div>
                            <div class="_form">
                                <div>
                                    <small style="color: red;">{{session()->get("erro")}}</small>
                                </div>
                                
                                <form action="{{route('site.carrinho.finalizar.credito.cielo')}}" method="POST">
                                    @csrf
                                    <label>
                                        <span>N. Cartão</span>
                                        <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}"
                                            autocomplete="cc-number" name="numero" maxlength="19" />
                                    </label>
                                    <label>
                                        <span>Nome do cartão</span>
                                        <input type="text" name="nome"/>
                                    </label>
                                    <label>
                                        <span>Validade</span>
                                        <input type="tel" inputmode="numeric" name="expiracao" maxlength="7" />
                                    </label>
                                    <label>
                                        <span>CVV</span>
                                        <input type="tel" maxlength="3" name="cvv"/>
                                    </label>
                                    <label>
                                        <span>Parcelas</span>
                                        <input type="number" name="parcelas" max="10" min="1" step="1" required/>
                                    </label>
                                    <button type="submit">
                                        Efetuar pagamento <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="_text">
                                <span>Pagamento por boleto ou carnê</span>
                                <p>Escolha o número de parcelas desejadas:</p>
                            </div>
                            <div class="_form">
                                <div>
                                    <small style="color: red;">{{session()->get("erro")}}</small>
                                </div>
                                
                                <form action="{{route('site.carrinho.finalizar.boleto')}}" method="POST">
                                    @csrf
                                    <label>
                                        <span>Parcelas</span>
                                        <select name="parcelas" required>
                                            <option value="1">1x de {{$carrinho->total - ($carrinho->total * 10 / 100)}}</option>
                                            @for($i = 2; ((($carrinho->total / $i) > $configuracao->min_valor_parcela_boleto) && $i <= $configuracao->max_parcelas_boleto); $i++)
                                                <option value="{{$i}}">{{$i}}x de {{number_format($carrinho->total / $i, 2, ",", ".")}}</option>
                                            @endfor
                                        </select>
                                    </label>
                                    <button type="submit">
                                        Efetuar pagamento <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="container-fluid">
        <section class="container-fav s_faleConosco">
            <div class="_text">
                <h3>FALE CONOSCO</h3>
                <h2>Entre em contato com a nossa equipe</h2>
                <p>Estamos prontos para te ajudar</p>
            </div>
            <div class="_buttons">
                <div>
                    <img src="{{ asset('site/img/sistema/chat.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/call.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/whatsappButton.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/envelopButton.svg') }}" alt="" />
                </div>
            </div>
        </section>
        <section class="container-fav s_info">
            <div class="_left">
                <p>RRua Desembargador Gois Cavalcante, 316, Sala 101, Parnamirim, Recife - PE, 52.06-140</p>

                <div class="_siga">
                    <p>Siga-nos</p>
                    <div class="_social">
                        <a href="/"><img src="{{ asset('site/img/sistema/instagramLogo.svg') }}" alt="" /></a>
                        <a href="/"><img src="{{ asset('site/img/sistema/facebookLogo.svg') }}" alt="" /></a>
                    </div>
                </div>

                <div class="_compraSegura">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/lock.svg') }}" alt="" />
                    </div>
                    <p>Compra 100% segura</p>
                </div>
            </div>
            <div class="_right">
                <p>Formas de Pagamento</p>
                <div class="_formasPagamento">
                    <img src="{{ asset('site/img/sistema/pagamentoLogos1.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos2.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos3.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos4.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos5.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos6.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos7.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos8.jpg') }}" alt="" />
                </div>
            </div>
        </section>
    </footer>


    <section class="container-fluid _copyRight">
        <div class="container-fav">
            <p>Copyright © ABS Brasil - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens,
                logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade
                exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a
                expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e
                criminal nos termos da Lei. CNPJ: 17.190.409/0001-10
            </p>

            <p>
                <strong>
                    Desenvolvido por
                    <a href="https://7seventrends.com"" class=" _img">
                        <img src="{{ asset('site/img/_logo7seven.png') }}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


      <script src="{{ asset('site/js/masks.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    @include('site.includes.gerencianet')
    <script>
        $("form label input,form label textarea").focus(function() {
            $(this).parent().find("span").addClass("active");
        });

        $("form label input,form label textarea").focusout(function() {
            if ($(this).val() == "") {
                $(this).parent().find("span").removeClass("active");
            }
        });


        $("._carButton").click(() => {
            $("._meuCarrinho").animate({
                    top: "0",
                },
                400
            );
        });
        $(" section._meuCarrinho ._top ._title ._icon img:last-child").click(() => {
            $("._meuCarrinho").animate({
                    top: "-200vh",
                },
                400
            );
        });
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  </body>
</html>
