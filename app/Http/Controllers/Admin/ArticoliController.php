<?php

namespace App\Http\Controllers\Admin;

use App\Articolo;
use App\CategoriaArticolo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articoli = Articolo::all();
        
        return view('admin.articoli.index', compact('articoli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Articolo $articolo)
    {
    $categorie = CategoriaArticolo::pluck('nome', 'id');
    return view('admin.articoli.form', compact('articolo','categorie')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_array = $request->all();
        $request_array['user_id'] = Auth::user()->id;
        $articolo = Articolo::create($request_array);

        return redirect()->route('articoli.index')->with('status', 'Articolo creato correttamente!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $articolo = Articolo::find($id);
    $categorie = CategoriaArticolo::pluck('nome', 'id');
    return view('admin.articoli.form', compact('articolo','categorie'));
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
    $articolo = Articolo::find($id);
    $articolo->fill($request->all())->save();

    return redirect()->route('articoli.index')->with('status', 'Articolo modificato correttamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    Articolo::destroy($id);
    return redirect()->route('articoli.index')->with('status', 'Articolo eliminato correttamente!');
    }
}
