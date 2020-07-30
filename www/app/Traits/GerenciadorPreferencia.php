<?php

namespace App\Traits;

use MercadoPago\Preference;
use MercadoPago\SDK;
use MercadoPago\Item;
use MercadoPago\Payer;

trait GerenciadorPreferencia
{
    /**
     * Gerar uma preferencia no mercado pago
     *
     * @param Preference $preference
     * @param array $cart
     *
     * @return array
     */
    protected function gerarPreferencia($produto, $cliente): Preference
    {
        SDK::setAccessToken(env('MERCADO_PAGO_TOKEN'));

        $preference = new Preference();
        $preference->items = $this->carregarProduto($produto);
        $preference->payer = $this->carregarPagador($cliente);
        $preference->back_urls = [
            'success' => route('pagamento.resposta', ['success']),
            'failure' => route('pagamento.resposta', ['failure']),
            'pending' => route('pagamento.resposta', ['pending']),
        ];
        $preference->auto_return = 'approved';
        $preference->notification_url = route('pagamento.notificacao.ipn');
        $preference->save();

        debug($preference);

        return $preference;
    }

    private function carregarProduto($produto): array
    {
        $item = new Item();
        $item->id = $produto->id;
        $item->title = $produto->nome;
        $item->quantity = 1;
        $item->currency_id = 'BRL';
        $item->unit_price = $produto->valor;
        return [
            $item
        ];
    }

    private function carregarPagador($cliente): Payer
    {
        $payer = new Payer();
        $payer->name = $cliente->nome;
        $payer->email = 'test_user_4960947@testuser.com';//$cliente->email;
        $payer->date_created = $cliente->created_at;
        $payer->address = [
            'street_name' => $cliente->endereco,
            'street_number' => $cliente->numero,
            'zip_code' => $cliente->cep,
        ];
        return $payer;
    }
}
