@extends('painel.template.main')

@section("styles")

<link rel="stylesheet" href="{{asset('admin/libs/owl.carousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/libs/owl.carousel/assets/owl.theme.default.min.css')}}">

@endsection

@section('conteudo')
<div class="row">
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Notícias Publicadas</p>
                        <h4 class="mb-0">
                            {{\App\Models\Noticia::where("publicada", true)->count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="mdi mdi-newspaper-variant-multiple font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Visitas em Notícias</p>
                        <h4 class="mb-0">
                            {{\App\Models\Visitas::count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-user font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Mensagens Recebidas</p>
                        <h4 class="mb-0">
                            {{\App\Models\Mensagem::count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        @php
                            $noticia = \App\Models\Noticia::orderBy("visualizacoes", "DESC")->first();
                        @endphp
                        <p class="text-muted fw-medium">Noticia mais Visitada</p>
                        @if($noticia)
                            <h5 class="mb-0">
                                <a href="{{route('painel.noticia.editar', ['noticia' => $noticia])}}">#{{$noticia->id}}</a> - {{$noticia->visualizacoes}} Visitas
                            </h5>
                        @endif
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Boletos</p>
                        <h6 class="mb-0">
                            {{$boletos}} gerados e {{$boletos_pagos}} pagos
                        </h6>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Cartões</p>
                        <h6 class="mb-0">
                            {{$cartoes}} gerados e {{$cartoes_pagos}} pagos
                        </h6>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Carnês</p>
                        <h6 class="mb-0">
                            {{$carnes}} gerados e {{$parcelas_pagas}} parcelas pagas
                        </h6>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <hr>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mt-4">Histórico de Pagamentos</h5>
                <div class="hori-timeline mt-4">
                    <div class="owl-carousel owl-theme navs-carousel events" id="timeline-carousel">
                        @foreach($pagamentos->take(20) as $pagamento)
                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">{{date("d/m/Y - H:i:s", strtotime($pagamento->data))}}</div>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">
                                            {{$pagamento->aluno}}<br>
                                            {{config("pagamento.formas")[$pagamento->tipo]}}<br>
                                            R${{number_format($pagamento->valor, 2, ",", ".")}} @if($pagamento->tipo == 2) - Parcela {{$pagamento->parcela}}/{{$pagamento->total_parcelas}} @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection

@section('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- <link rel="stylesheet" href="{{asset('admin/js/pages/timeline.init.js')}}"> --}}

<script>
    $(document).ready(function(){
        $("#timeline-carousel").owlCarousel({ items: 1, loop: !1, margin: 0, nav: !0, navText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"], dots: !1, responsive: { 576: { items: 2 }, 768: { items: 3 } } });            
    });
</script>


@endsection
