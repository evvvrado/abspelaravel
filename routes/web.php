<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/testes', [\App\Http\Controllers\CieloController::class, 'capturar']);

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/abspe/quem-somos', [\App\Http\Controllers\SiteController::class, 'quem_somos'])->name("site.quem_somos");
Route::get('/cursos', [\App\Http\Controllers\SiteController::class, 'cursos'])->name("site.cursos");
Route::get('/curso/{slug}', [\App\Http\Controllers\SiteController::class, 'curso'])->name("site.curso");
Route::get('/curso/{slug}/instrutores', [\App\Http\Controllers\SiteController::class, 'instrutores'])->name("site.curso.instrutores");
Route::get('/curso/{slug}/local', [\App\Http\Controllers\SiteController::class, 'local'])->name("site.curso.local");
Route::get('/curso/{slug}/programacao', [\App\Http\Controllers\SiteController::class, 'programacao'])->name("site.curso.programacao");
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato'])->name("site.contato");
Route::post('/contato/salvar', [\App\Http\Controllers\MensagemController::class, 'salvar'])->name("site.contato.salvar");
// Route::get('/cadastro', [\App\Http\Controllers\SiteController::class, 'cadastro'])->name("site.cadastro");
// Route::get('/login', [\App\Http\Controllers\SiteController::class, 'login'])->name("site.login");
Route::get('/associe-se', [\App\Http\Controllers\SiteController::class, 'associese'])->name("site.associe-se");
Route::get('/abspe/diretoria', [\App\Http\Controllers\SiteController::class, 'diretoria'])->name("site.diretoria");
Route::get('/experiencia', [\App\Http\Controllers\SiteController::class, 'experiencia'])->name("site.experiencia");
Route::get('/galerias', [\App\Http\Controllers\SiteController::class, 'galerias'])->name("site.galerias");
Route::get('/galeria/{slug}', [\App\Http\Controllers\SiteController::class, 'galeria'])->name("site.galeria");
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'imprensa'])->name("site.imprensa");
Route::get('/estaduais', [\App\Http\Controllers\SiteController::class, 'estaduais'])->name("site.estaduais");
Route::get('/estaduais/{slug}', [\App\Http\Controllers\SiteController::class, 'estaduais_filtro'])->name("site.estaduais.filtro");
Route::get('/estadual/{slug}', [\App\Http\Controllers\SiteController::class, 'estadual'])->name("site.estadual");
Route::get('/abspe/sommelier', [\App\Http\Controllers\SiteController::class, 'sommelier'])->name("site.sommelier");
Route::get('/noticias/{slug?}', [\App\Http\Controllers\SiteController::class, 'noticias'])->name("site.noticias");
Route::get('/noticia/{categoria}/{noticia}', [\App\Http\Controllers\SiteController::class, 'noticia'])->name("site.noticia");
Route::get('/recuperar-senha', [\App\Http\Controllers\SiteController::class, 'recuperar_senha'])->name("site.recuperar-senha");


Route::get('/newsletter', [\App\Http\Controllers\SiteController::class, 'newsletter'])->name("site.newsletter");


//ROTAS DE CARRINHO
Route::get('/carrinho/adicionar/{turma}', [\App\Http\Controllers\CarrinhoController::class, 'adicionar'])->name("site.carrinho-adicionar");
Route::get('/carrinho/pagamento/cartao', [\App\Http\Controllers\CarrinhoController::class, 'pagamento_cartao'])->name("site.carrinho.pagamento.cartao");
Route::get('/carrinho/pagamento/boleto', [\App\Http\Controllers\CarrinhoController::class, 'pagamento_boleto'])->name("site.carrinho.pagamento.boleto");
Route::get('/carrinho/identificacao', [\App\Http\Controllers\CarrinhoController::class, 'identificacao'])->name("site.carrinho-identificacao");
Route::post('/carrinho/identificar', [\App\Http\Controllers\CarrinhoController::class, 'identificar'])->name("site.carrinho-identificar");
Route::get('/carrinho/confirmacao', [\App\Http\Controllers\CarrinhoController::class, 'confirmacao'])->name("site.carrinho-confirmacao");
Route::get('/carrinho/efetuar', [\App\Http\Controllers\CarrinhoController::class, 'efetuar'])->name("site.carrinho-efetuar");
Route::post('/carrinho/finalizar/boleto', [\App\Http\Controllers\CarrinhoController::class, 'finalizar_boleto'])->name("site.carrinho.finalizar.boleto");
Route::post('/carrinho/finalizar/credito/cielo', [\App\Http\Controllers\CieloController::class, 'finalizar_credito'])->name("site.carrinho.finalizar.credito.cielo");

// ROTAS GERENCIANET
Route::get('/carrinho/finalizar/boleto/gerencianet/{parcelas}', [\App\Http\Controllers\GerencianetController::class, 'boleto'])->name("site.carrinho.finalizar.boleto.gerencianet");

Route::get('/minha-conta', [\App\Http\Controllers\SiteController::class, 'minhaConta'])->name("site.minha-conta");
Route::post('/aluno/cadastrar', [\App\Http\Controllers\AlunosController::class, 'cadastrar'])->name("site.aluno.cadastrar");
Route::post('/aluno/logar', [\App\Http\Controllers\AlunosController::class, 'logar'])->name("site.aluno.logar");
Route::get('/aluno/deslogar', [\App\Http\Controllers\AlunosController::class, 'deslogar'])->name("site.aluno.deslogar");

Route::middleware(['aluno'])->group(function () {
    //ROTAS DE MINHA ÁREA
    Route::get('/minha-area', [\App\Http\Controllers\SiteController::class, 'minhaArea'])->name("site.minha-area");
    Route::get('/minha-area/compras', [\App\Http\Controllers\SiteController::class, 'minhaAreaCompras'])->name("site.minha-area-compras");
    Route::get('/minha-area/dados', [\App\Http\Controllers\SiteController::class, 'minhaAreaDados'])->name("site.minha-area-dados");
    Route::post('/minha-area/dados/salvar', [\App\Http\Controllers\SiteController::class, 'minhaAreaDadosSalvar'])->name("site.minha-area-dados.salvar");
    Route::post('/minha-area/dados/senha/alterar', [\App\Http\Controllers\SiteController::class, 'minhaAreaDadosSenhaAlterar'])->name("site.minha-area-dados.senha.alterar");
    Route::get('/minha-area/matriculas', [\App\Http\Controllers\SiteController::class, 'minhaAreaMatricula'])->name("site.minha-area-matricula");
});

Route::get('/links/{slug}', [\App\Http\Controllers\AppController::class, 'index'])->name("site.app");
Route::post('/api/click', [\App\Http\Controllers\AppController::class, 'click'])->name("site.app.click");

Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::post('/gerencianet/notificacao', [\App\Http\Controllers\GerencianetController::class, 'notificacao'])->name("gerencianet.notificacao")->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);;

Route::middleware(['admin'])->group(function () {
    
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/indisponivel', [\App\Http\Controllers\PainelController::class, 'indisponivel'])->name("painel.indisponivel");
    Route::get('/sistema/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");
    Route::get('/sistema/leads', [\App\Http\Controllers\PainelController::class, 'leads'])->name("painel.leads");

    // ROTAS DE USUÁRIOS
    Route::get('/sistema/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/sistema/usuarios/inativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_inativos'])->name("painel.usuarios.inativos");
    Route::get('/sistema/usuarios/ativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_ativos'])->name("painel.usuarios.ativos");
    Route::get('/sistema/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/sistema/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/sistema/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/sistema/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");
    Route::get('/sistema/usuarios/bloqueio/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'bloqueio'])->name("painel.usuario.bloqueio");

    //ROTAS DE ESTADUAIS
    Route::get('/sistema/estaduais', [\App\Http\Controllers\EstaduaisController::class, 'consultar'])->name("painel.estaduais");
    Route::get('/sistema/estaduais/cadastro', [\App\Http\Controllers\EstaduaisController::class, 'cadastro'])->name("painel.estadual.cadastro");
    Route::post('/sistema/estaduais/cadastrar', [\App\Http\Controllers\EstaduaisController::class, 'cadastrar'])->name("painel.estadual.cadastrar");
    Route::get('/sistema/estaduais/editar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'editar'])->name("painel.estadual.editar");
    Route::post('/sistema/estaduais/salvar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'salvar'])->name("painel.estadual.salvar");
    Route::get('/sistema/estaduais/deletar/{estadual}', [\App\Http\Controllers\EstaduaisController::class, 'deletar'])->name("painel.estadual.deletar");

    // ROTAS DE DIRETORIAS
    Route::get('/sistema/{estadual}/diretorias', [\App\Http\Controllers\DiretoriasController::class, 'consultar'])->name("painel.diretorias");
    Route::post('/sistema/diretorias/cadastrar', [\App\Http\Controllers\DiretoriasController::class, 'cadastrar'])->name("painel.diretoria.cadastrar");
    Route::post('/sistema/diretorias/salvar/{diretoria}', [\App\Http\Controllers\DiretoriasController::class, 'salvar'])->name("painel.diretoria.salvar");
    Route::get('/sistema/diretorias/deletar/{diretoria}', [\App\Http\Controllers\DiretoriasController::class, 'deletar'])->name("painel.diretoria.deletar");

    // ROTAS DE TAGS
    Route::get('/sistema/tags', [\App\Http\Controllers\TagsController::class, 'consultar'])->name("painel.tags");
    Route::post('/sistema/tags/cadastrar', [\App\Http\Controllers\TagsController::class, 'cadastrar'])->name("painel.tag.cadastrar");
    Route::post('/sistema/tags/salvar/{tag}', [\App\Http\Controllers\TagsController::class, 'salvar'])->name("painel.tag.salvar");
    Route::get('/sistema/tags/deletar/{tag}', [\App\Http\Controllers\TagsController::class, 'deletar'])->name("painel.tag.deletar");

    // ROTAS DE HASHTAGS
    Route::get('/sistema/hashtags', [\App\Http\Controllers\HashtagsController::class, 'consultar'])->name("painel.hashtags");
    Route::post('/sistema/hashtags/cadastrar', [\App\Http\Controllers\HashtagsController::class, 'cadastrar'])->name("painel.hashtag.cadastrar");
    Route::post('/sistema/hashtags/salvar/{hashtag}', [\App\Http\Controllers\HashtagsController::class, 'salvar'])->name("painel.hashtag.salvar");
    Route::get('/sistema/hashtags/deletar/{hashtag}', [\App\Http\Controllers\HashtagsController::class, 'deletar'])->name("painel.hashtag.deletar");

    // ROTAS DE CATEGORIAS
    Route::get('/sistema/categorias', [\App\Http\Controllers\CategoriasController::class, 'consultar'])->name("painel.categorias");
    Route::post('/sistema/categorias/cadastrar', [\App\Http\Controllers\CategoriasController::class, 'cadastrar'])->name("painel.categoria.cadastrar");
    Route::post('/sistema/categorias/salvar/{categoria}', [\App\Http\Controllers\CategoriasController::class, 'salvar'])->name("painel.categoria.salvar");
    Route::get('/sistema/categorias/deletar/{categoria}', [\App\Http\Controllers\CategoriasController::class, 'deletar'])->name("painel.categoria.deletar");

    // ROTAS DE NOTÍCIAS
    Route::get('/sistema/noticias', [\App\Http\Controllers\NoticiasController::class, 'consultar'])->name("painel.noticias");
    Route::get('/sistema/noticias/cadastro', [\App\Http\Controllers\NoticiasController::class, 'cadastro'])->name("painel.noticia.cadastro");
    Route::get('/sistema/noticias/leads/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'visitas'])->name("painel.noticia.visitas");
    Route::post('/sistema/noticias/cadastrar', [\App\Http\Controllers\NoticiasController::class, 'cadastrar'])->name("painel.noticia.cadastrar");
    Route::get('/sistema/noticias/editar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'editar'])->name("painel.noticia.editar");
    Route::post('/sistema/noticias/salvar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'salvar'])->name("painel.noticia.salvar");
    Route::get('/sistema/noticias/deletar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'deletar'])->name("painel.noticia.deletar");
    Route::get('/sistema/noticias/publicar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'publicar'])->name("painel.noticia.publicar");
    Route::get('/sistema/noticias/preview/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'preview'])->name("painel.noticia.preview");

    // ROTAS DE MENSAGENS
    Route::get('/sistema/mensagens', [\App\Http\Controllers\MensagemController::class, 'consultar'])->name("painel.mensagens");
    Route::get('/sistema/mensagens/exportar', [\App\Http\Controllers\MensagemController::class, 'exportar'])->name("painel.mensagens.exportar");

    //ROTAS DE CONFIGURAÇÕES
    Route::get('/sistema/configuracoes/contato', [\App\Http\Controllers\ConfiguracoesController::class, 'contato'])->name("painel.configuracoes.contato");
    Route::post('/sistema/configuracoes/contato/salvar', [\App\Http\Controllers\ConfiguracoesController::class, 'contato_salvar'])->name("painel.configuracoes.contato.salvar");
    Route::get('/sistema/configuracoes/seo', [\App\Http\Controllers\ConfiguracoesController::class, 'seo'])->name("painel.configuracoes.seo");
    Route::post('/sistema/configuracoes/seo/salvar/{pagina}', [\App\Http\Controllers\ConfiguracoesController::class, 'seo_salvar'])->name("painel.configuracoes.seo.salvar");
    Route::get('/sistema/configuracoes/meios-pagamento', [\App\Http\Controllers\ConfiguracoesController::class, 'meios_pagamento'])->name("painel.configuracoes.meios-pagamento");
    Route::post('/sistema/configuracoes/meios-pagamento/salvar', [\App\Http\Controllers\ConfiguracoesController::class, 'meios_pagamento_salvar'])->name("painel.configuracoes.meios-pagamento.salvar");
    
    // ROTAS DE CURSOS
    Route::get('/sistema/cursos/api/getCurso/{curso}', [\App\Http\Controllers\CursosController::class, 'getCurso']);
    Route::get('/sistema/cursos', [\App\Http\Controllers\CursosController::class, 'consultar'])->name("painel.cursos");
    Route::get('/sistema/curso/ativo/{curso}', [\App\Http\Controllers\CursosController::class, 'ativo'])->name("painel.curso.ativo");
    Route::post('/sistema/cursos/cadastrar', [\App\Http\Controllers\CursosController::class, 'cadastrar'])->name("painel.curso.cadastrar");
    Route::get('/includes/curso/formulario', function(){
        return view("painel.cursos.formulario");
    });

    // ROTAS DE TURMAS
    Route::get('/sistema/curso/{curso}/turmas', [\App\Http\Controllers\TurmasController::class, 'consultar'])->name("painel.turmas");
    Route::post('/sistema/turmas/cadastrar', [\App\Http\Controllers\TurmasController::class, 'cadastrar'])->name("painel.turma.cadastrar");
    Route::get('/sistema/turmas/api/getTurma/{turma}', [\App\Http\Controllers\TurmasController::class, 'getTurma']);
    Route::get('/sistema/turma/ativo/{turma}', [\App\Http\Controllers\TurmasController::class, 'ativo'])->name("painel.turma.ativo");
    Route::get('/sistema/turma/inscricao/{turma}', [\App\Http\Controllers\TurmasController::class, 'inscricao'])->name("painel.turma.inscricao");
    Route::get('/includes/turma/formulario', function(){
        return view("painel.turmas.formulario");
    });

    //ROTAS DE VENDAS
    Route::get('/sistema/vendas', [\App\Http\Controllers\PagamentosController::class, 'vendas'])->name("painel.vendas");
    
    //ROTAS DE ALUNOS
    Route::get('/sistema/alunos', [\App\Http\Controllers\AlunosController::class, 'consultar'])->name("painel.alunos");

    //ROTAS DE GALERIAS
    Route::get('/sistema/galerias', [\App\Http\Controllers\GaleriaController::class, 'index'])->name("painel.galerias");
    Route::post('/sistema/galerias/cadastrar', [\App\Http\Controllers\GaleriaController::class, 'cadastrar'])->name("painel.galeria.cadastrar");
    Route::post('/sistema/galerias/salvar/{galeria}', [\App\Http\Controllers\GaleriaController::class, 'salvar'])->name("painel.galeria.salvar");
    Route::get('/sistema/galerias/deletar/{galeria}', [\App\Http\Controllers\GaleriaController::class, 'deletar'])->name("painel.galeria.deletar");
    Route::get('/sistema/galeria/{galeria}/fotos', [\App\Http\Controllers\GaleriaController::class, 'fotos'])->name("painel.galeria.fotos");
    Route::post('/sistema/galeria/{galeria}/foto/adicionar', [\App\Http\Controllers\GaleriaController::class, 'adicionar_foto'])->name("painel.galeria.foto.adicionar");
    Route::get('/sistema/galeria/foto/deletar/{foto}', [\App\Http\Controllers\GaleriaController::class, 'deletar_foto'])->name("painel.galeria.foto.deletar");
    // ROTAS DE DESTAQUES
    Route::get('/sistema/destaques', [\App\Http\Controllers\DestaquesController::class, 'index'])->name("painel.destaques");
    Route::post('/sistema/destaques/cadastrar', [\App\Http\Controllers\DestaquesController::class, 'cadastrar'])->name("painel.destaque.cadastrar");
    Route::post('/sistema/destaques/salvar/{destaque}', [\App\Http\Controllers\DestaquesController::class, 'salvar'])->name("painel.destaque.salvar");
    Route::get('/sistema/destaques/deletar/{destaque}', [\App\Http\Controllers\DestaquesController::class, 'deletar'])->name("painel.destaque.deletar");

    // ROTAS DE APPS
    Route::get('/sistema/app', [\App\Http\Controllers\AppController::class, 'consultar'])->name("painel.app");
    Route::get('/sistema/app/cadastro', [\App\Http\Controllers\AppController::class, 'cadastro'])->name("painel.app.cadastro");
    Route::post('/sistema/app/cadastrar', [\App\Http\Controllers\AppController::class, 'cadastrar'])->name("painel.app.cadastrar");
    Route::get('/sistema/app/relatorio/{app}', [\App\Http\Controllers\AppController::class, 'relatorio'])->name("painel.app.relatorio");
    Route::get('/sistema/app/editar/{app}', [\App\Http\Controllers\AppController::class, 'editar'])->name("painel.app.editar");
    Route::post('/sistema/app/salvar/{app}', [\App\Http\Controllers\AppController::class, 'salvar'])->name("painel.app.salvar");
    Route::post('/sistema/app/rede/{app}', [\App\Http\Controllers\AppController::class, 'rede'])->name("painel.app.getree.rede");
    Route::post('/sistema/app/rede/adicionar/{app}', [\App\Http\Controllers\AppController::class, 'adicionar_rede'])->name("painel.app.rede.adicionar");
    Route::post('/sistema/app/rede/salvar/{elemento}', [\App\Http\Controllers\AppController::class, 'salvar_rede'])->name("painel.app.rede.salvar");
    Route::get('/sistema/app/rede/remover/{elemento}', [\App\Http\Controllers\AppController::class, 'remover_rede'])->name("painel.app.rede.remover");

    // ROTAS DE INCLUDES
    Route::get('/includes/loading', function(){
        return view("painel.includes.loading");
    });

    
    
    Route::get('/teste', function(){
        return view("site.teste");
    });
    Route::get('/sistema/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name("painel.logs");
});
