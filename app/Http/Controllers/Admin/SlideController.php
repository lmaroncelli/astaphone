<?php

namespace App\Http\Controllers\Admin;

use App\ImmagineSlide;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class SlideController extends AdminController
{



    /*
    post chiamato dal caricamento di ogni immagine tramite Dropzone
     */
    public function uploadSlide(Request $request)
    {    
        $slider_id = $request->get('slide_id');

        $folder = 'slide';

        $tw = 200;
        $th = 104;

        /* richiamo superUploadSlide del controller che estende questa classe */
        return $this->superUploadSlide($request, $slider_id, $folder, $tw, $th);
    }

    
    /* POST chiamato per modificare le descrizioni delle immagine slideheader */
    public function modifySlide(Request $request)
      {
      $slide_id = $request->get('slide_id');
      $slide = Slide::with(['immagini'])->find($slide_id);

      foreach ($slide->immagini as $imageSlide) 
        {
        if ($request->get('descrizione_'.$imageSlide->id) != '') 
          {
          $imageSlide->descrizione = $request->get('descrizione_'.$imageSlide->id);
          $imageSlide->save();
          }
        }
      return redirect()->route('slide.edit',$slide_id)->with('status', 'Slide aggiornata correttamente!');
      }


      public function deleteSliderImageAjax(Request $request)
        {
          $this->superDeleteSliderImage($request);

          echo "ok";
        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $slide = Slide::all();
    
    return view('admin.slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Slide $slide)
    {
    return view('admin.slide.form', compact('slide')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //dd($request->all());
    $slide = Slide::create($request->all());

    return redirect()->route('slide.edit',$slide->id)->with('status', 'Slide creata correttamente!');
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
    $slide = Slide::find($id);
    return view('admin.slide.form', compact('slide')); 
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
    $slide = Slide::find($id);
    $slide->fill($request->all())->save();
    
    return redirect()->route('slide.edit',$slide->id)->with('status', 'Slide modificata correttamente!');

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
