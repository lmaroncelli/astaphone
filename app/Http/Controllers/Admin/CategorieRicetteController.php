<?php

namespace App\Http\Controllers\Admin;

use App\CategoriaRicetta;
use App\Ricetta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieRicetteController extends AdminController
{

    private function _uploadFile(Request $request)
        {
            if (is_null($request->file('img'))) 
                return null;

            $file = $request->file('img');

            $ext = $file->clientExtension();

            return $file->storeAs('ricette','foto_cat_'.$request->get('uri').'.'.$ext);            
                
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categorieRicette = CategoriaRicetta::orderBy('nome')->get();
    
    return view('admin.categorie-ricette.index', compact('categorieRicette'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoriaRicetta $categoria)
    {
        
        return view('admin.categorie-ricette.form', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $categoria = CategoriaRicetta::create($request->all());


    if (!is_null($this->_uploadFile($request)))
        $ricetta->img = $this->_uploadFile($request);


    $categoria->save();    

    return redirect()->route('categorie-ricette.index')->with('status', 'Ricetta creata correttamente!');
    
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
    $categoria = CategoriaRicetta::find($id);

    return view('admin.categorie-ricette.form', compact('categoria')); 
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

    $categoria = CategoriaRicetta::find($id);
    
    $foto_vecchia = $categoria->img;

    $categoria->fill($request->all());

    if ( !is_null($this->_uploadFile($request)) || $request->has('elimina_immagine') )
        {

        if($foto_vecchia != '' && !is_null($foto_vecchia))
            {
        Storage::delete([$foto_vecchia]);
            }

        $categoria->img = $this->_uploadFile($request);
        }

    $categoria->save();   

    return redirect()->route('categorie-ricette.index')->with('status', 'Categoria modificata correttamente!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoriaRicetta::destroy($id);
        return redirect()->route('categorie-ricette.index')->with('status', 'Categoria eliminata correttamente!');
    }
}
