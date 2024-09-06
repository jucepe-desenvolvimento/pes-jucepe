<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesquisaServicos;
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
            'satisfacao.required' => 'Dê uma nota para a satisfação com o serviço.',
            'facilidade.required' => 'Dê uma nota para a facilidade com o serviço.',
            'expectativa.required' => 'Dê uma nota para a expectativa com o serviço.',
            'probabilidade.required' => 'Dê uma nota para a probabilidade de recomendar o serviço.',
            'qualidadeAtendimento.required' => 'Dê uma nota para a qualidade do atendimento.',
            'qualidade.required' => 'Dê uma nota para a qualidade do serviço.',
            'sugestoes.min' => 'O texto deve conter mais de 10 caracteres',
            'sugestoes.max' => 'O texto deve ter até 500 caraceteres',
        ];

        $pesquisaServicos = $request->validate([
            'name' => 'required|string|min:5|max:50',
            'email' => 'required|email',
            'phone' => 'required|string',
            'lgpdConsent' => 'required',
            'satisfacao' => 'required',
            'facilidade' => 'required',
            'expectativa' => 'required',
            'probabilidade' => 'required',
            'qualidadeAtendimento' => 'required',
            'qualidade' => 'required',
            'sugestoes' => 'min:10|max:500',
        ], $messages);

        try {
            PesquisaServicos::create($pesquisaServicos);
        } catch (\Exception $e) {
            return redirect()->route('pesquisaservicos.create')->withErrors('Verifique os campos preenchidos e tente novamente' . $e->getMessage());            
        }

        return redirect()->route('pesquisaservicos.create')->with('mnsg', 'Obrigado por responder nossa pesquisa!');
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
