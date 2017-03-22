<?php

namespace App\Http\Controllers\Admin;

use App\CategoriaArticolo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieArticoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieArticoli = CategoriaArticolo::orderBy('nome')->get();
        
        return view('admin.categorie-articoli.index', compact('categorieArticoli'));
    }

   /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function create(CategoriaArticolo $categoria)
       {
           
           return view('admin.categorie-articoli.form', compact('categoria'));
       }

       /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function store(Request $request)
       {

       $categoria = CategoriaArticolo::create($request->all());


       $categoria->save();    

       return redirect()->route('categorie-articoli.index')->with('status', 'Categoria creata correttamente!');
       
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
       $categoria = CategoriaArticolo::find($id);

       return view('admin.categorie-articoli.form', compact('categoria')); 
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

       $categoria = CategoriaArticolo::find($id);

       $categoria->save();   

       return redirect()->route('categorie-articoli.index')->with('status', 'Categoria modificata correttamente!');
       
       }

       /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function destroy($id)
       {
           CategoriaArticolo::destroy($id);
           return redirect()->route('categorie-articoli.index')->with('status', 'Categoria eliminata correttamente!');
       }
}
