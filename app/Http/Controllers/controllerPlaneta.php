<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planeta;
use App\Models\SistemaPlanetario;
use Illuminate\Support\Facades\DB;

class controllerPlaneta extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Planeta::all();
        return view('exibePlaneta', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sistema_planetario = SistemaPlanetario::all();
        return view('novoPlaneta', compact('sistema_planetario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Planeta();
        $dados->nome = $request->input('nome');
        $dados->diametro = $request->input('diametro');
        $dados->descricao = $request->input('descricao');
        $dados->temperatura = $request->input('temperatura');
        $dados->idade = $request->input('idade');
        $dados->gravidade = $request->input('gravidade');
        $dados->habitabilidade = $request->input('habitabilidade');
        $dados->qtd_satelite_natural = $request->input('qtd_satelite_natural');
        //$sistema=SistemaPlanetario::find($dados->sistema_planetario);
        //$sistema->qtd_planeta = $sistema->qtd_planeta + 1;
        //$sistema->save();
        if($dados->save())
            return redirect('/planeta')->with('success', 'Planeta criada com sucesso!');
        return redirect('/planeta')->with('danger', 'Você não teve poder suficiente para criar o planeta!');
    }


    /**
     * Display the specified resource
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
        $dados = Planeta::find($id);
        $sistema_planetario = SistemaPlanetario::all();
        return view('editaPlaneta',compact('dados', 'sistema_planetario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Planeta::find($id);
        if(isset($dados)){
            $dados->nome = $request->input('nome');
            $dados->diametro = $request->input('diametro');
            $dados->descricao = $request->input('descricao');
            $dados->temperatura = $request->input('temperatura');
            $dados->idade = $request->input('idade');
            $dados->gravidade = $request->input('gravidade');
            $dados->habitabilidade = $request->input('habitabilidade');
            $dados->qtd_satelite_natural = $request->input('qtd_satelite_natural');
            $dados->save();
            return redirect('/planeta')->with('success', 'Os dados da planeta foram modificados de acordo com vossa vontade. :)');
        }
        return redirect('/planeta')->with('danger', 'Falha ao tentar modificar a planeta. :(');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Planeta::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/planeta')->with('success', 'A planeta foi destruida. Você a eliminou... ');
        }
        return redirect('/planeta')->with('danger', 'O seu poder não foi suficiente para destruir a planeta. Erro ao aliminá-la.');
    }

    public function pesquisarPlaneta(){
        $dados["tabela"] = "planetas";
        return view('pesquisa', compact('dados'));
    }

    public function procurarPlaneta(Request $request){
        $dados = $request->input('nome');
        $dados = DB::table('planetas')->select('id', 'nome', 'diametro', 'descricao', 'temperatura', 'idade', 'gravidade', 'habitabilidade', 'qtd_satelite_natural')->where(DB::raw('lower(nome)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirPlaneta', compact('dados'));
    }
}
