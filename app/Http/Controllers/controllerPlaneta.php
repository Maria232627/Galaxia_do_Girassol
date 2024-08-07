<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planeta;
use Illuminate\Support\Facades\DB;

class controllerEstrela extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Estrela::all();
        return view('exibePlaneta', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoPlaneta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Estrela();
        $dados->nome = $request->input('nome');
        $dados->diametro = $request->input('diametro');
        $dados->descricao = $request->input('descricao');
        $dados->temperatura = $request->input('temperatura');
        $dados->idade = $request->input('idade');
        $dados->gravidade = $request->input('gravidade');
        $dados->habitabilidade = $request->input('habitabilidade');
        $dados->qtd_satelite_natural = $request->input('qtd_satelite_natural');

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
        $dados = Estrela::find($id);
        if(isset($dados)){
            return view('editarEstrela',compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Estrela::find($id);
        if(isset($dados)){
            $dados = new Estrela();
            $dados->nome = $request->input('nome');
            $dados->diametro = $request->input('diametro');
            $dados->descricao = $request->input('descricao');
            $dados->temperatura = $request->input('temperatura');
            $dados->idade = $request->input('idade');
            $dados->gravidade = $request->input('gravidade');
            $dados->save();
            return redirect('/estrela')->with('success', 'Os dados da estrela foram modificados de acordo com vossa vontade. :)');
        }
        return redirect('/estrela')->with('danger', 'Falha ao tentar modificar a estrela. :(');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Estrela::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/estrela')->with('success', 'A estrela foi destruida. Você a eliminou... ');
        }
        return redirect('/estrela')->with('danger', 'O seu poder não foi suficiente para destruir a estrela. Erro ao aliminá-la.');
    }

    public function pesquisarEstrela(){
        return view('pesquisa');
    }

    public function procurarEstrela(Request $request){
        $dados = $request->input('nome');
        $dados = DB::table('estrelas')->select('id', 'nome', 'diametro', 'descricao', 'temperatura', 'idade', 'gravidade')->where(DB::raw('lower(nome)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirEstrela', compact('dados'));
    }
}
