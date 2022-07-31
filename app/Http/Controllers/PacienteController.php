<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\tipo_documento;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes= Paciente::simplePaginate(7);
        $tipodoc = tipo_documento::simplePaginate();
        return view('paciente.index' , compact('pacientes', 'tipodoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TipoDocumentos=tipo_documento::all();
        return view('paciente.create',compact('TipoDocumentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $validar= Validator::make($request->all(),[
                      'nombre_paciente'=>'required',
                      'apellido_paciente'=>'required',
                      'telefono_paciente'=>'required',
                      'direccion_paciente'=>'required',
                      'id_tipo_documento'=>'required',

             ]);
             if(!$validar->fails()){
                $paciente = new paciente();
                $paciente->nombre_paciente=$request->nombre_paciente;
                $paciente->apellido_paciente=$request->apellido_paciente;
                $paciente->telefono_paciente=$request->telefono_paciente;
                $paciente->direccion_paciente=$request->direccion_paciente;
                $paciente->id_tipo_documento=$request->id_tipo_documento;
                $paciente->save();
                if($paciente)
                {
                    Alert::success('Realizado','paciente guardado');
                    return redirect()->route('paciente.index');
                }
                else {
                    Alert::error('Failed', 'Registo no Guardado');
                    return redirect('/paciente/create');
                }
             }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $paciente = Paciente::where('id',  $id)->first();

        return response()->json($paciente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $paciente=Paciente::find($id);
        $nombreDocumento=tipo_documento::find($id);
        $TipoDocumentos=tipo_documento::all();
        return view('paciente.edit',compact('paciente','TipoDocumentos','nombreDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validar= Validator::make($request->all(),[
            'nombre_paciente'=>'required',
            'apellido_paciente'=>'required',
            'telefono_paciente'=>'required',
            'direccion_paciente'=>'required',
            'id_tipo_documento'=>'required',

   ]);
   if(!$validar->fails()){
      $paciente=Paciente::find($id);
      $paciente->nombre_paciente=$request->nombre_paciente;
      $paciente->apellido_paciente=$request->apellido_paciente;
      $paciente->telefono_paciente=$request->telefono_paciente;
      $paciente->direccion_paciente=$request->direccion_paciente;
      $paciente->id_tipo_documento=$request->id_tipo_documento;
      $paciente->save();
      if($paciente)
      {
          Alert::success('Realizado','paciente guardado');
          return redirect()->route('paciente.index');
      }
      else {
          Alert::error('Failed', 'Registo no Guardado');
          return redirect('/paciente/create');
      }
   }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        
        $paciente->delete();

        Alert::success('Paciente', 'Eliminado Correctamente');
        return redirect()->route('paciente.index');

    }
}
