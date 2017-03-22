<?php

namespace App\Http\Controllers\Admin;

use App\CustomPage;
use App\ImmagineSlide;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HomePageController extends AdminController
{

    function __construct()
      {   
          $homepage = CustomPage::first();
          
          $this->homepage = $homepage;

          $this->slide_header = Slide::with(['immagini'])->titolo('hp_slide_header')->first();

          $this->slide_freschi = Slide::with(['immagini'])->titolo('hp_slide_freschi')->first();

          $this->slide_confezionati = Slide::with(['immagini'])->titolo('hp_slide_confezionati')->first();
          
          $this->slide_footer = Slide::with(['immagini'])->titolo('hp_slide_footer')->first();


      }


    private function _isVideo($mime)
      {
      return in_array($mime,explode(',','video/mp4'));   
      }


    private function _uploadFile(Request $request)
      {
          if (is_null($request->file('img'))) 
              return null;

          $file = $request->file('img');

          $ext = $file->clientExtension();

          return $file->storeAs('ricette','foto_cat_'.$request->get('uri').'.'.$ext);            
              
      }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
      {
      $slide_header = $this->slide_header;
      $slide_footer = $this->slide_footer;
      
      $homepage = CustomPage::first();
      return view('admin.pagine.homepage.form', compact('slide_header','slide_footer', 'homepage'));
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      /////////////////////
      // upload MAGLIANA //
      /////////////////////

      $data = [];

      foreach (array('magliana','cipro','tiburtina') as $negozio) 
        {

        if (!is_null($request->file('img_'.$negozio)))
          {
          $image = $request->file('img_'.$negozio);
          $imageName = time().$image->getClientOriginalName();

          $path_img_negozio = $image->storeAs('homepage/negozi',$imageName); 

          // open an image file
          $img = Image::make(storage_path('app/'.$path_img_negozio));

          // resize image instance
          $img->resize(100,50);

          // // save file with medium quality
          $img->save(storage_path('app_thumb/homepage/negozi/' .$imageName), 60);

          $data['img_'.$negozio] = $path_img_negozio;
          } 

        $desc_negozio = $request->get('desc_'.$negozio);
        $data['desc_'.$negozio] = $desc_negozio;
        
        }

      DB::table('tblCustomPages')
          ->where('id', 1)
          ->update($data);

      return redirect()->route('pannello')->with('status', 'Homepage aggiornata correttamente!');
    }



    /**
     * [_uploadSlide fa l'upload delle immagini con dropzone di tutte le slide della home - header, freschi e confezionati; per ognuna cambia solo l'id della slide e la folder dove salvare le immagini]
     * @param  integer $id     [id della slide]
     * @param  string  $folder [folder dove salvare le immagini]
     * @return [type]          [description]
     */
    private function _uploadSlide(Request $request, $id = 0, $folder = 'homepage/slideProdotti', $tw = 100, $th = 86)
    {

    try 
      {

      $image = $request->file('file');

      $imageName = time().$image->getClientOriginalName();
      
      $path = $image->storeAs($folder,$imageName);

     /* $path = $folder . '/'. $imageName;
      $request->file('file')->move(
               storage_path() . $path
      );*/


      $mime = $image->getMimeType();

      if(!$this->_isVideo($mime)) 
        {
        /* CREO LA thumb SOLO SE E' UN'IMMAGINE */

        // open an image file
        $img = Image::make(storage_path('app/'.$path));

        // resize image instance
        $img->resize($tw, $th);

        // // save file with medium quality
        $img->save(storage_path('app_thumb/'. $folder. '/' .$imageName), 60);
        }

      $immagineSlide = ImmagineSlide::create(['slide_id' => $id ,'nome' => $path,'mime' => $mime]);



      return response()->json(['success'=>$imageName]);

      }
      //catch exception
      catch(Exception $e) 
        {
        header("HTTP/1.0 400 Bad Request");
        echo "Ups error message";
        }
    }



    
    /*
    post chiamato dal caricamento di ogni immagine tramite Dropzone
     */
    public function uploadSlideHeader(Request $request)
    {    
        $slide_header = $this->slide_header;

        $slider_id = $slide_header->id;

        $folder = 'homepage/slideHeader';

        $tw = 200;
        $th = 104;

        return $this->_uploadSlide($request, $slider_id, $folder, $tw, $th);
    }


    /*
    post chiamato dal caricamento di ogni immagine tramite Dropzone
     */
    public function uploadSlideFooter(Request $request)
    {    
        $slide_footer = $this->slide_footer;

        $slider_id = $slide_footer->id;

        $folder = 'homepage/slideFooter';

        $tw = 100;
        $th = 74;

        return $this->_uploadSlide($request, $slider_id, $folder, $tw, $th);
    }




    
    public function uploadSlideProdttiFreschi(Request $request)
    {    
        $slide_freschi = $this->slide_freschi;

        $slider_id = $slide_freschi->id;

        $tw = 100;
        $th = 86;

        return $this->_uploadSlide($request, $slider_id, 'homepage/slideProdotti', $tw, $th);
    }

    public function uploadSlideProdttiConfezionati(Request $request)
    {    
        $slide_confezionati = $this->slide_confezionati;

        $slider_id = $slide_confezionati->id;
        
        $tw = 100;
        $th = 86;

        return $this->_uploadSlide($request, $slider_id, 'homepage/slideProdotti', $tw, $th);
    }




    /* POST chiamato per modificare le descrizioni delle immagine slideheader */
    public function modifySlideHeader(Request $request)
      {
      foreach ($this->slide_header->immagini as $imageSlide) 
        {
        if ($request->get('descrizione_'.$imageSlide->id) != '') 
          {
          $imageSlide->descrizione = $request->get('descrizione_'.$imageSlide->id);
          $imageSlide->save();
          }
        }
      return redirect()->route('homepage.edit')->with('status', 'Homepage aggiornata correttamente!');
      }

     /* POST chiamato per modificare le descrizioni delle immagine slidefooter */
    public function modifySlideFooter(Request $request)
      {
      foreach ($this->slide_footer->immagini as $imageSlide) 
        {
        if ($request->get('descrizione_'.$imageSlide->id) != '') 
          {
          $imageSlide->descrizione = $request->get('descrizione_'.$imageSlide->id);
          $imageSlide->save();
          }
        }
      return redirect()->route('homepage.edit')->with('status', 'Homepage aggiornata correttamente!');
      }



    public function deleteSliderImageAjax(Request $request)
      {
        $id = $request->get('id');
        $slide = ImmagineSlide::find($id);
        $foto_vecchia = $slide->nome;
        if(!is_null($foto_vecchia) && $foto_vecchia != '')
          {
        Storage::delete([$foto_vecchia]);
        
        if(!$this->_isVideo($slide->mime)) 
          {
          File::delete(base_path() . '/storage/app_thumb/'.$foto_vecchia);
          }
         
          }
        ImmagineSlide::destroy($id);

        echo "ok";
      }

    
    public function deleteNegozioImageAjax(Request $request)
      {
        $colname = $request->get('colname');

        $homepage = $this->homepage;

        if(!is_null($homepage->$colname) && $homepage->$colname != '')
          {
        Storage::delete([$homepage->$colname]);
          }
       
        $homepage->$colname = null;

        $homepage->save();        

        echo "ok";
      }

    public function deleteMapImageAjax(Request $request)
      {
        $colname = $request->get('colname');

        $homepage = $this->homepage;

        if(!is_null($homepage->$colname) && $homepage->$colname != '')
          {
        Storage::delete([$homepage->$colname]);
          }
       
        $homepage->$colname = null;

        $homepage->save();        

        echo "ok";
      }

    public function saveMap(Request $request)
      {

      //dd($request->all());
      $homepage = $this->homepage;

      $homepage->fill($request->except(['gm_info_img','gm_icon','gm_info2_img','gm_icon2','gm_info3_img','gm_icon3']));

      foreach (['','2','3'] as $value) 
        {
        // info, info2, info3
        $var_info = "gm_info".$value."_img";
        $var_icon = "gm_icon".$value;

        if (!is_null($request->file($var_info)))
          {
        
          $image = $request->file($var_info);
          $imageName = time().$image->getClientOriginalName();

          $path_img_info = $image->storeAs('homepage/map',$imageName); 

          $homepage->$var_info = $path_img_info;
          
          }

        if (!is_null($request->file($var_icon)))
          {
        
          $image = $request->file($var_icon);
          $imageName = time().$image->getClientOriginalName();

          $path_img_icon = $image->storeAs('homepage/map',$imageName); 

          $homepage->$var_icon = $path_img_icon;
          
          } 

        } 

      $homepage->save();

      //dd($homepage);
      return redirect()->route('homepage.edit')->with('status', 'Homepage aggiornata correttamente!');

      }


    
      public function modifySEOFileds(Request $request)
        {
        $homepage = $this->homepage;
        $homepage->fill($request->all());
        $homepage->save();

        return redirect()->route('homepage.edit')->with('status', 'Homepage aggiornata correttamente!');
        }

}
