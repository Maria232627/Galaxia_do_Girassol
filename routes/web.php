<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

//rotas Sistema Plantário
Route::get('/sistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'index'])->name('exibeSistema');
Route::get('/sistema/novo', [App\Http\Controllers\controllerSistemaPlanetario::class, 'create'])->name('novoSistema');
Route::get('/sistema/editar/{id}', [App\Http\Controllers\controllerSistemaPlanetario::class, 'edit'])->name('editarSistema');
Route::get('/sistema/apagar/{id}', [App\Http\Controllers\controllerSistemaPlanetario::class, 'destroy'])->name('deletaSistema');
Route::get('/pesquisaSistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'pesquisaSistema'])->name('pesquisaSistema');
Route::get('/procuraSistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'procuraSistema'])->name('procuraSistema');

//rotas Estrela
Route::get('/estrela', [App\Http\Controllers\controllerEstrela::class, 'index'])->name('exibeEstrela');
Route::get('/estrela/novo', [App\Http\Controllers\controllerEstrela::class, 'create'])->name('novoEstrela');
Route::get('/estrela/editar/{id}', [App\Http\Controllers\controllerEstrela::class, 'edit'])->name('editarEstrela');
Route::get('/estrela/apagar/{id}', [App\Http\Controllers\controllerEstrela::class, 'destroy'])->name('deletaEstrela');
Route::get('/pesquisaEstrela', [App\Http\Controllers\controllerEstrela::class, 'pesquisaEstrela'])->name('pesquisaEstrela');
Route::get('/procuraEstrela', [App\Http\Controllers\controllerEstrela::class, 'procuraEstrela'])->name('procuraEstrela');

//rotas Planeta
Route::get('/planeta', [App\Http\Controllers\controllerPlaneta::class, 'index'])->name('exibePlaneta');
Route::get('/planeta/novo', [App\Http\Controllers\controllerPlaneta::class, 'create'])->name('novoPlaneta');
Route::get('/planeta/editar/{id}', [App\Http\Controllers\controllerPlaneta::class, 'edit'])->name('editarPlaneta');
Route::get('/planeta/apagar/{id}', [App\Http\Controllers\controllerPlaneta::class, 'destroy'])->name('deletaPlaneta');
Route::get('/pesquisaPlaneta', [App\Http\Controllers\controllerPlaneta::class, 'pesquisaPlaneta'])->name('pesquisaPlaneta');
Route::get('/procuraPlaneta', [App\Http\Controllers\controllerPlaneta::class, 'procuraPlaneta'])->name('procuraPlaneta');

//rotas Nação
Route::get('/nacao', [App\Http\Controllers\controllerNacao::class, 'index'])->name('exibeNacao');
Route::get('/nacao/novo', [App\Http\Controllers\controllerNacao::class, 'create'])->name('novoNacao');
Route::get('/nacao/editar/{id}', [App\Http\Controllers\controllerNacao::class, 'edit'])->name('editarNacao');
Route::get('/nacao/apagar/{id}', [App\Http\Controllers\controllerNacao::class, 'destroy'])->name('deletaNacao');
Route::get('/pesquisaNacao', [App\Http\Controllers\controllerNacao::class, 'pesquisaNacao'])->name('pesquisaNacao');
Route::get('/procuraNacao', [App\Http\Controllers\controllerNacao::class, 'procuraNacao'])->name('procuraNacao');

//rotas Nação Planeta
Route::get('/sistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'index'])->name('exibeSistema');
Route::get('/sistema/novo', [App\Http\Controllers\controllerSistemaPlanetario::class, 'create'])->name('novoSistema');
Route::get('/sistema/editar/{id}', [App\Http\Controllers\controllerSistemaPlanetario::class, 'edit'])->name('editarSistema');
Route::get('/sistema/apagar/{id}', [App\Http\Controllers\controllerSistemaPlanetario::class, 'destroy'])->name('deletaSistema');
Route::get('/pesquisaSistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'pesquisaSistema'])->name('pesquisaSistema');
Route::get('/procuraSistema', [App\Http\Controllers\controllerSistemaPlanetario::class, 'procuraSistema'])->name('procuraSistema');
