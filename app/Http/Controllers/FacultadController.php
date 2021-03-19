<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultad::orderBy('id', 'DESC')->paginate(10);
        return view('facultad.index', compact('facultades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facultad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['codigo' => 'required', 'nombre_facultad' => 'required']);
        facultad::create($request->all());
        return redirect()->route('facultad.index')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultades = Facultad::find($id);
        return view('facultad.show', compact('facultades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultad = Facultad::find($id);
        return view('facultad.edit', compact('facultad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['codigo' => 'required', 'nombre_facultad' => 'required']);
        facultad::find($id)->update($request->all());
        return redirect()->route('facultad.index')->with('success', 'Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        facultad::find($id)->delete();
        return redirect()->route('facultad.index')->with('success', 'Registro eliminado satisfactoriamente');
    }
}
