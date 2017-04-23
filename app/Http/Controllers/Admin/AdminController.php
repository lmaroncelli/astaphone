<?php

namespace App\Http\Controllers\admin;


use App\CustomPage;
use App\ImmagineMultimedia;
use App\ImmagineSlide;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;




class AdminController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function __construct()
    {
    	$this->middleware('auth');

    }


    private function _isVideo($mime)
      {
      return in_array($mime,explode(',','video/mp4'));   
      }

    /**
     * [_uploadSlide fa l'upload delle immagini con dropzone di tutte le slide della home - header, freschi e confezionati; per ognuna cambia solo l'id della slide e la folder dove salvare le immagini]
     * @param  integer $id     [id della slide]
     * @param  string  $folder [folder dove salvare le immagini]
     * @return [type]          [description]
     */
    public function superUploadSlide(Request $request, $id = 0, $folder = 'homepage/slideProdotti', $tw = 100, $th = 86)
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


    public function superDeleteSliderImage(Request $request)
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

      }

    public function superManage_content_summernote($content)
    {
      $dom = new \DomDocument();
      $dom->encoding='utf-8';
      
      libxml_use_internal_errors(true);
      $dom->loadHtml(utf8_decode($content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
      $images = $dom->getElementsByTagName('img');
     // foreach <img> in the submited content
      foreach($images as $img){
          $src = $img->getAttribute('src');
          
          // if the img source is 'data-url'
          if(preg_match('/data:image/', $src)){                
              // get the mimetype
              preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
              $mimetype = $groups['mime'];                
              // Generating a random filename
              $filename = uniqid();
              $filepath = "summernoteimages/$filename.$mimetype";    
              // @see http://image.intervention.io/api/
              $image = Image::make($src)
                // resize if required
                /* ->resize(300, 200) */
                ->encode($mimetype, 100)  // encode file to the specified mimetype
                ->save(public_path($filepath));                
              $new_src = asset($filepath);
              $img->removeAttribute('src');
              $img->setAttribute('src', $new_src);
          } // <!--endif
      } // <!-- endfor
      return $dom->saveHTML($dom->documentElement);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  		if (Auth::user()->ruolo == 'admin') 
        {
        $custompages = CustomPage::where('id','!=',1)->get();
        return view('admin.home', compact('custompages'));
  		  } 
      else 
        {
  			return redirect('/');
  		  }		
    }
}
  