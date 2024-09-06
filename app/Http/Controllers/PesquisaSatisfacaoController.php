<?php

namespace App\Http\Controllers;

use App\Models\PesquisaEs;
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
        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O nome deve conter apenas letras.',
            'name.min' => 'O nome deve ter no mínimo 5 caracteres.',
            'name.max' => 'O nome deve ter no máximo 50 caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'phone.string' => 'Digite um número de telefone válido.',
            'lgpdConsent.required' => 'Você deve consentir com a LGPD.',
        ];

        $pesquisa = $request->validate([
            'name' => 'required|string|min:5|max:50',
            'email' => 'required|email',
            'phone' => 'required|string',
            'lgpdConsent' => 'required',
            'anonymous',
            'produto',
            'orientacao',
            'tempoResposta',
            'ambienteFisico',
            'duvidasEsclarecimentos',
            'tempoAnalise',
            'prazoEntrega',
            'integracaoOrgaos',
            'facilidadeUso',
            'avaliacaoGeral',
            'qualidadeAtendimento',
            'textoAdicional',
        ], $messages);

        try {
            PesquisaEs::create($pesquisa);
        } catch (\Exception $e) {
            return redirect()->route('pesquisa.create')->withErrors('Verifique os campos preenchidos e tente novamente' . $e->getMessage());
        }

        return redirect()->route('pesquisa.create')->with('mnsg', 'Obrigado por responder nossa pesquisa!');
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
