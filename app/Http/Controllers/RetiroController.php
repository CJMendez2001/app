<?php

namespace App\Http\Controllers;
use App\Models\Retiro;

use Illuminate\Http\Request;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $empleado, string $afiliado,string $nombre)
    {
        //
        $empleados=$empleado;
        $afiliados=$afiliado;
        $nafiliados=$nombre;
        $datosRetiro = Retiro::all();
        return view('retiro.index')->with('retiros', $datosRetiro)->with('empleado',$empleados)
        ->with('afiliado',$afiliados)->with('nombre',$nafiliados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $empleado, string $afiliado,string $nombre)
    {
        //
        $empleados = $empleado;
        $afiliados = $afiliado;
        $nombres= $nombre;
        return view('retiro.create')->with('empleados', $empleados)->with('afiliados',$afiliados)->with('nombre',$nombres);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fecha' => 'required|date',
            'cantidad' => 'required|numeric',
            'idempleado' => 'required|numeric', 
            'idafiliado' => 'required|numeric', 
            'nombreafiliado' => 'required|string', 
        ]);

        Retiro::create([
            'fecha' => $request->fecha,
            'cantidad' => $request->cantidad,
            'idempleado' => $request->idempleado,
            'idafiliado' => $request->idafiliado,
            'nombreafiliado' => $request->nombreafiliado,
        ]);

        return redirect()->route('empleado.index');
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
