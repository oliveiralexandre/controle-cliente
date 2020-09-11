<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Mail\Contato as MailContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        Contato::create($request->all());

        Mail::to('edujudici@gmail.com')->send(new MailContato([
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'assunto' => $request->get('assunto'),
            'mensagem' => $request->get('mensagem')
        ]));

        return back()->with('success', 'Obrigado pelo contato!');
    }
}
