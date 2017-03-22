<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\ImmagineSlide;
use App\ImmaginiSlideCategorieProdotti;
use App\SlideCategorieProdotti;
use Illuminate\Http\Request;


class SlideCategorieProdottiController extends Controller
{


    /**
     * [_uploadSlide fa l'upload delle immagini con dropzone di tutte le slide della home - header, freschi e confezionati; per ognuna cambia solo l'id della slide e la folder dove salvare le immagini]
     * @param  integer $id     [id della slide]
     * @param  string  $folder [folder dove salvare le immagini]
     * @return [type]          [description]
     */
    private function _uploadSlide(Request $request, $id = 0, $folder = 'homepage/slide')
    {
      $image = $request->file('file');

      $imageName = time().$image->getClientOriginalName();
      
      $path = $image->storeAs($folder,$imageName);

      $immagineSlide = ImmagineSlide::create(['slide_id' => $id ,'nome' => $path]);


      return response()->json(['success'=>$imageName]);
    }


    /*
    post chiamato dal caricamento di ogni immagine tramite Dropzone
     */
    public function uploadSlide(Request $request)
    {    
        $slider_id = $request->get('slide_id');

        $folder = 'homepage/slide';

        return $this->_uploadSlide($request, $slider_id, $folder);
    }

    
    /* POST chiamato per modificare le descrizioni delle immagine slideheader */
    public function modifySlide(Request $request)
      {
      $slide_id = $request->get('slide_id');
      $slide = SlideCategorieProdotti::with(['immagini'])->find($slide_id);

      foreach ($slide->immagini as $imageSlide) 
        {
        if ($request->get('descrizione_'.$imageSlide->id) != '') 
          {
          $imageSlide->descrizione = $request->get('descrizione_'.$imageSlide->id);
          $imageSlide->save();
          }
        }
      return redirect()->route('slide-categorie.edit',$slide_id)->with('status', 'Slide aggiornata correttamente!');
      }


      public function deleteSliderImageAjax(Request $request)
        {
          $id = $request->get('id');
          $slide = ImmagineSlide::find($id);
          $foto_vecchia = $slide->nome;
          if(!is_null($foto_vecchia) && $foto_vecchia != '')
            {
          Storage::delete([$foto_vecchia]);
            }
          ImmagineSlide::destroy($id);

          echo "ok";
        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $slide = SlideCategorieProdotti::all();
    
    return view('admin.slide-categorie.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SlideCategorieProdotti $slide)
    {
    $categorie = Categoria::pluck('nome', 'id');
    return view('admin.slide-categorie.form', compact('slide','categorie')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $slide = SlideCategorieProdotti::create(['titolo' => $request->get('titolo')]);

    $categorie = Categoria::pluck('id');

    foreach ($categorie as $id) 
      {
      $immagine = [];
      $immagine['nome'] = '';
      $immagine['descrizione'] = '';
      $immagine['url_pagina'] = '';

      $immagine['descrizione'] = $request->get('desc_'.$id);
      $immagine['url_pagina'] = $request->get('url_pagina_'.$id);
      $immagine['categoria_id'] = $id; 
      $immagine['nome'] = '';

      $img = "img_$id";
      if (!is_null($request->file('img_'.$id)))
        {
        $image = $request->file('img_'.$id);
        $imageName = time().$image->getClientOriginalName();

        $path_img = $image->storeAs('slide_categorie',$imageName); 

        $immagine['nome'] = $path_img;
        } 

      $immagineSlide = new ImmaginiSlideCategorieProdotti($immagine);

      $slide->immagini()->save($immagineSlide);


      }

    return redirect()->route('slide-categorie.index')->with('status', 'Slide creata correttamente!');
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
    $slide = SlideCategorieProdotti::find($id);

    // creo un array che associa l'oggetto immagine della tblImmaginiSlideCategorieProdotti
    // alla chiave categoria_id
    $immaginiSlide_arr = [];
    $immaginiSlide = $slide->immagini;
    
    foreach ($immaginiSlide as $immagineSlide) 
      {
      $immaginiSlide_arr[$immagineSlide->categoria_id] = $immagineSlide;
      }


    $categorie = Categoria::pluck('nome', 'id');
    return view('admin.slide-categorie.form', compact('slide','categorie','immaginiSlide_arr')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_slide)
    {
    $slide = SlideCategorieProdotti::find($id_slide);
    $slide->fill(['titolo' => $request->get('titolo')])->save();

    $categorie = Categoria::pluck('id');
    foreach ($categorie as $id) 
      {
      $immagineSlide = ImmaginiSlideCategorieProdotti::where('slide_id',$id_slide)->where('categoria_id',$id)->first();      
      $immagine = [];

      $immagine['descrizione'] = $request->get('desc_'.$id);
      $immagine['url_pagina'] = $request->get('url_pagina_'.$id);

      $img = "img_$id";

      if (!is_null($request->file('img_'.$id)))
        {
        $image = $request->file('img_'.$id);
        $imageName = time().$image->getClientOriginalName();

        $path_img = $image->storeAs('slide_categorie',$imageName); 

        $immagine['nome'] = $path_img;
        } 

      $immagineSlide->fill($immagine)->save();

      }

    return redirect()->route('slide-categorie.index')->with('status', 'Slide modificata correttamente!');

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
