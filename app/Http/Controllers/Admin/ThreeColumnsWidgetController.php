<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ThreeColumnsWidget;
use Illuminate\Http\Request;

class ThreeColumnsWidgetController extends Controller
{


    private function _storeImages(ThreeColumnsWidget &$widget, Request $request)
      {
      
      for ($i=1; $i <= 3 ; $i++) 
        {
        $img = "img_$i";
        if (!is_null($request->file('img_'.$i)))
          {
          $image = $request->file('img_'.$i);
          $imageName = time().$image->getClientOriginalName();

          $path_img = $image->storeAs('widget',$imageName); 

          $widget->fill(['img_'.$i => $path_img]);
          } 
        }

      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $widgets = ThreeColumnsWidget::all();

    return view('admin.widget.three-cols.index', compact('widgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ThreeColumnsWidget $widget)
    {
     return view('admin.widget.three-cols.form', compact('widget'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $widget = ThreeColumnsWidget::create($request->except('img_1','img_2','img_3'));

    $this->_storeImages($widget,$request);

    $widget->save();

    return redirect()->route('three-cols-widget.index')->with('status', 'Widget creato correttamente!');
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
    $widget = ThreeColumnsWidget::find($id);


    return view('admin.widget.three-cols.form', compact('widget'));
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
    $widget = ThreeColumnsWidget::find($id);

    $widget->fill($request->except('img_1','img_2','img_3'));

    $this->_storeImages($widget,$request);

    $widget->save();

     return redirect()->route('three-cols-widget.index')->with('status', 'Widget modificato correttamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      ThreeColumnsWidget::destroy($id);
      return redirect()->route('three-cols-widget.index')->with('status', 'Widget eliminato correttamente!');
    }
}
