<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefas;

class TarefasController extends Controller
{

    public function index()
    {
        $tarefas = Tarefas::all();

        return view('tarefas')->with('tarefas',$tarefas);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $validacao = [
            'nome' => 'required|max:255',
            'DataInicio' => 'required|date',
            'DataLimite' => 'required|date|after_or_equal:DataInicio',
            'StatusTarefa' => 'required|in:Pendente,Em Andamento,Concluída',
            'tipo' => 'required|in:Trabalho,Estudo,Lazer',
        ];

        $request->validate($validacao);

        $tarefas = new Tarefas();
        $tarefas->nome = $request->input('nome'); 
        $tarefas->DataInicio = $request->input('DataInicio');
        $tarefas->DataLimite = $request->input('DataLimite');
        $tarefas->StatusTarefa = $request->input('StatusTarefa');
        $tarefas->tipo = $request->input('tipo');

        $tarefas->save();

        return redirect()->back()->with('success', 'Tarefa criada com sucesso!');
        


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
