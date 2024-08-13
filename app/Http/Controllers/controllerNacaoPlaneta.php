<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NacaoPlaneta;
use App\Models\Planeta;
use App\Models\Nacao;
use Illuminate\Support\Facades\DB;

class controllerNacaoPlaneta extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $NacaoPlaneta;

    public function __construct(NacaoPlaneta $item){
        $this->NacaoPlaneta = $item;
    }

    public function index()
    {
        $dados = $this->NacaoPlaneta->where('planeta',$id)->get();
        $planeta = Planeta::find($id);
        $dados->
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoNacao');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new NacaoPlaneta();
        $dados->nome = $request->input('nome');
        $dados->especie = $request->input('especie');
        $dados->novel_dominacao = $request->input('nivel_dominacao');
        $dados->nivel_desenv = $request->input('nivel_desenv');
        if($dados->save())
            return redirect('/nacao')->with('success', 'Nação criada com sucesso!');
        return redirect('/nacao')->with('danger', 'Você não teve poder suficiente para criar a Nação!');
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
        $dados = NacaoPlaneta::find($id);
        if(isset($dados)){
            return view('editarNacao',compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = NacaoPlaneta::find($id);
        if(isset($dados)){
            $dados = new Planeta();
            $dados->nome = $request->input('nome');
            $dados->especie = $request->input('especie');
            $dados->novel_dominacao = $request->input('nivel_dominacao');
        $dados->nivel_desenv = $request->input('nivel_desenv');
            $dados->save();
            return redirect('/nacao')->with('success', 'Os dados da nação foram modificados de acordo com vossa vontade. :)');
        }
        return redirect('/nacao')->with('danger', 'Falha ao tentar modificar a nação. :(');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = NacaoPlaneta::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/nacao')->with('success', 'A Nação foi destruida. Você a eliminou... ');
        }
        return redirect('/nacao')->with('danger', 'O seu poder não foi suficiente para destruir a Nação. Erro ao aliminá-la.');
    }

    public function pesquisarNacao(){
        return view('pesquisa');
    }

    public function procurarNacao(Request $request){
        $dados = $request->input('nome');
        $dados = DB::table('nacoes')->select('id', 'nome', 'especie','nivel_dominacao', 'nivel_desenv')->where(DB::raw('lower(nome)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirNacao', compact('dados'));
    }
}
