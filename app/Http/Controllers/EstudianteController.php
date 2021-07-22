<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes']=Estudiante::paginate(10);
        return view('estudiante.index',$datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Telefono'=>'required|string|max:10',
            'Correo'=>'required|email',
            'Celular'=>'required|string|max:100',
            'Contrasenia'=>'required|string|max:100',
            'NombreUsuario'=>'required|string|max:100',

        ];

        $mensaje=[
          'required'=>'El :attribute es requerido',

        ];

        $this->validate($request, $campos, $mensaje);


        $datosEstudiante = request()->except('_token');
        Estudiante::insert($datosEstudiante);

        //return response()->json($datosEstudiante); 
        return redirect('estudiante')->with('Mensaje','Estudiante agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Telefono'=>'required|string|max:10',
            'Correo'=>'required|email',
            'Celular'=>'required|string|max:100',
            'Contrasenia'=>'required|string|max:100',
            'NombreUsuario'=>'required|string|max:100',

        ];

        $mensaje=[
          'required'=>'El :attribute es requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        //
        $datosEstudiante = request()->except(['_token','_method']);
        Estudiante::where('id','=',$id)->update($datosEstudiante);

        $estudiante=Estudiante::findOrFail($id);
        //return view('estudiante.edit', compact('estudiante') );
        return redirect('estudiante')->with('Mensaje','Estudiante modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Estudiante::destroy($id);
        return redirect('estudiante')->with('Mensaje','Estudiante borrado');
        
    }
}
