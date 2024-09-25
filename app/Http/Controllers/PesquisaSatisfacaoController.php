<?php

namespace App\Http\Controllers;

use App\Models\RespostaEsp;
use App\Models\Respondente;
use App\Models\Sugestao;
use App\Models\Pesquisa;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;

class PesquisaSatisfacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $espontanea = $request->except([
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

        $pesquisa = Pesquisa::find(1);

        $respondente = Respondente::create($respondentes);

        $espontanea['respondente_id'] = $respondente->id_respondente;

        $espontanea['pesquisa_id'] = $pesquisa['id_pesquisa'];
        $resposta = RespostaEsp::create($espontanea);

        $sugestoes['resposta_id'] = $resposta->id_resposta;
        Sugestao::create($sugestoes);

        return redirect('/agradecimento'); 
        
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
