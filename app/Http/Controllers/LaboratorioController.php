<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function TodosLaboratorios(){
    $laboratorios=Laboratorio::all();
   
return view('EscolherLaboratorio.EscolhaLabs',['laboratorios'=>$laboratorios]);

}


    public function index()
    {
        return view('EscolherLaboratorio.EscolhaLabs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());

        Laboratorio::create([
      'name'=>$request->NomeLaboratorio
    ]);

   return redirect('/VerLabsAdicionados');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $laboratorios=Laboratorio::all();
        return view('FormularioADM.AdicionarLaboratorios',['laboratorios'=>$laboratorios]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorios = Laboratorio::find($id);


            return view('FormularioADM.EditarLaboratorios',['laboratorio'=>$laboratorios]);
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

      
       
        Laboratorio::find($id)->update([
       'name'=>$request->Name
        ]
           );
        return redirect('/VerLabsAdicionados');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $laboratorios= Laboratorio::find($id);
       $laboratorios->delete();
       return redirect('/VerLabsAdicionados');;

    }
}
