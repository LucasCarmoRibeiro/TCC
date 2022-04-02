<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{

 

    public function ComputadoresSelecionados(Request $request){
        $contador= count((array)$request['Computadores']);
        if($contador>0){

        foreach ($request['Computadores'] as $resultado) {
            print($resultado. '</br>');
            $dados[]=$resultado;
        }

            for ($i=0; $i<count($dados) ; $i++) {
               print('o numero :'.$dados[$i].'percente ao espaço'.$i+1 . '</br>');
            }

        }
        else{
            return 'Você não selecionou nenhum computador';
        }
        }


        public function totalComputador(Request $request){

        print_r($request->all());
        $laboratorios=Laboratorio::all();
        return view('FormularioADM.DistribuirComputadores',['totalPC'=>$request['TotalComputadores'],'Laboratorio'=>$laboratorios]);
        }





            public function index()
            {
                //
            }

            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
              
            }



public function storeOutro(){

}
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Request $request)
            {
                foreach ($request['Computador'] as $resultado) {

                    $dadosComputador[]=$resultado;
                }

                foreach ($request['Laboratorio'] as $resultado) {

                    $dadosLaboratorio[]=$resultado;
                }

                    for ($i=0; $i<count($dadosComputador) ; $i++) {


                  //  print('Computador'.$dadosComputador[$i]. 'Pertence a: '.$dadosLaboratorio[$i]. '<br>');

                       Equipamento::create([

                     'tipo'=>$request->Tipo,
                     'Numero'=>$dadosComputador[$i],
                     'id_setores'=>$dadosLaboratorio[$i]

                   ]);

                    }

                    return view('Painel-Adm.TelaFinalDistribuirPc');
            }

            /**
             * Display the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show()
            {
                $Equipamento=Equipamento::with('Laboratorios')->get() ;
                return view('FormularioADM.ShowComputadores',['Equipamento'=>$Equipamento]);
            }
            /**
             * Show the form for editing the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {   
                $Equipamento=Equipamento::with('Laboratorios')->find($id) ;
                $laboratorios=Laboratorio::all();
                return view('FormularioADM.EditarComputadores',['Equipamento'=>$Equipamento,'laboratorios'=>$laboratorios]);
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, $id)
            {
              
               
              Equipamento::find($id)->update([
              'Numero'=>$request->Numero,
              'id_setores' =>$request->Laboratorio
                ]);
            return redirect('/ListarComputadores');;
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
                $Equipamento= Equipamento::find($id);
                $Equipamento->delete();
                return redirect('/ListarComputadores');;
            }
}
