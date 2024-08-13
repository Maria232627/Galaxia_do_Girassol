<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SistemaPlanetario;
use Illuminate\Support\Facades\DB;

class controllerSistemaPlanetario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = SistemaPlanetario::all();
        return view('exibeSistema', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoSistema');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new SistemaPlanetario();
        $dados->nome = $request->input('nome');
        if($dados->save())
            return redirect('/sistema')->with('success', 'Sistema Planetário criado com sucesso!');
        return redirect('/sistema')->with('danger', 'Você não teve poder suficiente para criar o Sistema Planetário!');
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
        $dados = SistemaPlanetario::find($id);
        if(isset($dados)){
            return view('editaSistema',compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = SistemaPlanetario::find($id);
        if(isset($dados)){
            $dados = new SistemaPlanetario();
            $dados->nome = $request->input('nome');
            $dados->save();
            return redirect('/sistema')->with('success', 'Os dados do Sisema Planetário foram modificados de acordo com vossa vontade. :)');
        }
        return redirect('/sistema')->with('danger', 'Falha ao tentar modificar o Sistema PLanetário. :(');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = SistemaPlanetario::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/sistema')->with('success', 'O Sisema Planetário foi destruido. Você o apagou... ');
        }
        return redirect('/sistema')->with('danger', 'O seu poder não foi suficiente para destruir o Sistema Planetário. Erro ao aliminá-lo.');
    }

    public function pesquisarSistema(){
        return view('pesquisa');
    }

    public function procurarSistema(Request $request){
        $dados = $request->input('nome');
        $dados = DB::table('sistemas')->select('id', 'nome')->where(DB::raw('lower(nome)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirSistema', compact('dados'));
    }
}
