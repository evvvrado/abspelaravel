<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Gerencianet\GerencianetRequisicaoBoleto;
use Illuminate\Support\Facades\Log;
use App\Models\Carrinho;
use App\Models\Aluno;
use App\Models\Venda;
use App\Models\PagamentoBoleto;
use App\Models\PagamentoCarne;
use App\Models\ParcelaCarne;
use App\Models\Matricula;

class GerencianetController extends Controller
{
    //
    public function boleto($parcelas)
    {
        $gerencianet = new GerencianetRequisicaoBoleto();
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $aluno = Aluno::find(session()->get("aluno")["id"]);
        if ($parcelas == 1) {
            $desconto = 748;
        } else {
            $desconto = 0;
        }
        // $gerencianet->enviarBoletoEmail(1334034, 'gusouza980@gmail.com');
        $turmas = [];

        foreach ($carrinho->produtos as $produto) {
            $gerencianet->addItem([
                'name' => $produto->turma->curso->titulo, // nome do item, produto ou serviço
                'amount' => 1, // quantidade
                'value' => intval($produto->total * 100)
            ]);
        }

        $cpf = str_replace(".", "", $aluno->cpf);
        $cpf = str_replace("-", "", $cpf);

        $telefone = str_replace("(", "", $aluno->telefone);
        $telefone = str_replace(")", "", $telefone);
        $telefone = str_replace("-", "", $telefone);
        $telefone = str_replace(" ", "", $telefone);

        $gerencianet->addCustomer([
            'name' => $aluno->nome, // nome do cliente
            'cpf' => $cpf, // cpf válido do cliente
            'phone_number' => $telefone, // telefone do cliente
        ]);

        if ($parcelas == 1) {
            $gerencianet->addDesconto([
                'type' => 'percentage',
                'value' => $desconto
            ]);
            $gerencianet->addBoleto([
                'expire_at' => date("Y-m-d", strtotime("+15 days")), // data de vencimento do titulo
                'message' => 'Acompanhe o status do seu pagamento no seu painel do cliente.', // mensagem a ser exibida no boleto
            ]);
            $res = $gerencianet->gerarBoleto();
        } else {
            $gerencianet->addParcelas($parcelas);
            $res = $gerencianet->gerarCarne();
        }
        // dd($res);
        if ($res["code"] == 200) {

            $desconto = $desconto / 100;
            $venda = new Venda;
            $venda->aluno_id = $aluno->id;
            $venda->carrinho_id = $carrinho->id;
            $venda->codigo = date("Ymd") . str_pad($carrinho->id, 8, "0", STR_PAD_LEFT);
            $venda->total = $carrinho->total - ($carrinho->total * $desconto / 100);
            $venda->status = 0;
            $venda->gateway = 0;
            $venda->parcelas = $parcelas;
            if ($parcelas > 1) {
                $venda->forma = 2;
            } else {
                $venda->forma = 0;
            }
            $venda->valor_parcela = number_format($venda->total / $parcelas, 2, ".", "");
            $venda->desconto = ($carrinho->total * $desconto / 100);
            $venda->save();

            foreach ($carrinho->produtos as $produto) {
                $produto->turma->inscritos += 1;
                $produto->turma->save();
            }

            if ($parcelas == 1) {
                $boleto = new PagamentoBoleto;
                $boleto->venda_id = $venda->id;
                $boleto->charge_id = $res["data"]["charge_id"];
                $boleto->codigo_barra = $res["data"]["barcode"];
                $boleto->link = $res["data"]["link"];
                if (isset($res["data"]["pdf"]) && isset($res["data"]["pdf"]["charge"])) {
                    $boleto->pdf = $res["data"]["pdf"]["charge"];
                }
                $boleto->expira = $res["data"]["expire_at"];
                $boleto->status = $res["data"]["status"];
                $boleto->total = $res["data"]["total"];
                $boleto->save();
                $gerencianet->enviarBoletoEmail($boleto->charge_id, $aluno->email);
            } else {
                $carne = new PagamentoCarne;
                $carne->venda_id = $venda->id;
                $carne->carnet_id = $res["data"]["carnet_id"];
                $carne->status = $res["data"]["status"];
                $carne->link = $res["data"]["pdf"]["carnet"];
                $carne->save();
                foreach ($res["data"]["charges"] as $charge) {
                    $parcela = new ParcelaCarne;
                    $parcela->pagamento_carne_id = $carne->id;
                    $parcela->charge_id = $charge["charge_id"];
                    $parcela->parcela = $charge["parcel"];
                    $parcela->status = $charge["status"];
                    $parcela->valor = $charge["value"] / 100;
                    $parcela->data_expiracao = $charge["expire_at"];
                    $parcela->link = $charge["url"];
                    $parcela->save();
                }
            }
            $carrinho->aberto = false;
            $carrinho->save();
            session()->forget("carrinho");
            session()->put(["venda_finalizada" => $venda->id]);
            return redirect()->route("site.carrinho-confirmacao");
        } else {
            session()->flash("erro", "Problema na finalização da compra. Tente novamente mais tarde.");
            return redirect()->route("site.carrinho.pagamento.boleto");
        }
    }

    public function alterar_vencimento(PagamentoBoleto $boleto, Request $request)
    {
        // dd($request->all());
        $gerencianet = new GerencianetRequisicaoBoleto();
        $res = $gerencianet->alterarVencimento($boleto->charge_id, $request->data);
        if ($res == 200) {
            $boleto->expira = $request->data;
            $boleto->save();
            toastr()->success("Data alterada com sucesso!");
            return redirect()->back();
        }

        toastr()->error("Erro ao alterar a data de vencimento.");
        return redirect()->back();
    }

    public function alterar_vencimento_parcela_carne(ParcelaCarne $parcela, Request $request)
    {
        $gerencianet = new GerencianetRequisicaoBoleto();
        $res = $gerencianet->alterarVencimentoParcela($parcela->carne->carnet_id, $parcela->parcela, $request->data);
        if ($res == 200) {
            $parcela->data_expiracao = $request->data;
            $parcela->save();
            toastr()->success("Data alterada com sucesso!");
            return redirect()->back();
        }

        toastr()->error("Erro ao alterar a data de vencimento.");
        return redirect()->back();
    }

    public function cancelar_boleto(PagamentoBoleto $boleto)
    {
        $gerencianet = new GerencianetRequisicaoBoleto();
        $res = $gerencianet->cancelarTransacao($boleto->charge_id);
        if ($res == 200) {
            $boleto->status = 'canceled';
            $boleto->save();
            toastr()->success("Boleto cancelado com sucesso!");
            return redirect()->back();
        }
        toastr()->error("Erro ao cancelar o boleto!");
        return redirect()->back();
    }

    public function notificacao()
    {
        Log::channel('notificacoes')->info('NOTIFICAÇÃO: Tentativa de notificação no token ' . $_POST['notification']);
        $gerencianet = new GerencianetRequisicaoBoleto();
        $res = $gerencianet->notificacao($_POST["notification"]);
        if ($res["code"] == 200) {
            $pagamento = PagamentoBoleto::where("charge_id", $res["charge_id"])->first();
            $tipo = 0;
            if (!$pagamento) {
                $pagamento = ParcelaCarne::where("charge_id", $res["charge_id"])->first();
                $tipo = 1;
            }
            $pagamento->status = $res["status"];
            if ($res["status"] == "paid") {
                if($tipo == 0){
                    $pagamento->venda->status = 1;
                    $pagamento->venda->save();
                    $aluno = $pagamento->venda->aluno_id;
                    foreach ($pagamento->venda->carrinho->produtos as $produto) {
                        $matricula = new Matricula;
                        $matricula->aluno_id = $aluno;
                        $matricula->turma_id = $produto->turma_id;
                        $matricula->save();
                    }
                }else{
                    $pagamento->carne->venda->status = 1;
                    $pagamento->carne->venda->save();
                    $aluno = $pagamento->carne->venda->aluno_id;
                    foreach ($pagamento->carne->venda->carrinho->produtos as $produto) {
                        $matricula = new Matricula;
                        $matricula->aluno_id = $aluno;
                        $matricula->turma_id = $produto->turma_id;
                        $matricula->save();
                    }
                }
                
            }
            Log::channel('notificacoes')->info('NOTIFICAÇÃO: Pagamento ' . $res["charge_id"] . " notificado com o status " . config("gerencianet.status")[$res["status"]]);
            $pagamento->save();
        } elseif ($res["code"] == -1) {
            Log::channel('notificacoes')->error('ERRO:' . $res["erro"]);
        } else {
            Log::channel('notificacoes')->error('ERRO:' . $res["erro"] . "\n" . $res["descricao"]);
        }
    }
}
