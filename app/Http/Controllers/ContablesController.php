<?php

namespace App\Http\Controllers;

use App\Models\Contables;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class ContablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['datos']=Contables::get();
        //$count['count']=Contables::where("film_Categoria","=",'Wawas al Cine')->count();
        //return view('wawas',$datos,$count);
        return view('contable.contable-list',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contable.contable-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SessionManager $sessionManager)
    {
        // $datosEmpleado = request()->except('_token');
        // Contables::insert($datosEmpleado);

        //return response()->json($datosEmpleado);
        //Session::
        $sessionManager->flash('Mensaje', 'Agregado Exitosamente');
        $usuario = request() ->except('_token');
        Contables::insert($usuario);


        $datos['datos']=Contables::get();
       
        return view('contable.contable-list',$datos);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contables  $contables
     * @return \Illuminate\Http\Response
     */
    public function show(Contables $contables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contables  $contables
     * @return \Illuminate\Http\Response
     */
    public function edit(Contables $contables)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contables  $contables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contables $contables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contables  $contables
     * @return \Illuminate\Http\Response
     */
    public function destroy($contable_id)
    {
        echo $contable_id;
        Contables::where('contable_id', $contable_id)->delete();  
        //return $contable;   
        //Contables::destroy('contable_id');
        // $contable->destroy();
        return redirect('/contables')->with('Mensaje','Contable eliminado con Exito');
        
    }
}
