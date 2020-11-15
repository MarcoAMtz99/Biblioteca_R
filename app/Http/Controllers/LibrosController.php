<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $libros = Libros::get();
        return view('Libros.index',compact('libros'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Libros.create');
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
        $request->validate([
            'name'=>'required|string',
            'autor'=>'required|string',
            'imagen'=>'required|string|min:2|max:100'
        ]);

       /*  $libro = new Libro();
        $libro ->name = $request->name;
        $libro ->autor = $request->autor;
        $libro ->imagen = $request->imagen; */
        Libros::create($request->all());

        /* dd($request); */
        return back()->with('status','El libro se ha creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libros)
    {
        //
        return Libros::active()->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro = Libros::findOrFail($id);
        return view('libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required|string',
            'autor'=>'required|string',
            'imagen'=>'required|string|min:2|max:100'
        ]);
        Libros::findOrFail($id)->update($request->all());
        return back()->with('status','El libro se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        libros::findOrFail($id)->delete();
        return back()->with('status','El libro se ha eliminado');
    }
}
