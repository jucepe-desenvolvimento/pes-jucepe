<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RespostaServ;
use App\Models\Pesquisa;
use App\Models\Respondente;
use App\Http\Requests\ValidacoesPesquisas;

class PesquisaServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesquisaservicos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicos = $request->except([
            '_token',
            'nome',
            'email',
            'telefone',
            'consentimento_lgpd',
            'respondenteAnon',
            'sugestao',
        ]);

        $respondentes = $request->only([
            'nome',
            'email',
            'telefone',
            'consentimento_lgpd',
            'respondenteAnon',
        ]);

        $sugestoes = $request->only('sugestao');

        $pesquisa = Pesquisa::find(2);

        $respondente = Respondente::create($respondentes);

        $servicos['respondente_id'] = $respondente->id_respondente;

        $servicos['pesquisa_id'] = $pesquisa['id_pesquisa'];
        $resposta = RespostaServ::create($servicos);

        $sugestoes['resposta_serv_id'] = $resposta->id_resposta;
        Sugestao::create($sugestoes);

        return redirect()->route('pesquisaservicos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
