<?php

namespace App\Http\Controllers;

use App\Mensalidade;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($status, Request $request)
    {
        $request->session()->flash($status);

        Mensalidade::where('preference_id', $request->input('preference_id'))
            ->update([
                'status_uri' => $request['status'],
                'collection_id' => castNull($request->input('collection_id')),
                'collection_status' => castNull($request->input('collection_status')),
                'external_reference' => castNull($request->input('external_reference')),
                'payment_type' => castNull($request->input('payment_type')),
                'merchant_order_id' => castNull($request->input('merchant_order_id')),
                'processing_mode' => castNull($request->input('processing_mode')),
                'merchant_account_id' => castNull($request->input('merchant_account_id')),
            ]);

        return view('welcome');
    }

    /**
     * Método para notificação do mercado pago.
     *
     */
    public function notificacao(Request $request)
    {
        debug('notificação mercado pago');
        debug($request);
    }
}
