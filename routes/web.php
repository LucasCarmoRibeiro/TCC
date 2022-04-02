<?php

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\opcaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeController::class,'__invoke')->name('index');

Route::get('Voltar',HomeController::class,'Voltar');

//login do usuarios
Route::post('/Logar',[usuarioController::class,'login']);
//sair do usuario
Route::get('/Logout',[usuarioController::class,'logout']);

Route::get('/PainelUsuario',[usuarioController::class,'PainelUsuario']);

//rota Para Escolha dos Laboratorios

Route::get('EscolhaLaboratorios',[LaboratorioController::class,'TodosLaboratorios']);
Route::get('EscolhaLaboratorios2', function () {
    return view('EscolherLaboratorio.EscolhaLabs');
});


//rota Escolha Computadores Para Chamado

Route::post('SalvarComputadoresNoChamado1.usuario/{id}',[ChamadoController::class,'SalvarDadosParaChamado']);


//Juntar Dados De Chamado Para Mandar Para O Banco
Route::post('SalvarComputadoresNoChamado2.usuario/{idLaboratorio}/{titulo}/{status}',[ChamadoController::class,'store']);


//rota Para Escolha dos Computadores

Route::get('ListarComputadores.Usuario',[EquipamentoController::class,'index']);

Route::get('EscolhaComputadores', function () {
    return view('Formularios dos computares.FormularioElaborado');
});

Route::post('EscolhaComputadores',[EquipamentosController::class,'ComputadoresSelecionados']);


//Rotas de Chamados

Route::get('ReceberLaboratorioNumero/{id}',[ChamadoController::class,'receberLaboratorio'])->name('receberLaboratorio');


//Rotas Administradores

//AdicionarComputadores
Route::get('AdicionarComputadores', function () {
    return view('FormularioADM.AdicionarComputadores');
});
//recebe Numero Total De computadores
Route::get('Receber',[EquipamentoController::class,'totalComputador']);
//salvar Computadores
Route::get('SalvarComputadores/{Tipo}',[EquipamentoController::class,'store']);
//editar Computadores
//Listar Computadores
Route::get('ListarComputadores',[EquipamentoController::class,'show']);

Route::get('EditarComputadores/{id}',[EquipamentoController::class,'edit']);

//salvar edição Computadores
Route::get('UpdateComputador/{id}',[EquipamentoController::class,'update']);
Route::get('ExcluirComputador/{id}',[EquipamentoController::class,'destroy']);


//AcãoAdministrador
Route::get('AcãoAdministrador', function () {
    return view('Painel-Adm.EscolhaADM');
});

//AdicionarLaboratorios
Route::get('AdicionarLaboratorios', function () {
    return view('FormularioADM.AdicionarLaboratorios');
});
Route::post('AdicionarLaboratorios',[LaboratorioController::class,'store']);
Route::get('VerLabsAdicionados',[LaboratorioController::class,'show']);
//editar Laboratorio
Route::get('EditarLaboratorio/{id}',[LaboratorioController::class,'edit']);
Route::get('UpdateLaboratorio/{id}',[LaboratorioController::class,'update']);
Route::get('ExcluirLaboratorio/{id}',[LaboratorioController::class,'destroy']);


//rotasAdicionar Usuarios
Route::get('AdicionarUsuario', function () {
    return view('FormularioADM.AdicionarUsuarios');
});


Route::post('AdicionarUsuario',[usuarioController::class,'store']);

//usuariosEscolhandoOutros

Route::get('FormularioEquipamento', function () {
    return view('UsuariosTelas.FormularioOutroEquipamento');
});




//UsuarioBuscarChamado
Route::get('AcessarBuscarChamadoID', function () {
    return view('FormularioUsuario.formularioIDchamado');
});

Route::post('BuscarChamadoID',[ChamadoController::class,'show'] );


//Recuperação de Senha
Route::get('AcessarRecuperarSenha', function () {
    return view('FormularioUsuario.FormularioEsqueceuSenha');
});


//Outros
Route::get('DadosOutros/{id}',[ChamadoController::class,'outrosChamadosLaboratorio'] );

Route::get('FormularioOutros', function () {
return view('FormularioUsuario.FormularioOutroEquipamento',['id']);
} );


//ListarChamados.adm
Route::get('AcessarListarChamados', function () {
    return view('Painel-Adm.ListarChamados');
    } );


Route::get('AcessarEditar',function()
{
    return view('FormularioADM.EditarChamado');
}
);

    Route::get('ListarDiretamenteChamados',[ChamadoController::class,'listarChamados']);
    Route::get('EditarChamado/{id}',[ChamadoController::class,'edit']);
    Route::get('verChamado/{id}',[ChamadoController::class,'verChamado']);

    Route::get('updateChamado',[ChamadoController::class,'update']);

    //rotas para as opcoes do titulo


    Route::get('AdicionarOpcoes',[opcaoController::class,'store']);
    Route::get('ShowOpcoes',[opcaoController::class,'show']);

    Route::get('/ExcluirOpcao/{id}',[opcaoController::class,'destroy']);

    Route::get('AcessarAdicionarOpcoes',function() {
        return view('FormularioADM.adicionarOpcoes');
    });