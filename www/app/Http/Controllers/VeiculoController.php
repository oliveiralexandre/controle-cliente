<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
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
        $veiculos = Veiculo::latest()->paginate($limit);

        return view('painel.veiculos.index', compact('veiculos'))
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
        return view('painel.veiculos.create', compact('clientes'));
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
            'cliente_id' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required',
        ]);

        Veiculo::create($request->all());

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        return view('painel.veiculos.show', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculo $veiculo)
    {
        $clientes = Cliente::all(['id', 'nome']);
        return view('painel.veiculos.edit', compact('veiculo', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veiculo $veiculo)
    {
        $request->validate([
            'cliente_id' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required',
        ]);

        $veiculo->update($request->all());

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo deletado com sucesso');
    }
}
