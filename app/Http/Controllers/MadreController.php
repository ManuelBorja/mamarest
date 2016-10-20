<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\Madre;

class MadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Muestra todas las madres

        $madres = Madre::get();
        return response()->json([
            "msg" => "Ok",
            "madres" => $madres->toArray() 
            ],200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function madres()
    {
        //Muestra todas las madres

        return view('madre.madres');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //questions/create
        return view('madre.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Ilsluminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST madres

        $dni = $request->dni;
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $celular = $request->celular;
        $celular_acompanante = $request->celular_acompanante;
        $fecha_parto = $request->fecha_parto;
        $historia = $request->historia;
        $historia_familiar = $request->historia_familiar;

        return Madre::create([
            'dni' => $dni,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'celular' => $celular,
            'celular_acompanante' => $celular_acompanante,
            'fecha_parto' => $fecha_parto,
            'historia' => $historia,
            'historia_familiar' => $historia_familiar,
            'user_id' => Auth::guard('api')->id()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //GET madres/id
        $madre = Madre::where('id', $id)->first();
        return response()->json([
            "msg" => "Ok",
            "madres" => $madre->toArray() 
            ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //GET madres/id/edit
        return "muestra el formulario para modificar una maadre";   
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
        //PUT/PATCH /madre/id
        $madre = Madre::find($id);

        $madre->dni = $request->dni;
        $madre->nombres = $request->nombres;
        $madre->apellidos = $request->apellidos;
        $madre->celular = $request->celular;
        $madre->celular_acompanante = $request->celular_acompanante;
        $madre->fecha_parto = $request->fecha_parto;
        $madre->historia = $request->historia;
        $madre->historia_familiar = $request->historia_familiar;

        $madre->save();

        return response()->json([
            "msg" => "Ok",
            "madres" => $madre->toArray() 
            ],200);        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE madres/id
    }
}
