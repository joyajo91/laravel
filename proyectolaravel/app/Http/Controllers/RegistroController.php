<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['registro']=registro::paginate();
        return view('registro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registro.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosregistro = request()->except('_token');
        //$datosregistro = request()->all();
        registro::insert($datosregistro);        
          return response()->json($datosregistro);
    }

    /**
     * Display the specified resource.
     */
    public function show(registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registro $registro)
    {
        //
        return view('registro.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id)
    {
        //
        Registro::destroy($Id);
        return redirect('registro');
    }
}
