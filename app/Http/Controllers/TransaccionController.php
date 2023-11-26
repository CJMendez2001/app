<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Afiliado;
use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosTransaccion = Transaccion::all();
        return view('transaccion.index')->with('transaccions', $datosTransaccion);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $transaccion = new Transaccion();
        $transaccion->idafiliado=$request->get('idafiliado'); 
        $transaccion->idempleado=$request->get('idempleado'); 
        $transaccion->nombreafiliado=$request->get('nombreafiliado'); 
        $transaccion->tipoT=$request->get('tipoT'); 
        $transaccion->date=$request->get('date'); 
        $transaccion->cantidad=$request->get('cantidad');   
        $transaccion->save();
        return redirect('transaccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
