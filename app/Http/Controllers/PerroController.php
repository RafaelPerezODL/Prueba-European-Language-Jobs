<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perro;

class PerroController extends Controller
{
    public function index()
    {
        $perros = Perro::all();
        return response()->json($perros);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->file('foto')->store('fotos');
        $perro = Perro::create($request->post());
        return response()->json([
            'perro'=>$perro
        ]);
    }

    public function show(Perro $perro)
    {
        return response()->json($perro);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Perro $perro)
    {
        $perro->fill($request->post())->save();
        return response()->json([
            'perro'=>$perro
        ]);
    }
    
    public function destroy(Perro $perro)
    {
        $perro->delete();
        return response()->json([
            'mensaje'=>'Perro eliminado'
        ]);
    }
}
