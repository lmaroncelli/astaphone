<?php

namespace App\Http\Controllers\Admin;

use App\Galleria;
use App\Http\Controllers\Controller;
use App\ImmagineGalleria;
use Illuminate\Http\Request;

class GallerieController extends Controller
{


    public function uploadFile(Request $request)
    {    
        $galleria_id = $request->get('galleria_id');

        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        
        $path = $image->storeAs('galleria',$imageName);

        $immagineGalleria = ImmagineGalleria::create(['galleria_id' => $galleria_id ,'nome' => $path]);


        return response()->json(['success'=>$imageName]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerie = Galleria::all();
        return view('admin.gallerie.index', compact('gallerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Galleria $galleria)
    {
        return view('admin.gallerie.form', compact('galleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galleria = Galleria::create($request->all());

        return view('admin.gallerie.form', compact('galleria'));
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
    $galleria = Galleria::find($id);
    return view('admin.gallerie.form', compact('galleria'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function carica($id)
    {
    $galleria = Galleria::with(['immagini'])->find($id);

    return view('admin.gallerie.formUpload', compact('galleria'));
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
        $galleria = Galleria::find($id);

        $galleria->fill($request->all());
    
        $galleria->save();   

        return redirect()->route('gallerie.index')->with('status', 'Galleria modificata correttamente!');
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
