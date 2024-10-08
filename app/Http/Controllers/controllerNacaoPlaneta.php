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
        $this->NacaoPlanetas = $item;
    }

    public function index(string $id)
    {
        $dados = $this->NacaoPlanetas->where('planeta',$id)->get();
        $planeta = Planeta::find($id);
        $dados->nomePlaneta = $planeta->nome;
        foreach($dados as $item){
            $nacao = Nacao::find($item->nacao);
            $item->nomeNacao = $nacao->nome;
        }
        return view('exibeDetalhePlaneta', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new NacaoPlaneta();
        $dados->nacao = $request->input('nacao');
        $dados->planeta = $request->input('planeta');
        $dados->qtd_ocupacao = $request->input('qtd_ocupacao');
        $dados->tipo_colonizacao = $request->input('tipo_colonizacao');
        $id = $dados->planeta;
        if($dados->save())
            return redirect("/nacaoPlaneta/detalhes/$id")->with('success', 'Nação criada com sucesso!');
        return redirect('/planeta')->with('danger', 'Você não teve poder suficiente para criar a Nação!');
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
       /* $dados = NacaoPlaneta::find($id);
        if(isset($dados)){
            return view('editarNacao',compact('dados'));
        }*/
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = NacaoPlaneta::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect("/planeta")->with('success', 'A Nação foi destruida. Você a eliminou... ');
        }
        return redirect("/planeta")->with('danger', 'O seu poder não foi suficiente para destruir a Nação. Erro ao aliminá-la.');
    }
    
}
