<?php

namespace App\Http\Controllers;

use App\Models\nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = nota::all();
        return view('pages.notas', compact('notas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.crear_nota');
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
        $imagen = $request->has('imagen') ? (is_null($request->imagen) ? 'https://images.vexels.com/media/users/3/204881/isolated/lists/efdc3831d94459b2e871b227643512ee-icono-de-trazo-de-lapiz-de-notas.png' : $request->imagen) : 'https://images.vexels.com/media/users/3/204881/isolated/lists/efdc3831d94459b2e871b227643512ee-icono-de-trazo-de-lapiz-de-notas.png';
        nota::create([
            'titulo' => $request->titulo,
            'fecha' => now(),
            'contenido' => $request->contenido,
            'imagen' => $imagen,
            'id_user' => auth()->user()->id
        ]);
        return back()->with('success', 'Guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nota = nota::find($id);
        return view('pages.nota', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
