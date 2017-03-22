<?php

namespace App\Http\Controllers\Admin;

use App\Caratteristica;
use App\Categoria;
use App\CustomPage;
use App\ImmagineSlide;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CustomPageController extends AdminController
{

    function __construct()
      {   

      }


    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($titolo)
      {
     
      $page = CustomPage::titolo($titolo)->first();

      $caratteristiche = Caratteristica::pluck('nome', 'id');
      $categorie = Categoria::pluck('nome', 'id');

      $categorie_associate = [];
      $caratteristiche_associate = [];
     

      if (!is_null($page->listingCategorie)) 
          $categorie_associate = explode(',',$page->listingCategorie);
      
      if (!is_null($page->listingCaratteristiche)) 
          $caratteristiche_associate = explode(',',$page->listingCaratteristiche);


      $slideHeader =    ['0' => 'Nessuno'] + Slide::pluck('titolo', 'id')->all();
     
      return view('admin.pagine.custom.form', compact('page','caratteristiche','categorie', 'caratteristiche_associate','categorie_associate','slideHeader'));
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
      $page = CustomPage::find($id);

      $content = $this->superManage_content_summernote($request->get('content'));

      $page->fill(['content' => $content]);

      $page->fill($request->except('content','listingCaratteristiche', 'listingCategorie'));

      // caratteristiche e categorie
      $caratteristiche = $request->get('caratteristiche');
      if (!is_null($caratteristiche))
          $listingCaratteristiche =  implode(',',$caratteristiche);
      else
          $listingCaratteristiche = null;

      $page->fill(['listingCaratteristiche' => $listingCaratteristiche]);


      $categorie = $request->get('categorie');        
      if (!is_null($categorie))
          $listingCategorie = implode(',',$categorie);
      else
          $listingCategorie = null;

      $page->fill(['listingCategorie' => $listingCategorie]);


      $categorieRicette = $request->get('categorieRicette');        
      if (!is_null($categorieRicette))
          $listingCategorieRicette = implode(',',$categorieRicette);
      else
          $listingCategorieRicette = null;

      $page->fill(['listingCategorieRicette' => $listingCategorieRicette]);  


      $page->save();

      //dd($homepage);
      return redirect()->route('custompage.edit',$page->title)->with('status', 'Pagina aggiornata correttamente!');

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

}
