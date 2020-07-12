<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Contrato;
use App\Produto;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 5;
        $contratos = Contrato::latest()->paginate($limit);

        return view('painel.contratos.index', compact('contratos'))
            ->with('i', (request()->input('page', 1) - 1) * $limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all(['id', 'nome']);
        $produtos = Produto::all(['id', 'nome', 'valor']);
        return view('painel.contratos.create', compact('clientes', 'produtos'));
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
            'cliente_id' => 'required|numeric',
            'produto_id' => 'required|numeric',
            'data_contrato' => 'required|date',
            'data_vencimento_contrato' => 'required|date',
            'dia_vencimento' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        Contrato::create($request->all());

        return redirect()->route('contratos.index')
            ->with('success', 'Contrato criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        return view('painel.contratos.show', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        $clientes = Cliente::all(['id', 'nome']);
        $produtos = Produto::all(['id', 'nome', 'valor']);
        return view(
            'painel.contratos.edit',
            compact('contrato', 'clientes', 'produtos')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        $request->validate([
            'cliente_id' => 'required|numeric',
            'produto_id' => 'required|numeric',
            'data_contrato' => 'required|date',
            'data_vencimento_contrato' => 'required|date',
            'dia_vencimento' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        $contrato->update($request->all());

        return redirect()->route('contratos.index')
            ->with('success', 'Contrato alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();

        return redirect()->route('contratos.index')
            ->with('success', 'Contrato deletado com sucesso');
    }
}
