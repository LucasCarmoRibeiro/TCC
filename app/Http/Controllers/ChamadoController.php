<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\chamado_equipamento;
use App\Models\Equipamento;
use App\Models\Laboratorio;
use App\Models\opcao;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Expr\Print_;
use SebastianBergmann\Diff\Chunk;

class ChamadoController extends Controller
{
  

public function SalvarDadosParaChamado(Request $request ,$id){
//print_r($request->all());
$numeroComputador=$request->NumeroDoComputador;
$id_Computadores=$request->id_Computadores;
$idLaboratorio=$id;
//print_r($Computadores);
//print('laboratorioid:'.$id);

$dadosChamado[]=[$id, $request->Computadores];
//print_r($dadosChamado);

return view('FormularioUsuario.formularioComputador', ['id_Computadores'=>$id_Computadores,'idLaboratorio'=>$idLaboratorio,'numerodoComputador'=>$numeroComputador]);
}

public function outrosChamadosLaboratorio($id){
   return view('FormularioUsuario.FormularioOutroEquipamento',['id'=>$id]);

}

public function receberLaboratorio($id){
   
   $Computadores= Equipamento::select('tipo','id','Numero')
  ->where('id_setores',$id)->where('tipo','Computador')->get();

//print($Computadores);
return view('FormuladorioComputador.FormularioElaborado',['Computadores'=>$Computadores,'id'=>$id]);

}

    
    public function index()
    {
        return view('FormuladorioComputador.FormularioElaborado');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idLaboratorio,$titulo,$status)
    {
      @session_start();

        $id=  session('id_usuario');
        $nome= session('nome_usuario');
        $CPF=session('CPF');

        $numerodoComputador=$request->numerodoComputador;
       $id_Computadores=$request->id_Computadores;
     

      
      
        $dataAbertura=($DateAndTime = date('Y-m-d', time())); 
        //$nome=$request->nome;
        $email=$request->email;
        $descricao=$request->descricao;
        $laboratoriodados=Laboratorio::find($idLaboratorio);
        $nomeLaboratorio=$laboratoriodados->name;
Chamado::create([         
    'titulo'=>$titulo,
    'nome_solicitante'=>$nome,
    'CPF'=>$CPF,
    'email'=>$email,
    'data_abertura'=>$dataAbertura,
    'data_fechamento',
    'descricao_problema'=>$descricao,
    'solucao',
    'status'=>$status,
    'nome_laboratorio'=>$nomeLaboratorio
]);

    $ultimoIDChamado=Chamado::all()->last()->id;

        for ($i=0; $i < count($id_Computadores); $i++) { 
            chamado_equipamento::create([ 
                'Chamado_id'=>$ultimoIDChamado,
                'equipamento_id'=>$id_Computadores[$i]
        
              ]);
        }


        $dadosdochamado=Chamado::find($ultimoIDChamado);
        

     
 
        
        return view('UsuariosTelas.TelaFinalUsuario',['dadosdochamado'=>$dadosdochamado,'dadosComputador'=>$id_Computadores,
        'numerodoComputador'=>$numerodoComputador,'nomeLaboratorio'=>$nomeLaboratorio]);   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
$id=$request->IDchamado;
$dadosChamado=Chamado::find($id);
foreach ($dadosChamado->equipamento as $key) {
    $Numerolaborario= $key->id_setores;
  }
  $laboratoriodados=Laboratorio::find($Numerolaborario);
  return view('FormularioUsuario.formularioIDchamado',['dadosChamado'=>$dadosChamado,'laboratoriodados'=>$laboratoriodados]);
}

    
public  function listarChamados(){
    $totalchamados=DB::select("select * from chamados");
    //$dadosChamado=Chamado::all();
//print($dadosChamado);
$dadosChamado=Chamado::all() ;

  return view('Painel-Adm.ListarChamados' ,['dadosChamado'=>$dadosChamado] );

    }

  



public function verChamado($id)
{

$dadosver=Chamado::find($id);
return view('FormularioADM.VerUnicoChamado',['dadosver'=>$dadosver]);
}




/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $dadoschamadoeditar=Chamado::find($id);
 

$responsavel= session('nome_usuario');

     $dadosUsuario= usuario::find($dadoschamadoeditar->CPF);        

     $opcoes= opcao::all();
    
  return view('FormularioADM.EditarChamado',['dadoschamadoeditar'=>$dadoschamadoeditar,'dadosUsuario'=>$dadosUsuario,'responsavel'=>$responsavel ,'opcoes'=>$opcoes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        print_r( $request->all());
        $id=$request->id;
        Chamado::find($id)->update([
            'titulo'=>$request->titulo,
            'status'=>$request->status,
            'solucao'=>$request->solucao,
            'responsavel'=>$request->responsavel
             ]
                );
             return redirect('/ListarDiretamenteChamados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
