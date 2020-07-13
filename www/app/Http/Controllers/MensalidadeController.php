<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Mensalidade;
use Illuminate\Http\Request;

class MensalidadeController extends Controller
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
        $mensalidades = Mensalidade::latest()->paginate($limit);

        return view('painel.mensalidades.index', compact('mensalidades'))
            ->with('i', (request()->input('page', 1) - 1) * $limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos = Contrato::with('cliente', 'produto')->get([
            'id',
            'cliente_id',
            'produto_id',
        ]);
        return view('painel.mensalidades.create', compact('contratos'));
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
            'contrato_id' => 'required|numeric',
        ]);

        Mensalidade::create($request->all());

        return redirect()->route('mensalidades.index')
            ->with('success', 'Mensalidade criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensalidade  $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function show(Mensalidade $mensalidade)
    {
        return view('painel.mensalidades.show', compact('mensalidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensalidade  $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensalidade $mensalidade)
    {
        $contratos = Contrato::with('cliente', 'produto')->get([
            'id',
            'cliente_id',
            'produto_id',
        ]);
        return view(
            'painel.mensalidades.edit',
            compact('mensalidade', 'contratos')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensalidade  $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensalidade $mensalidade)
    {
        $request->validate([
            'contrato_id' => 'required|numeric',
        ]);

        $mensalidade->update($request->all());

        return redirect()->route('mensalidades.index')
            ->with('success', 'Mensalidade alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensalidade  $mensalidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensalidade $mensalidade)
    {
        $mensalidade->delete();

        return redirect()->route('mensalidades.index')
            ->with('success', 'Mensalidade deletada com sucesso');
    }
}
