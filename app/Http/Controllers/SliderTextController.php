<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderText;

class SliderTextController extends Controller
{
    //
    public function index(){
  
        $sliders = SliderText::all();
        return view('cms.slider_text.index',compact('sliders'));
    }  
    
    public function create()
    {
        return view('cms.slider_text.create');
    }
    
    
    public function store(Request $request)
    {
      
        SliderText::create([
    
            'text' => $request->text,
            'text2' => $request->text2,
       ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_slider_text');
    }
    
    public function edit($id)
    {
        $slider = SliderText::find($id);
        return view('cms.slider_text.edit', compact('slider'));
    }
    
    public function update(Request $request, $id)
    {

        SliderText::find($id)->update([
            'text' => $request->text,
            'text2' => $request->text2,
        ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_slider_text');
    }
    
    public function delete($id)
    {
        SliderText::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_slider_text');
    }
}
